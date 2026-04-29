<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Promotion;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito promotion/GetOrderStatusV1Req.
 */
class GetOrderStatusV1Req extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['orderId' => 'orderId'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string|null Идентификатор заявки на подключение услуг продвижения */
    public ?string $orderId = null;
}
