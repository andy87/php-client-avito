<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Response;

use and_y87\PhpClientSdk\Response\Model\AbstractResponse;

/**
 * Ответ Avito API [GET] /messenger/v1/accounts/{user_id}/getVoiceFiles.
 *
 * @documentation https://developers.avito.ru/api-catalog/messenger/documentation#operation/getVoiceFiles
 */
class GetVoiceFilesResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['voices_urls' => 'voices_urls'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const MODEL = \and_y87\php_client_avito\Generated\Schema\Messenger\VoiceFiles::class;

    /** @var array<string, mixed>|null Response field voices_urls */
    public ?array $voices_urls = null;
}
