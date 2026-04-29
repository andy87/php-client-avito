<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response;

use Andy87\ClientsBase\Response\AbstractResponse;

/**
 * Ответ Avito API [POST] /promotion/v1/items/services/orders/get.
 * 
 * @documentation https://developers.avito.ru/api-catalog/promotion/documentation#operation/list_orders_by_user_v1
 */
class ListOrdersByUserV1Response extends AbstractResponse
{
    protected const FIELD_MAP = ['orders' => 'orders', 'pagination' => 'pagination'];

    protected const REQUIRED_FIELDS = ['orders', 'pagination'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['orders' => [\Andy87\ClientsAvito\Generated\Schema\Promotion\OrderBrief::class]];

    protected const MODEL = \Andy87\ClientsAvito\Generated\Schema\Promotion\ListOrdersByUserV1Resp::class;

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\Promotion\OrderBrief> Список заявок на подключение услуг продвижения по объявлениям */
    public array $orders;

    /** @var array<string, mixed> Данные для постраничного чтения */
    public array $pagination;
}
