<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt;

use Andy87\PhpClientSdk\Prompt\AbstractPrompt;

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

    protected const QUERY_PARAMETER_STYLES = [];

    protected const FIELD_MAP = ['orderId' => 'orderId', 'properties' => 'properties'];

    protected const REQUIRED_FIELDS = ['orderId', 'properties'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['orderId' => \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\DeliveryOrderIdString::class, 'properties' => \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\DeliveryParams::class];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const HEADER_FIELDS = [];

    protected const BODY_FIELDS = ['orderId', 'properties'];

    protected const BODY_ROOT_FIELD = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\DeliveryOrderIdString Body field orderId */
    public \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\DeliveryOrderIdString $orderId;

    /** @var \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\DeliveryParams Body field properties */
    public \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\DeliveryParams $properties;
}
