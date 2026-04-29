<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response;

use Andy87\ClientsBase\Response\AbstractResponse;

/**
 * DTO ответа Avito API openApiTariffInfo.
 */
class OpenApiTariffInfoResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['tariffInfo' => 'tariffInfo'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['tariffInfo'];

    protected const CASTS = [];

    protected const MODEL = \Andy87\ClientsAvito\Generated\Schema\SbcGateway\OpenApiTariffInfoResponseBody::class;

    /** @var array<string, mixed>|null Информация о текущем тарифе */
    public ?array $tariffInfo = null;
}
