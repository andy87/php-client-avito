<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt;

use and_y87\PhpClientSdk\Request\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [GET] /order-management/1/orders.
 *
 * @documentation https://developers.avito.ru/api-catalog/order-management/documentation#operation/getOrders
 */
class GetOrdersPrompt extends AbstractPrompt
{
    protected const METHOD = 'GET';

    protected const ENDPOINT = '/order-management/1/orders';

    protected const CONTENT_TYPE = null;

    protected const AUTHORIZATION_REQUIRED = true;

    protected const QUERY_PARAMETER_STYLES = ['ids' => ['style' => 'form', 'explode' => true], 'statuses' => ['style' => 'form', 'explode' => true], 'dateFrom' => ['style' => 'form', 'explode' => true], 'page' => ['style' => 'form', 'explode' => true], 'limit' => ['style' => 'form', 'explode' => true]];

    protected const FIELD_MAP = ['ids' => 'ids', 'statuses' => 'statuses', 'dateFrom' => 'dateFrom', 'page' => 'page', 'limit' => 'limit'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['statuses' => [\and_y87\php_client_avito\Generated\Schema\OrderManagement\Status::class]];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = ['ids', 'statuses', 'dateFrom', 'page', 'limit'];

    protected const HEADER_FIELDS = [];

    protected const BODY_FIELDS = [];

    protected const BODY_ROOT_FIELD = null;

    /** @var array<int, string>|null Идентификаторы заказов
 */
    public ?array $ids = null;

    /** @var array<int, \and_y87\php_client_avito\Generated\Schema\OrderManagement\Status>|null Статус, по которому нужно получить заказы.

- on_confirmation - ожидает подтверждения

- ready_to_ship - ждет отправки

- in_transit - в пути

- canceled - отменный заказ

- delivered - доставлен покупателю

- on_return - на возврате

- in_dispute - по заказу открыт спор

- closed - заказ закрыт
 */
    public ?array $statuses = null;

    /** @var int|null Метка времени, с момента которого созданы покупки */
    public ?int $dateFrom = null;

    /** @var int|null Номер страницы для пагинации */
    public ?int $page = null;

    /** @var int|null Максимальное количество заказов на странице */
    public ?int $limit = null;
}
