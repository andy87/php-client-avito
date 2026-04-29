<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [POST] /order-management/1/order/applyTransition.
 * 
 * @documentation https://developers.avito.ru/api-catalog/order-management/documentation#operation/applyTransition
 */
class ApplyTransitionPrompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/order-management/1/order/applyTransition';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const FIELD_MAP = ['Authorization' => 'Authorization', 'orderId' => 'orderId', 'params' => 'params', 'transition' => 'transition'];

    protected const REQUIRED_FIELDS = ['Authorization'];

    protected const NULLABLE_FIELDS = ['params'];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const BODY_FIELDS = ['orderId', 'params', 'transition'];

    /** @var string Токен для авторизации */
    public string $Authorization;

    /** @var string|null ID заказа в Авито */
    public ?string $orderId = null;

    /** @var array<string, mixed>|null Дополнительные параметры доставки */
    public ?array $params = null;

    /** @var string|null Название перехода. 
  * `confirm` - подтверждение заказа;
  * `reject` - отмена заказа;
  * `perform` - подтверждение отправки заказа (RDBS);
  * `receive` - подтверждение доставки заказа (RDBS, CNC).
 */
    public ?string $transition = null;
}
