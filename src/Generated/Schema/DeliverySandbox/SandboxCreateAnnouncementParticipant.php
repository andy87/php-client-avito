<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/SandboxCreateAnnouncementParticipant.
 */
class SandboxCreateAnnouncementParticipant extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['delivery' => 'delivery', 'email' => 'email', 'name' => 'name', 'phones' => 'phones', 'type' => 'type'];

    protected const REQUIRED_FIELDS = ['type', 'phones', 'email', 'name', 'delivery'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var array<string, mixed> Schema field delivery */
    public array $delivery;

    /** @var string Электронная почта участника. */
    public string $email;

    /** @var string Наименование участника доставки (отправителя/получателя). */
    public string $name;

    /** @var array<int, string> Контактные телефоны. */
    public array $phones;

    /** @var string Тип участника доставки (отправителя/получателя). */
    public string $type;
}
