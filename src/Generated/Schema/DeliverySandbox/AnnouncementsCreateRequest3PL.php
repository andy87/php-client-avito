<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\DeliverySandbox;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/AnnouncementsCreateRequest3PL.
 */
class AnnouncementsCreateRequest3PL extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['announcementID' => 'announcementID', 'announcementType' => 'announcementType', 'barcode' => 'barcode', 'date' => 'date', 'packages' => 'packages', 'receiver' => 'receiver', 'sender' => 'sender'];

    protected const REQUIRED_FIELDS = ['announcementID', 'barcode', 'sender', 'receiver', 'announcementType', 'date', 'packages'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['announcementID' => \php_client_avito\Generated\Schema\DeliverySandbox\UUID::class, 'date' => \php_client_avito\Generated\Schema\DeliverySandbox\DateWithTz::class, 'receiver' => \php_client_avito\Generated\Schema\DeliverySandbox\AnnouncementDeliveryParticipant::class, 'sender' => \php_client_avito\Generated\Schema\DeliverySandbox\AnnouncementDeliveryParticipant::class];

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\UUID Schema field announcementID */
    public \php_client_avito\Generated\Schema\DeliverySandbox\UUID $announcementID;

    /** @var string Тип анонса */
    public string $announcementType;

    /** @var string Уникальный ШК анонса. Должен быть напечатан на бумажных сопроводительных документах (акте приема передачи). Данный ШК необходимо использовать для установки соответствия принимаемой партии грузомест/посылок с анонсом переданным в электронном виде через инфообмен. */
    public string $barcode;

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\DateWithTz Дата и время создания анонса в формате RFC 3339 в UTC */
    public \php_client_avito\Generated\Schema\DeliverySandbox\DateWithTz $date;

    /** @var array<int, mixed> Список грузомест */
    public array $packages;

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\AnnouncementDeliveryParticipant Schema field receiver */
    public \php_client_avito\Generated\Schema\DeliverySandbox\AnnouncementDeliveryParticipant $receiver;

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\AnnouncementDeliveryParticipant Schema field sender */
    public \php_client_avito\Generated\Schema\DeliverySandbox\AnnouncementDeliveryParticipant $sender;
}
