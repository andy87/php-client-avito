<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Response;

use Andy87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ Avito API [POST] /delivery/order/changeParcelResult.
 *
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/ChangeParcelResult
 */
class ChangeParcelResultResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['data' => 'data', 'errorData' => 'error'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['data', 'errorData'];

    protected const CASTS = [];

    protected const MODEL = \php_client_avito\Generated\Schema\DeliverySandbox\ChangeParcelResultReply::class;

    /** @var array<string, mixed>|null Response field data */
    public ?array $data = null;

    /** @var array<string, mixed>|null Response field error */
    public ?array $errorData = null;
}
