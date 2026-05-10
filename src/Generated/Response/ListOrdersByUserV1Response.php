<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Response;

use Andy87\PhpClientSdk\Response\AbstractResponse;

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

    protected const CASTS = ['orders' => [\php_client_avito\Generated\Schema\Promotion\OrderBrief::class]];

    protected const MODEL = \php_client_avito\Generated\Schema\Promotion\ListOrdersByUserV1Resp::class;

    /** @var array<int, \php_client_avito\Generated\Schema\Promotion\OrderBrief> Список заявок на подключение услуг продвижения по объявлениям */
    public array $orders;

    /** @var array<string, mixed> Данные для постраничного чтения */
    public array $pagination;
}
