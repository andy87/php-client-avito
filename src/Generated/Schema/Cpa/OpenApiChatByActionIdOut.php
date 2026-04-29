<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Cpa;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito cpa/OpenApiChatByActionIdOut.
 */
class OpenApiChatByActionIdOut extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['chat' => 'chat', 'error' => 'error'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['chat' => \Andy87\ClientsAvito\Generated\Schema\Cpa\OpenApiChatsComposition::class, 'error' => \Andy87\ClientsAvito\Generated\Schema\Cpa\Error::class];

    /** @var \Andy87\ClientsAvito\Generated\Schema\Cpa\OpenApiChatsComposition|null Schema field chat */
    public ?\Andy87\ClientsAvito\Generated\Schema\Cpa\OpenApiChatsComposition $chat = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Cpa\Error|null Schema field error */
    public ?\Andy87\ClientsAvito\Generated\Schema\Cpa\Error $error = null;
}
