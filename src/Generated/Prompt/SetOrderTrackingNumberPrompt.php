<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * DTO запроса Avito API setOrderTrackingNumber.
 */
class SetOrderTrackingNumberPrompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/order-management/1/order/setTrackingNumber';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const FIELD_MAP = ['Authorization' => 'Authorization', 'orderId' => 'orderId', 'trackingNumber' => 'trackingNumber'];

    protected const REQUIRED_FIELDS = ['Authorization'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const BODY_FIELDS = ['orderId', 'trackingNumber'];

    /** @var string Токен для авторизации */
    public string $Authorization;

    /** @var string|null ID заказа в Авито */
    public ?string $orderId = null;

    /** @var string|null Трек-номер посылки */
    public ?string $trackingNumber = null;
}
