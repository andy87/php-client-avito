<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Response;

use Andy87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ Avito API [POST] /trx-promo/1/cancel.
 *
 * @documentation https://developers.avito.ru/api-catalog/trxpromo/documentation#operation/api_trx_promo_open_api_cancel
 */
class ApiTrxPromoOpenApiCancelResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['success' => 'success'];

    protected const REQUIRED_FIELDS = ['success'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const MODEL = \and_y87\php_client_avito\Generated\Schema\Trxpromo\CancelResponse::class;

    /** @var array<string, mixed> Response field success */
    public array $success;
}
