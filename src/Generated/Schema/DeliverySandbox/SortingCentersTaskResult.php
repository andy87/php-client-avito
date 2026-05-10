<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\DeliverySandbox;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/SortingCentersTaskResult.
 */
class SortingCentersTaskResult extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['count' => 'count'];

    protected const REQUIRED_FIELDS = ['count'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Количество успешно загруженных сортировочных центров */
    public string $count;
}
