<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Response;

use and_y87\PhpClientSdk\Response\Model\AbstractResponse;

/**
 * Ответ Avito API [POST] /special-offers/v1/tariffInfo.
 *
 * @documentation https://developers.avito.ru/api-catalog/sbc-gateway/documentation#operation/openApiTariffInfo
 */
class OpenApiTariffInfoResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['tariffInfo' => 'tariffInfo'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['tariffInfo'];

    protected const CASTS = [];

    protected const MODEL = \and_y87\php_client_avito\Generated\Schema\SbcGateway\OpenApiTariffInfoResponseBody::class;

    /** @var array<string, mixed>|null Информация о текущем тарифе */
    public ?array $tariffInfo = null;
}
