<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito;

use Andy87\ClientsBase\Provider\AbstractProvider;

/**
 * Базовый provider для Avito API с ленивым доступом к вложенным группам методов.
 */
abstract class BaseAvitoProvider extends AbstractProvider
{
    /** @var array<string, class-string<BaseAvitoProvider>> Карта вложенных групп методов. */
    protected const OPERATION_GROUPS = [];

    /** @var array<string, BaseAvitoProvider> Созданные вложенные группы методов. */
    private array $operationGroups = [];

    /**
     * Возвращает вложенную группу методов по имени свойства.
     *
     * @param string $name Имя группы.
     *
     * @return BaseAvitoProvider Вложенная группа методов.
     *
     * @throws \OutOfBoundsException Если группа не зарегистрирована.
     */
    public function __get(string $name): BaseAvitoProvider
    {
        return $this->operationGroup($name);
    }

    /**
     * Проверяет, зарегистрирована ли вложенная группа методов.
     *
     * @param string $name Имя группы.
     *
     * @return bool true, если группа доступна.
     */
    public function __isset(string $name): bool
    {
        return array_key_exists($name, static::OPERATION_GROUPS);
    }

    /**
     * Возвращает вложенную группу методов по имени.
     *
     * @param string $name Имя группы.
     *
     * @return BaseAvitoProvider Вложенная группа методов.
     *
     * @throws \OutOfBoundsException Если группа не зарегистрирована.
     */
    public function operationGroup(string $name): BaseAvitoProvider
    {
        if (isset($this->operationGroups[$name])) {
            return $this->operationGroups[$name];
        }

        $className = static::OPERATION_GROUPS[$name] ?? null;

        if ($className === null) {
            throw new \OutOfBoundsException(sprintf('Avito operation group "%s" is not registered.', $name));
        }

        return $this->operationGroups[$name] = new $className(
            baseUrl: $this->baseUrl,
            authorizationStrategy: $this->authorizationStrategy,
            transport: $this->transport,
            timeout: $this->timeout,
            runtime: $this->runtime,
        );
    }

    /**
     * Возвращает список доступных вложенных групп методов.
     *
     * @return list<string> Имена групп.
     */
    public function operationGroupNames(): array
    {
        return array_keys(static::OPERATION_GROUPS);
    }
}
