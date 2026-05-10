<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\Promotion;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito promotion/GetOrderStatusV1Resp.
 */
class GetOrderStatusV1Resp extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['errors' => 'errors', 'items' => 'items', 'orderId' => 'orderId', 'status' => 'status', 'totalPrice' => 'totalPrice'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['errors' => [\and_y87\php_client_avito\Generated\Schema\Promotion\ErrorByItemV1::class], 'items' => [\and_y87\php_client_avito\Generated\Schema\Promotion\OrderStatusByItemV1::class], 'status' => \and_y87\php_client_avito\Generated\Schema\Promotion\OrderStatus::class];

    /** @var array<int, \and_y87\php_client_avito\Generated\Schema\Promotion\ErrorByItemV1>|null Информация об ошибках получения данных по объявлениям */
    public ?array $errors = null;

    /** @var array<int, \and_y87\php_client_avito\Generated\Schema\Promotion\OrderStatusByItemV1>|null Статус заявки на подключение услуги по объявлениям */
    public ?array $items = null;

    /** @var string|null Идентификатор заявки на подключение услуг продвижения */
    public ?string $orderId = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\Promotion\OrderStatus|null Schema field status */
    public ?\and_y87\php_client_avito\Generated\Schema\Promotion\OrderStatus $status = null;

    /** @var int|null Общая стоимость заявки (в копейках) */
    public ?int $totalPrice = null;
}
