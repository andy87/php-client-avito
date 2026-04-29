<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [POST] /delivery-sandbox/order/properties.
 * 
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/setOrderProperties
 */
class SetOrderPropertiesPrompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/delivery-sandbox/order/properties';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const FIELD_MAP = ['orderId' => 'orderId', 'properties' => 'properties'];

    protected const REQUIRED_FIELDS = ['orderId', 'properties'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['orderId' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryOrderIdString::class, 'properties' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryParams::class];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const BODY_FIELDS = ['orderId', 'properties'];

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryOrderIdString Body field orderId */
    public \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryOrderIdString $orderId;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryParams Body field properties */
    public \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryParams $properties;
}
