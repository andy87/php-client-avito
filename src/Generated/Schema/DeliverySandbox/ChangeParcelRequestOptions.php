<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/ChangeParcelRequestOptions.
 */
class ChangeParcelRequestOptions extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['changeParcelUrl' => 'changeParcelUrl'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string|null Schema field changeParcelUrl */
    public ?string $changeParcelUrl = null;
}
