<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\DeliverySandbox;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/AnnouncementsCreateRequest3PL.
 */
class AnnouncementsCreateRequest3PL extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['announcementID' => 'announcementID', 'announcementType' => 'announcementType', 'barcode' => 'barcode', 'date' => 'date', 'packages' => 'packages', 'receiver' => 'receiver', 'sender' => 'sender'];

    protected const REQUIRED_FIELDS = ['announcementID', 'barcode', 'sender', 'receiver', 'announcementType', 'date', 'packages'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['announcementID' => \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\UUID::class, 'date' => \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\DateWithTz::class, 'receiver' => \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\AnnouncementDeliveryParticipant::class, 'sender' => \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\AnnouncementDeliveryParticipant::class];

    /** @var \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\UUID Schema field announcementID */
    public \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\UUID $announcementID;

    /** @var string Тип анонса */
    public string $announcementType;

    /** @var string Уникальный ШК анонса. Должен быть напечатан на бумажных сопроводительных документах (акте приема передачи). Данный ШК необходимо использовать для установки соответствия принимаемой партии грузомест/посылок с анонсом переданным в электронном виде через инфообмен. */
    public string $barcode;

    /** @var \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\DateWithTz Дата и время создания анонса в формате RFC 3339 в UTC */
    public \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\DateWithTz $date;

    /** @var array<int, mixed> Список грузомест */
    public array $packages;

    /** @var \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\AnnouncementDeliveryParticipant Schema field receiver */
    public \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\AnnouncementDeliveryParticipant $receiver;

    /** @var \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\AnnouncementDeliveryParticipant Schema field sender */
    public \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\AnnouncementDeliveryParticipant $sender;
}
