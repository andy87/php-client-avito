<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Promotion;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito promotion/GetServicesByItemsV1Resp.
 */
class GetServicesByItemsV1Resp extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['errors' => 'errors', 'items' => 'items'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['errors' => [\Andy87\ClientsAvito\Generated\Schema\Promotion\ErrorByItemV1::class], 'items' => [\Andy87\ClientsAvito\Generated\Schema\Promotion\ServicesByItemV1::class]];

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\Promotion\ErrorByItemV1>|null Информация об ошибках получения варианта бюджета */
    public ?array $errors = null;

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\Promotion\ServicesByItemV1>|null Информация об услугах продвижения по объявлениям */
    public ?array $items = null;
}
