<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Prompt\DeliverySandbox\Announcement;

use php_client_avito\Generated\Prompt\TrackAnnouncementPrompt as BaseTrackAnnouncementPrompt;

/**
 * Класс данных запроса Avito API [POST] /delivery-sandbox/announcements/track.
 *
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/TrackAnnouncement
 *
 * @property \php_client_avito\Generated\Schema\DeliverySandbox\UUID $announcementID Body field announcementID
 * @property \php_client_avito\Generated\Schema\DeliverySandbox\DateWithTz $date Дата события
 * @property string $event Body field event
 */
class TrackPrompt extends BaseTrackAnnouncementPrompt
{
}
