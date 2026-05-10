<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\Job;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito job/SetApplicationsIsViewedResult.
 */
class SetApplicationsIsViewedResult extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['applies' => 'applies'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var array<int, array<string, mixed>>|null Список идентификаторов откликов и статусов их просмотренности после обновления */
    public ?array $applies = null;
}
