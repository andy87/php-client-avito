<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/CreateParcelOptionsReturnPolicy.
 */
class CreateParcelOptionsReturnPolicy extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['action' => 'action', 'after' => 'after'];

    protected const REQUIRED_FIELDS = ['action'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Какое действие выполнить в случае возврата посылки.
 */
    public string $action;

    /** @var array<string, mixed>|null Через какое время выполнить действие `action`.

Отсутствие поля означает, что выполнить нужно сразу.
 */
    public ?array $after = null;
}
