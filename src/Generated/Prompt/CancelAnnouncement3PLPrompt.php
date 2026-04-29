<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [POST] /cancelAnnouncement.
 * 
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/CancelAnnouncement3PL
 */
class CancelAnnouncement3PLPrompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/cancelAnnouncement';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const FIELD_MAP = ['announcementID' => 'announcementID', 'reason' => 'reason'];

    protected const REQUIRED_FIELDS = ['announcementID'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['announcementID' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\UUID::class];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const BODY_FIELDS = ['announcementID', 'reason'];

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\UUID Body field announcementID */
    public \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\UUID $announcementID;

    /** @var string|null Причина омены анонса */
    public ?string $reason = null;
}
