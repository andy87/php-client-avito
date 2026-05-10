<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt;

use and_y87\PhpClientSdk\Prompt\AbstractPrompt;

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

    protected const QUERY_PARAMETER_STYLES = [];

    protected const FIELD_MAP = ['orderId' => 'orderId', 'params' => 'params', 'transition' => 'transition'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['params'];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const HEADER_FIELDS = [];

    protected const BODY_FIELDS = ['orderId', 'params', 'transition'];

    protected const BODY_ROOT_FIELD = null;

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
