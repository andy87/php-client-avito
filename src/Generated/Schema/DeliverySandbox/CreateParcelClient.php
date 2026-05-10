<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\DeliverySandbox;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/CreateParcelClient.
 */
class CreateParcelClient extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['delivery' => 'delivery', 'email' => 'email', 'inn' => 'inn', 'name' => 'name', 'phones' => 'phones', 'type' => 'type'];

    protected const REQUIRED_FIELDS = ['type', 'phones', 'email', 'name', 'delivery'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['delivery' => \php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelClientDelivery::class];

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelClientDelivery Schema field delivery */
    public \php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelClientDelivery $delivery;

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
