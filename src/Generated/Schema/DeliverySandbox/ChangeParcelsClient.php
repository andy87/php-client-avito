<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\DeliverySandbox;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/ChangeParcelsClient.
 */
class ChangeParcelsClient extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['name' => 'name', 'phones' => 'phones', 'terminal' => 'terminal'];

    protected const REQUIRED_FIELDS = ['name', 'phones'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['terminal' => \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\ChangeParcelsTerminal::class];

    /** @var string ФИО нового получателя посылки.
 */
    public string $name;

    /** @var array<int, string> Список номеров телефонов нового получателя.
Если на стороне СД нет поддержки работы с несколькими номерами телефонов, то необходимо использовать первый из списка и считать его основным контактом.

Формат номеров телефона не регламентирован.
 */
    public array $phones;

    /** @var \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\ChangeParcelsTerminal|null Schema field terminal */
    public ?\and_y87\php_client_avito\Generated\Schema\DeliverySandbox\ChangeParcelsTerminal $terminal = null;
}
