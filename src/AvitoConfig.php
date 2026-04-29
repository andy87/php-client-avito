<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito;

/**
 * Хранит настройки подключения к Avito API.
 */
class AvitoConfig
{
    /**
     * Создаёт конфигурацию Avito API.
     *
     * @param string $clientId Client ID приложения Avito.
     * @param string $clientSecret Client Secret приложения Avito.
     * @param string $baseUrl Базовый URL API.
     * @param string $tokenUrl URL получения access token.
     * @param int $timeout Таймаут HTTP-запросов.
     *
     * @return void
     */
    public function __construct(
        public string $clientId,
        public string $clientSecret,
        public string $baseUrl = 'https://api.avito.ru',
        public string $tokenUrl = 'https://api.avito.ru/token',
        public int $timeout = 30,
    ) {
    }

    /**
     * Создаёт конфигурацию из массива.
     *
     * @param array<string, mixed> $data Настройки.
     *
     * @return self Конфигурация.
     *
     * @throws \InvalidArgumentException Если обязательные реквизиты не переданы.
     */
    public static function fromArray(array $data): self
    {
        $clientId = $data['clientId'] ?? $data['client_id'] ?? $data['AVITO_CLIENT_ID'] ?? null;
        $clientSecret = $data['clientSecret'] ?? $data['client_secret'] ?? $data['AVITO_CLIENT_SECRET'] ?? null;

        if (!is_string($clientId) || $clientId === '') {
            throw new \InvalidArgumentException('Avito clientId is required.');
        }

        if (!is_string($clientSecret) || $clientSecret === '') {
            throw new \InvalidArgumentException('Avito clientSecret is required.');
        }

        return new self(
            clientId: $clientId,
            clientSecret: $clientSecret,
            baseUrl: (string) ($data['baseUrl'] ?? $data['base_url'] ?? 'https://api.avito.ru'),
            tokenUrl: (string) ($data['tokenUrl'] ?? $data['token_url'] ?? 'https://api.avito.ru/token'),
            timeout: (int) ($data['timeout'] ?? 30),
        );
    }

    /**
     * Создаёт конфигурацию из переменных окружения.
     *
     * @param string $prefix Префикс переменных окружения.
     * @param string $suffix Суффикс набора реквизитов, например CURIES для AVITO_CLIENT_ID_CURIES.
     *
     * @return self Конфигурация.
     *
     * @throws \InvalidArgumentException Если обязательные реквизиты не найдены.
     */
    public static function fromEnv(string $prefix = 'AVITO', string $suffix = ''): self
    {
        $suffix = $suffix !== '' ? '_' . trim($suffix, '_') : '';

        return self::fromArray([
            'clientId' => getenv($prefix . '_CLIENT_ID' . $suffix) ?: null,
            'clientSecret' => getenv($prefix . '_CLIENT_SECRET' . $suffix) ?: null,
        ]);
    }
}
