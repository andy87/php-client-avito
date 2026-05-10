<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt;

use and_y87\PhpClientSdk\Prompt\AbstractPrompt;

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

    protected const QUERY_PARAMETER_STYLES = [];

    protected const FIELD_MAP = ['announcementID' => 'announcementID', 'date' => 'date', 'event' => 'event'];

    protected const REQUIRED_FIELDS = ['announcementID', 'date', 'event'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['announcementID' => \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\UUID::class, 'date' => \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\DateWithTz::class];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const HEADER_FIELDS = [];

    protected const BODY_FIELDS = ['announcementID', 'date', 'event'];

    protected const BODY_ROOT_FIELD = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\UUID Body field announcementID */
    public \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\UUID $announcementID;

    /** @var \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\DateWithTz Дата события */
    public \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\DateWithTz $date;

    /** @var string Body field event */
    public string $event;
}
