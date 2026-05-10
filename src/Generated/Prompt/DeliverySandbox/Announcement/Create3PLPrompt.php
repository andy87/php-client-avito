<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt\DeliverySandbox\Announcement;

use and_y87\php_client_avito\Generated\Prompt\CreateAnnouncement3PLPrompt as BaseCreateAnnouncement3PLPrompt;

/**
 * Класс данных запроса Avito API [POST] /createAnnouncement.
 *
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/CreateAnnouncement3PL
 *
 * @property \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\UUID $announcementID Body field announcementID
 * @property string $announcementType Тип анонса
 * @property string $barcode Уникальный ШК анонса. Должен быть напечатан на бумажных сопроводительных документах (акте приема передачи). Данный ШК необходимо использовать для установки соответствия принимаемой партии грузомест/посылок с анонсом переданным в электронном виде через инфообмен.
 * @property \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\DateWithTz $date Дата и время создания анонса в формате RFC 3339 в UTC
 * @property array<int, mixed> $packages Список грузомест
 * @property \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\AnnouncementDeliveryParticipant $receiver Body field receiver
 * @property \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\AnnouncementDeliveryParticipant $sender Body field sender
 */
class Create3PLPrompt extends BaseCreateAnnouncement3PLPrompt
{
}
