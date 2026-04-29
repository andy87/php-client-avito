<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response;

use Andy87\ClientsBase\Response\AbstractResponse;

/**
 * Ответ Avito API [POST] /special-offers/v1/available.
 * 
 * @documentation https://developers.avito.ru/api-catalog/sbc-gateway/documentation#operation/openApiAvailable
 */
class OpenApiAvailableResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['items' => 'items'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const MODEL = \Andy87\ClientsAvito\Generated\Schema\SbcGateway\OpenApiAvailableResponseBody::class;

    /** @var array<int, array<string, mixed>>|null Список объявлений и признаков доступности для них услуги */
    public ?array $items = null;
}
