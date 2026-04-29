<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Cpa;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito cpa/CreateComplaintV4Out.
 */
class CreateComplaintV4Out extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['success' => 'success'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var bool|null Успех/неуспех создания жалобы */
    public ?bool $success = null;
}
