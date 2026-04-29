<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response;

use Andy87\ClientsBase\Response\AbstractResponse;

/**
 * Ответ Avito API [POST] /special-offers/v1/multiConfirm.
 * 
 * @documentation https://developers.avito.ru/api-catalog/sbc-gateway/documentation#operation/openApiMultiConfirm
 */
class OpenApiMultiConfirmResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['ok' => 'ok'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const MODEL = \Andy87\ClientsAvito\Generated\Schema\SbcGateway\OpenApiMultiConfirmResponseBody::class;

    /** @var bool|null Response field ok */
    public ?bool $ok = null;
}
