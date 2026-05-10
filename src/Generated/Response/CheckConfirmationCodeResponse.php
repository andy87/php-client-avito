<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Response;

use and_y87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ Avito API [POST] /delivery-sandbox/order/checkConfirmationCode.
 *
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/checkConfirmationCode
 */
class CheckConfirmationCodeResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['data' => 'data'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const MODEL = \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\CheckConfirmationCodeReply::class;

    /** @var array<string, mixed>|null Response field data */
    public ?array $data = null;
}
