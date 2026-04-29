<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response;

use Andy87\ClientsBase\Response\AbstractResponse;

/**
 * Ответ Avito API [GET] /trx-promo/1/commissions.
 * 
 * @documentation https://developers.avito.ru/api-catalog/trxpromo/documentation#operation/api_trx_promo_open_api_commissions
 */
class ApiTrxPromoOpenApiCommissionsResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['success' => 'success'];

    protected const REQUIRED_FIELDS = ['success'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const MODEL = \Andy87\ClientsAvito\Generated\Schema\Trxpromo\CommissionResponse::class;

    /** @var array<string, mixed> Response field success */
    public array $success;
}
