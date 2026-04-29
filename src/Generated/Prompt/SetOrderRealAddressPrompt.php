<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * DTO запроса Avito API setOrderRealAddress.
 */
class SetOrderRealAddressPrompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/delivery-sandbox/order/realAddress';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const FIELD_MAP = ['address' => 'address', 'orderId' => 'orderId'];

    protected const REQUIRED_FIELDS = ['address', 'orderId'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['orderId' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryOrderIdString::class];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const BODY_FIELDS = ['address', 'orderId'];

    /** @var array<string, mixed> Body field address */
    public array $address;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryOrderIdString Body field orderId */
    public \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryOrderIdString $orderId;
}
