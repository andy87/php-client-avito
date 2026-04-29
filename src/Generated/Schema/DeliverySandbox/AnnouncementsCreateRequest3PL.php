<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/AnnouncementsCreateRequest3PL.
 */
class AnnouncementsCreateRequest3PL extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['announcementID' => 'announcementID', 'announcementType' => 'announcementType', 'barcode' => 'barcode', 'date' => 'date', 'packages' => 'packages', 'receiver' => 'receiver', 'sender' => 'sender'];

    protected const REQUIRED_FIELDS = ['announcementID', 'barcode', 'sender', 'receiver', 'announcementType', 'date', 'packages'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['announcementID' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\UUID::class, 'date' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DateWithTz::class, 'receiver' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\AnnouncementDeliveryParticipant::class, 'sender' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\AnnouncementDeliveryParticipant::class];

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\UUID Schema field announcementID */
    public \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\UUID $announcementID;

    /** @var string Тип анонса */
    public string $announcementType;

    /** @var string Уникальный ШК анонса. Должен быть напечатан на бумажных сопроводительных документах (акте приема передачи). Данный ШК необходимо использовать для установки соответствия принимаемой партии грузомест/посылок с анонсом переданным в электронном виде через инфообмен. */
    public string $barcode;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DateWithTz Дата и время создания анонса в формате RFC 3339 в UTC */
    public \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DateWithTz $date;

    /** @var array<int, mixed> Список грузомест */
    public array $packages;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\AnnouncementDeliveryParticipant Schema field receiver */
    public \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\AnnouncementDeliveryParticipant $receiver;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\AnnouncementDeliveryParticipant Schema field sender */
    public \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\AnnouncementDeliveryParticipant $sender;
}
