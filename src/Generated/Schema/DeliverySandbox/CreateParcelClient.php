<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/CreateParcelClient.
 */
class CreateParcelClient extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['delivery' => 'delivery', 'email' => 'email', 'inn' => 'inn', 'name' => 'name', 'phones' => 'phones', 'type' => 'type'];

    protected const REQUIRED_FIELDS = ['type', 'phones', 'email', 'name', 'delivery'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['delivery' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelClientDelivery::class];

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelClientDelivery Schema field delivery */
    public \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelClientDelivery $delivery;

    /** @var string Электронная почта. */
    public string $email;

    /** @var string|null ИНН участника доставки (отправителя/получателя). Опциональное.

Заполнятся только для отправителя/получателя с типом `LEGAL` для определенных сценариев доставки и партнеров.
 */
    public ?string $inn = null;

    /** @var string Наименование клиента.
 */
    public string $name;

    /** @var array<int, string> Список телефонов для связи.

Формат номеров телефона не регламентирован.
 */
    public array $phones;

    /** @var string Тип отправителя.
 */
    public string $type;
}
