<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt\DeliverySandbox\Announcement;

use and_y87\php_client_avito\Generated\Prompt\TrackAnnouncementPrompt as BaseTrackAnnouncementPrompt;

/**
 * Класс данных запроса Avito API [POST] /delivery-sandbox/announcements/track.
 *
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/TrackAnnouncement
 *
 * @property \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\UUID $announcementID Body field announcementID
 * @property \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\DateWithTz $date Дата события
 * @property string $event Body field event
 */
class TrackPrompt extends BaseTrackAnnouncementPrompt
{
}
