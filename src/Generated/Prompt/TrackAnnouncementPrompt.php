<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [POST] /delivery-sandbox/announcements/track.
 * 
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/TrackAnnouncement
 */
class TrackAnnouncementPrompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/delivery-sandbox/announcements/track';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const FIELD_MAP = ['announcementID' => 'announcementID', 'date' => 'date', 'event' => 'event'];

    protected const REQUIRED_FIELDS = ['announcementID', 'date', 'event'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['announcementID' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\UUID::class, 'date' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DateWithTz::class];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const BODY_FIELDS = ['announcementID', 'date', 'event'];

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\UUID Body field announcementID */
    public \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\UUID $announcementID;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DateWithTz Дата события */
    public \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DateWithTz $date;

    /** @var string Body field event */
    public string $event;
}
