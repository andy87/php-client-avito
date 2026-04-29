<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Cpa;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito cpa/CallById.
 */
class CallById extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['callId' => 'callId'];

    protected const REQUIRED_FIELDS = ['callId'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var int Идентификатор звонка */
    public int $callId;
}
