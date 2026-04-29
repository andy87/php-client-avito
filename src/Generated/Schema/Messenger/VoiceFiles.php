<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Messenger;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

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
