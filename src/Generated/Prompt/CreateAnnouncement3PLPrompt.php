<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * DTO запроса Avito API CreateAnnouncement3PL.
 */
class CreateAnnouncement3PLPrompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/createAnnouncement';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const FIELD_MAP = ['announcementID' => 'announcementID', 'announcementType' => 'announcementType', 'barcode' => 'barcode', 'date' => 'date', 'packages' => 'packages', 'receiver' => 'receiver', 'sender' => 'sender'];

    protected const REQUIRED_FIELDS = ['announcementID', 'announcementType', 'barcode', 'date', 'packages', 'receiver', 'sender'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['announcementID' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\UUID::class, 'date' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DateWithTz::class, 'receiver' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\AnnouncementDeliveryParticipant::class, 'sender' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\AnnouncementDeliveryParticipant::class];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const BODY_FIELDS = ['announcementID', 'announcementType', 'barcode', 'date', 'packages', 'receiver', 'sender'];

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\UUID Body field announcementID */
    public \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\UUID $announcementID;

    /** @var string Тип анонса */
    public string $announcementType;

    /** @var string Уникальный ШК анонса. Должен быть напечатан на бумажных сопроводительных документах (акте приема передачи). Данный ШК необходимо использовать для установки соответствия принимаемой партии грузомест/посылок с анонсом переданным в электронном виде через инфообмен. */
    public string $barcode;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DateWithTz Дата и время создания анонса в формате RFC 3339 в UTC */
    public \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DateWithTz $date;

    /** @var array<int, mixed> Список грузомест */
    public array $packages;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\AnnouncementDeliveryParticipant Body field receiver */
    public \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\AnnouncementDeliveryParticipant $receiver;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\AnnouncementDeliveryParticipant Body field sender */
    public \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\AnnouncementDeliveryParticipant $sender;
}
