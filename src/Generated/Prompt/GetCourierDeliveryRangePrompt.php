<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

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

    protected const FIELD_MAP = ['Authorization' => 'Authorization', 'orderId' => 'orderId', 'address' => 'address'];

    protected const REQUIRED_FIELDS = ['Authorization', 'orderId'];

    protected const NULLABLE_FIELDS = ['address'];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = ['orderId', 'address'];

    protected const BODY_FIELDS = [];

    /** @var string Токен для авторизации */
    public string $Authorization;

    /** @var string ID заказа */
    public string $orderId;

    /** @var string|null Адрес продавца */
    public ?string $address = null;
}
