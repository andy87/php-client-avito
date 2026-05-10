<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\Cpa;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito cpa/OpenApiChatByActionIdOut.
 */
class OpenApiChatByActionIdOut extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['chat' => 'chat', 'error' => 'error'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['chat' => \php_client_avito\Generated\Schema\Cpa\OpenApiChatsComposition::class, 'error' => \php_client_avito\Generated\Schema\Cpa\Error::class];

    /** @var \php_client_avito\Generated\Schema\Cpa\OpenApiChatsComposition|null Schema field chat */
    public ?\php_client_avito\Generated\Schema\Cpa\OpenApiChatsComposition $chat = null;

    /** @var \php_client_avito\Generated\Schema\Cpa\Error|null Schema field error */
    public ?\php_client_avito\Generated\Schema\Cpa\Error $error = null;
}
