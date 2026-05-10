<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Response;

use and_y87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ Avito API [POST] /delivery-sandbox/v1/getAnnouncementEvent.
 *
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/v1getAnnouncementEvent
 */
class V1getAnnouncementEventResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['data' => 'data', 'errorData' => 'error'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['data'];

    protected const CASTS = ['errorData' => \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\SandboxGetAnnouncementEventError::class];

    protected const MODEL = \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\SandboxGetAnnouncementEventReply::class;

    /** @var array<string, mixed>|null Response field data */
    public ?array $data = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\SandboxGetAnnouncementEventError|null Response field error */
    public ?\and_y87\php_client_avito\Generated\Schema\DeliverySandbox\SandboxGetAnnouncementEventError $errorData = null;
}
