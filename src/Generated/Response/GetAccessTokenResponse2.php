<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response;

use Andy87\ClientsBase\Response\AbstractResponse;

/**
 * DTO ответа Avito API getAccessToken.
 */
class GetAccessTokenResponse2 extends AbstractResponse
{
    protected const FIELD_MAP = ['access_token' => 'access_token', 'expires_in' => 'expires_in', 'token_type' => 'token_type'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const MODEL = null;

    /** @var string|null Ключ для временной авторизации в системе */
    public ?string $access_token = null;

    /** @var float|null Время жизни ключа в секундах */
    public ?float $expires_in = null;

    /** @var string|null Тип ключа авторизации */
    public ?string $token_type = null;
}
