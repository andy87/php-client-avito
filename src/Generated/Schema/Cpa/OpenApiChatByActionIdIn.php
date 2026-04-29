<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Cpa;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito cpa/OpenApiChatByActionIdIn.
 */
class OpenApiChatByActionIdIn extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['actionId' => 'actionId', 'userId' => 'userId'];

    protected const REQUIRED_FIELDS = ['actionId'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var int Schema field actionId */
    public int $actionId;

    /** @var int|null User ID */
    public ?int $userId = null;
}
