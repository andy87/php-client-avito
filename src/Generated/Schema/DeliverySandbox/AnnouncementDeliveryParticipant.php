<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/AnnouncementDeliveryParticipant.
 */
class AnnouncementDeliveryParticipant extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['delivery' => 'delivery', 'email' => 'email', 'name' => 'name', 'phones' => 'phones', 'type' => 'type'];

    protected const REQUIRED_FIELDS = ['type', 'name', 'phones', 'delivery'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var array<string, mixed> Schema field delivery */
    public array $delivery;

    /** @var string|null Адрес электронной почты */
    public ?string $email = null;

    /** @var string Наименование участника доставки (наименование СД) */
    public string $name;

    /** @var array<int, string> Контактные телефоны */
    public array $phones;

    /** @var string Тип отправителя/получателя */
    public string $type;
}
