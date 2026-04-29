<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response;

use Andy87\ClientsBase\Response\AbstractResponse;

/**
 * DTO ответа Avito API get_order_status_v1.
 */
class GetOrderStatusV1Response extends AbstractResponse
{
    protected const FIELD_MAP = ['errors' => 'errors', 'items' => 'items', 'orderId' => 'orderId', 'status' => 'status', 'totalPrice' => 'totalPrice'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['errors' => [\Andy87\ClientsAvito\Generated\Schema\Promotion\ErrorByItemV1::class], 'items' => [\Andy87\ClientsAvito\Generated\Schema\Promotion\OrderStatusByItemV1::class], 'status' => \Andy87\ClientsAvito\Generated\Schema\Promotion\OrderStatus::class];

    protected const MODEL = \Andy87\ClientsAvito\Generated\Schema\Promotion\GetOrderStatusV1Resp::class;

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\Promotion\ErrorByItemV1>|null Информация об ошибках получения данных по объявлениям */
    public ?array $errors = null;

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\Promotion\OrderStatusByItemV1>|null Статус заявки на подключение услуги по объявлениям */
    public ?array $items = null;

    /** @var string|null Идентификатор заявки на подключение услуг продвижения */
    public ?string $orderId = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Promotion\OrderStatus|null Response field status */
    public ?\Andy87\ClientsAvito\Generated\Schema\Promotion\OrderStatus $status = null;

    /** @var int|null Общая стоимость заявки (в копейках) */
    public ?int $totalPrice = null;
}
