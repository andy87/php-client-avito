<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * DTO запроса Avito API getOrders.
 */
class GetOrdersPrompt extends AbstractPrompt
{
    protected const METHOD = 'GET';

    protected const ENDPOINT = '/order-management/1/orders';

    protected const CONTENT_TYPE = null;

    protected const AUTHORIZATION_REQUIRED = true;

    protected const FIELD_MAP = ['Authorization' => 'Authorization', 'ids' => 'ids', 'statuses' => 'statuses', 'dateFrom' => 'dateFrom', 'page' => 'page', 'limit' => 'limit'];

    protected const REQUIRED_FIELDS = ['Authorization'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['statuses' => [\Andy87\ClientsAvito\Generated\Schema\OrderManagement\Status::class]];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = ['ids', 'statuses', 'dateFrom', 'page', 'limit'];

    protected const BODY_FIELDS = [];

    /** @var string Токен для авторизации */
    public string $Authorization;

    /** @var array<int, string>|null Идентификаторы заказов
 */
    public ?array $ids = null;

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\OrderManagement\Status>|null Статус, по которому нужно получить заказы.

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
