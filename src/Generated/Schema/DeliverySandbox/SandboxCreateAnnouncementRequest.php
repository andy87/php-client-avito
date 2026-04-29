<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/SandboxCreateAnnouncementRequest.
 */
class SandboxCreateAnnouncementRequest extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['announcementID' => 'announcementID', 'announcementType' => 'announcementType', 'barcode' => 'barcode', 'date' => 'date', 'options' => 'options', 'packages' => 'packages', 'receiver' => 'receiver', 'sender' => 'sender'];

    protected const REQUIRED_FIELDS = ['options', 'announcementID', 'barcode', 'sender', 'receiver', 'announcementType', 'date', 'packages'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['options' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\SandboxCreateAnnouncementOptions::class, 'packages' => [\Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\SandboxCreateAnnouncementPackage::class], 'receiver' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\SandboxCreateAnnouncementParticipant::class, 'sender' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\SandboxCreateAnnouncementParticipant::class];

    /** @var string Уникальный идентификатор анонса UUID V4. */
    public string $announcementID;

    /** @var string Тип анонса. */
    public string $announcementType;

    /** @var string Штрихкод анонса. */
    public string $barcode;

    /** @var string Дата и время создания анонса (UTC). */
    public string $date;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\SandboxCreateAnnouncementOptions Schema field options */
    public \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\SandboxCreateAnnouncementOptions $options;

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\SandboxCreateAnnouncementPackage> Список грузомест. */
    public array $packages;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\SandboxCreateAnnouncementParticipant Schema field receiver */
    public \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\SandboxCreateAnnouncementParticipant $receiver;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\SandboxCreateAnnouncementParticipant Schema field sender */
    public \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\SandboxCreateAnnouncementParticipant $sender;
}
