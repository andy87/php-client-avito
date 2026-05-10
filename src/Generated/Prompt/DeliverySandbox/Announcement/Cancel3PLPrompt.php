<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt\DeliverySandbox\Announcement;

use and_y87\php_client_avito\Generated\Prompt\CancelAnnouncement3PLPrompt as BaseCancelAnnouncement3PLPrompt;

/**
 * Класс данных запроса Avito API [POST] /cancelAnnouncement.
 *
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/CancelAnnouncement3PL
 *
 * @property \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\UUID $announcementID Body field announcementID
 * @property string|null $reason Причина омены анонса
 */
class Cancel3PLPrompt extends BaseCancelAnnouncement3PLPrompt
{
}
