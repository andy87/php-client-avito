<?php

declare(strict_types=1);

namespace and_y87\php_client_avito;

use and_y87\PhpClientSdk\Client\Config\BaseUrl;

/**
 * Хранит настройки подключения к Avito API.
 */
class AvitoConfig
{
    public const DEFAULT_BASE_URL = 'https://api.avito.ru';
    public const DEFAULT_TOKEN_URL = 'https://api.avito.ru/token';

    /**
     * Создаёт конфигурацию Avito API.
     *
     * @param string $clientId Client ID приложения Avito.
     * @param string $clientSecret Client Secret приложения Avito.
     * @param string $baseUrl Базовый URL API.
     * @param string $tokenUrl URL получения access token.
     * @param int $timeout Таймаут HTTP-запросов.
     * @param string|null $protocol HTTP-протокол для сборки base URL.
     * @param string|null $host Хост API для сборки base URL.
     * @param string|null $prefix Prefix пути API для сборки base URL.
     * @param int|null $port Порт API для сборки base URL.
     *
     * @return void
     */
    public function __construct(
        public string $clientId,
        public string $clientSecret,
        public string $baseUrl = self::DEFAULT_BASE_URL,
        public string $tokenUrl = self::DEFAULT_TOKEN_URL,
        public int $timeout = 30,
        public ?string $protocol = null,
        public ?string $host = null,
        public ?string $prefix = null,
        public ?int $port = null,
    ) {
    }

    /**
     * Возвращает базовый URL API.
     *
     * @return string Базовый URL API.
     *
     * @throws \InvalidArgumentException Если составные части URL некорректны.
     */
    public function getBaseUrl(): string
    {
        if ($this->baseUrl !== self::DEFAULT_BASE_URL || $this->host === null) {
            return $this->baseUrl;
        }

        return (string) new BaseUrl(
            host: $this->host,
            protocol: $this->protocol ?? 'https',
            prefix: $this->prefix,
            port: $this->port,
        );
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
            baseUrl: (string) ($data['baseUrl'] ?? $data['base_url'] ?? self::DEFAULT_BASE_URL),
            tokenUrl: (string) ($data['tokenUrl'] ?? $data['token_url'] ?? self::DEFAULT_TOKEN_URL),
            timeout: (int) ($data['timeout'] ?? 30),
            protocol: isset($data['protocol']) ? (string) $data['protocol'] : null,
            host: isset($data['host']) ? (string) $data['host'] : null,
            prefix: isset($data['prefix']) ? (string) $data['prefix'] : null,
            port: isset($data['port']) ? (int) $data['port'] : null,
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
