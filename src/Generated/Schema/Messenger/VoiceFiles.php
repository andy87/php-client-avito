<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\Messenger;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito messenger/VoiceFiles.
 */
class VoiceFiles extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['voices_urls' => 'voices_urls'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var array<string, mixed>|null Schema field voices_urls */
    public ?array $voices_urls = null;
}
