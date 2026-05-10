<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\Promotion;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito promotion/ServicesByItemV1.
 */
class ServicesByItemV1 extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['itemId' => 'itemId', 'services' => 'services'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['services' => [\and_y87\php_client_avito\Generated\Schema\Promotion\ServiceV1::class]];

    /** @var int|null Идентификатор объявления */
    public ?int $itemId = null;

    /** @var array<int, \and_y87\php_client_avito\Generated\Schema\Promotion\ServiceV1>|null Список услуг по объявлению */
    public ?array $services = null;
}
