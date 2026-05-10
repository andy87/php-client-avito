<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Response;

use Andy87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ Avito API [POST] /delivery-sandbox/v1/createAnnouncement.
 *
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/v1createAnnouncement
 */
class V1createAnnouncementResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['data' => 'data', 'errorData' => 'error'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['data'];

    protected const CASTS = ['errorData' => \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\SandboxCreateAnnouncementError::class];

    protected const MODEL = \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\SandboxCreateAnnouncementReply::class;

    /** @var array<string, mixed>|null Response field data */
    public ?array $data = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\SandboxCreateAnnouncementError|null Response field error */
    public ?\and_y87\php_client_avito\Generated\Schema\DeliverySandbox\SandboxCreateAnnouncementError $errorData = null;
}
