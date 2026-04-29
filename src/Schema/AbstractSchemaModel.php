<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Schema;

/**
 * Базовая модель OpenAPI schema с гидрацией, вложенными cast-правилами и сериализацией.
 */
abstract class AbstractSchemaModel
{
    /** @var array<string, string> Карта PHP-свойств в имена полей API. */
    protected const FIELD_MAP = [];

    /** @var list<string> Обязательные PHP-свойства. */
    protected const REQUIRED_FIELDS = [];

    /** @var list<string> PHP-свойства, которые могут быть null по OpenAPI nullable. */
    protected const NULLABLE_FIELDS = [];

    /** @var array<string, class-string|array{0:class-string}> Правила преобразования вложенных моделей. */
    protected const CASTS = [];

    /** @var mixed Значение scalar schema. */
    protected mixed $schemaValue = null;

    /** @var mixed Исходные данные модели. */
    protected mixed $raw = null;

    /**
     * Создаёт модель schema.
     *
     * @param mixed $data Исходные данные schema.
     *
     * @return void
     *
     * @throws \UnexpectedValueException Если обязательное поле отсутствует.
     */
    public function __construct(mixed $data = [])
    {
        $this->raw = $data;

        if (!is_array($data)) {
            $this->schemaValue = $data;
            return;
        }

        foreach (static::FIELD_MAP as $property => $apiName) {
            if (array_key_exists($apiName, $data)) {
                $this->{$property} = $this->cast($property, $data[$apiName]);
            }
        }

        $this->validateRequiredFields();
    }

    /**
     * Возвращает исходные данные модели в виде массива.
     *
     * @return array<string, mixed>|list<mixed>
     */
    public function toArray(): array
    {
        if (is_array($this->raw)) {
            return $this->normalize($this->raw);
        }

        return ['value' => $this->schemaValue];
    }

    /**
     * Возвращает значение модели для отправки в Prompt payload.
     *
     * @return mixed Исходный scalar или массив модели.
     */
    public function toValue(): mixed
    {
        if (is_array($this->raw)) {
            return $this->normalize($this->raw);
        }

        return $this->schemaValue;
    }

    /**
     * Проверяет обязательные поля модели.
     *
     * @return void
     *
     * @throws \UnexpectedValueException Если обязательное поле отсутствует.
     */
    protected function validateRequiredFields(): void
    {
        foreach (static::REQUIRED_FIELDS as $property) {
            if (!$this->isPropertyInitialized($property)) {
                throw new \UnexpectedValueException(sprintf('Required schema field "%s" is missing.', $property));
            }

            $value = $this->{$property};

            if ($value === null && !in_array($property, static::NULLABLE_FIELDS, true)) {
                throw new \UnexpectedValueException(sprintf('Required schema field "%s" is missing.', $property));
            }
        }
    }

    /**
     * Проверяет, что typed-свойство существует и инициализировано.
     *
     * @param string $property Имя PHP-свойства.
     *
     * @return bool true, если свойство можно безопасно читать.
     */
    private function isPropertyInitialized(string $property): bool
    {
        if (!property_exists($this, $property)) {
            return false;
        }

        $reflection = new \ReflectionProperty($this, $property);

        return $reflection->isInitialized($this);
    }

    /**
     * Применяет cast-правило к значению.
     *
     * @param string $property PHP-свойство.
     * @param mixed $value Значение.
     *
     * @return mixed Преобразованное значение.
     */
    private function cast(string $property, mixed $value): mixed
    {
        if ($value === null || !array_key_exists($property, static::CASTS)) {
            return $value;
        }

        $cast = static::CASTS[$property];

        if (is_array($cast)) {
            $className = $cast[0] ?? null;

            if (!is_string($className) || !is_array($value)) {
                return $value;
            }

            return array_map(
                static fn (mixed $item): mixed => is_array($item) ? new $className($item) : $item,
                $value,
            );
        }

        if (is_string($cast)) {
            return new $cast($value);
        }

        return $value;
    }

    /**
     * Нормализует вложенные модели в массивы.
     *
     * @param mixed $value Значение.
     *
     * @return mixed Нормализованное значение.
     */
    private function normalize(mixed $value): mixed
    {
        if ($value instanceof self) {
            return $value->toArray();
        }

        if (is_array($value)) {
            return array_map(fn (mixed $item): mixed => $this->normalize($item), $value);
        }

        return $value;
    }
}
