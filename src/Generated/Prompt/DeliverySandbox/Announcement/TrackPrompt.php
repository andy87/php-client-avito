<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\DeliverySandbox\Announcement;

use Andy87\ClientsAvito\Generated\Prompt\TrackAnnouncementPrompt as BaseTrackAnnouncementPrompt;

/**
 * Класс данных запроса Avito API [POST] /delivery-sandbox/announcements/track.
 * 
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/TrackAnnouncement
 * 
 * @property \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\UUID $announcementID Body field announcementID
 * @property \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DateWithTz $date Дата события
 * @property string $event Body field event
 */
class TrackPrompt extends BaseTrackAnnouncementPrompt
{
}
