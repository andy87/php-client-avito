<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Prompt;

use Andy87\PhpClientSdk\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [GET] /order-management/1/order/getCourierDeliveryRange.
 *
 * @documentation https://developers.avito.ru/api-catalog/order-management/documentation#operation/getCourierDeliveryRange
 */
class GetCourierDeliveryRangePrompt extends AbstractPrompt
{
    protected const METHOD = 'GET';

    protected const ENDPOINT = '/order-management/1/order/getCourierDeliveryRange';

    protected const CONTENT_TYPE = null;

    protected const AUTHORIZATION_REQUIRED = true;

    protected const QUERY_PARAMETER_STYLES = ['orderId' => ['style' => 'form', 'explode' => true], 'address' => ['style' => 'form', 'explode' => true]];

    protected const FIELD_MAP = ['orderId' => 'orderId', 'address' => 'address'];

    protected const REQUIRED_FIELDS = ['orderId'];

    protected const NULLABLE_FIELDS = ['address'];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = ['orderId', 'address'];

    protected const HEADER_FIELDS = [];

    protected const BODY_FIELDS = [];

    protected const BODY_ROOT_FIELD = null;

    /** @var string ID заказа */
    public string $orderId;

    /** @var string|null Адрес продавца */
    public ?string $address = null;
}
