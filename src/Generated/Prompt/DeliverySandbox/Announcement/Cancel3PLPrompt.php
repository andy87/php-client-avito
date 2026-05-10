<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Prompt\DeliverySandbox\Announcement;

use php_client_avito\Generated\Prompt\CancelAnnouncement3PLPrompt as BaseCancelAnnouncement3PLPrompt;

/**
 * Класс данных запроса Avito API [POST] /cancelAnnouncement.
 *
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/CancelAnnouncement3PL
 *
 * @property \php_client_avito\Generated\Schema\DeliverySandbox\UUID $announcementID Body field announcementID
 * @property string|null $reason Причина омены анонса
 */
class Cancel3PLPrompt extends BaseCancelAnnouncement3PLPrompt
{
}
