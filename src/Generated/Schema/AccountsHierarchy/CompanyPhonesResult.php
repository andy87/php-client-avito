<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\AccountsHierarchy;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito accounts-hierarchy/CompanyPhonesResult.
 */
class CompanyPhonesResult extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['result' => 'result'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var array<string, mixed>|null Schema field result */
    public ?array $result = null;
}
