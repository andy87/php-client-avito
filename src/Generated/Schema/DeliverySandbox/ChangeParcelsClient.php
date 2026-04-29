<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/ChangeParcelsClient.
 */
class ChangeParcelsClient extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['name' => 'name', 'phones' => 'phones'];

    protected const REQUIRED_FIELDS = ['name', 'phones'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string ФИО нового получателя посылки.
 */
    public string $name;

    /** @var array<int, string> Список номеров телефонов нового получателя. 
Если на стороне СД нет поддержки работы с несколькими номерами телефонов, то необходимо использовать первый из списка и считать его основным контактом.
  
Формат номеров телефона не регламентирован.
 */
    public array $phones;
}
