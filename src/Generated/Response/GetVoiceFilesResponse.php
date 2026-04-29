<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response;

use Andy87\ClientsBase\Response\AbstractResponse;

/**
 * DTO ответа Avito API getVoiceFiles.
 */
class GetVoiceFilesResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['voices_urls' => 'voices_urls'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const MODEL = \Andy87\ClientsAvito\Generated\Schema\Messenger\VoiceFiles::class;

    /** @var array<string, mixed>|null Response field voices_urls */
    public ?array $voices_urls = null;
}
