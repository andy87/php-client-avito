<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * DTO запроса Avito API v1cancelAnnouncement.
 */
class V1cancelAnnouncementPrompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/delivery-sandbox/v1/cancelAnnouncement';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const FIELD_MAP = ['announcementID' => 'announcementID', 'date' => 'date', 'options' => 'options'];

    protected const REQUIRED_FIELDS = ['announcementID', 'date', 'options'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['options' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\SandboxCancelAnnouncementOptions::class];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const BODY_FIELDS = ['announcementID', 'date', 'options'];

    /** @var string Уникальный идентификатор анонса UUID V4. */
    public string $announcementID;

    /** @var string Дата события */
    public string $date;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\SandboxCancelAnnouncementOptions Body field options */
    public \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\SandboxCancelAnnouncementOptions $options;
}
