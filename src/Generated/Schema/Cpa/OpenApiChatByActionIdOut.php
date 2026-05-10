<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\Cpa;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito cpa/OpenApiChatByActionIdOut.
 */
class OpenApiChatByActionIdOut extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['chat' => 'chat', 'error' => 'error'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['chat' => \and_y87\php_client_avito\Generated\Schema\Cpa\OpenApiChatsComposition::class, 'error' => \and_y87\php_client_avito\Generated\Schema\Cpa\Error::class];

    /** @var \and_y87\php_client_avito\Generated\Schema\Cpa\OpenApiChatsComposition|null Schema field chat */
    public ?\and_y87\php_client_avito\Generated\Schema\Cpa\OpenApiChatsComposition $chat = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\Cpa\Error|null Schema field error */
    public ?\and_y87\php_client_avito\Generated\Schema\Cpa\Error $error = null;
}
