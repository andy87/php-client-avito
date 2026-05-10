<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\DeliverySandbox;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/SandboxCreateAnnouncementRequest.
 */
class SandboxCreateAnnouncementRequest extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['announcementID' => 'announcementID', 'announcementType' => 'announcementType', 'barcode' => 'barcode', 'date' => 'date', 'options' => 'options', 'packages' => 'packages', 'receiver' => 'receiver', 'sender' => 'sender'];

    protected const REQUIRED_FIELDS = ['options', 'announcementID', 'barcode', 'sender', 'receiver', 'announcementType', 'date', 'packages'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['options' => \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\SandboxCreateAnnouncementOptions::class, 'packages' => [\and_y87\php_client_avito\Generated\Schema\DeliverySandbox\SandboxCreateAnnouncementPackage::class], 'receiver' => \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\SandboxCreateAnnouncementParticipant::class, 'sender' => \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\SandboxCreateAnnouncementParticipant::class];

    /** @var string Уникальный идентификатор анонса UUID V4. */
    public string $announcementID;

    /** @var string Тип анонса. */
    public string $announcementType;

    /** @var string Штрихкод анонса. */
    public string $barcode;

    /** @var string Дата и время создания анонса (UTC). */
    public string $date;

    /** @var \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\SandboxCreateAnnouncementOptions Schema field options */
    public \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\SandboxCreateAnnouncementOptions $options;

    /** @var array<int, \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\SandboxCreateAnnouncementPackage> Список грузомест. */
    public array $packages;

    /** @var \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\SandboxCreateAnnouncementParticipant Schema field receiver */
    public \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\SandboxCreateAnnouncementParticipant $receiver;

    /** @var \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\SandboxCreateAnnouncementParticipant Schema field sender */
    public \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\SandboxCreateAnnouncementParticipant $sender;
}
