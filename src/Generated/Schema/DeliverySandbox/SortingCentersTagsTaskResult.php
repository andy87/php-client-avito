<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\DeliverySandbox;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/SortingCentersTagsTaskResult.
 */
class SortingCentersTagsTaskResult extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['count' => 'count'];

    protected const REQUIRED_FIELDS = ['count'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Количество успешно привязанных тегов к сортировочным центрам */
    public string $count;
}
