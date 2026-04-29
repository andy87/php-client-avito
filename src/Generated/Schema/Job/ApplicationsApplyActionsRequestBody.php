<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Job;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito job/ApplicationsApplyActionsRequestBody.
 */
class ApplicationsApplyActionsRequestBody extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['action' => 'action', 'ids' => 'ids'];

    protected const REQUIRED_FIELDS = ['action', 'ids'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Новый статус отклика, который нужно применить */
    public string $action;

    /** @var array<int, string> Список идентификаторов откликов, к которым нужно применить статус */
    public array $ids;
}
