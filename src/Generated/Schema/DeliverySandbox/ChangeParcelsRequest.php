<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/ChangeParcelsRequest.
 */
class ChangeParcelsRequest extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['applications' => 'applications', 'type' => 'type'];

    protected const REQUIRED_FIELDS = ['type', 'applications'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['applications' => [\Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\ChangeParcelsApplication::class]];

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\ChangeParcelsApplication> Schema field applications */
    public array $applications;

    /** @var string Тип заявки.
  
Заявки могут быть следующих типов:
- `changeReceiver` - обновить данные о получателе посылки.
- `extendParcelStorage` - продлить срок хранения посылки.
- `prohibitParcelReceive` - запретить выдачу посылки на ПВЗ вручения.
- `prohibitParcelAcceptance` - запретить прием посылки на  ПВЗ отправки (в разработке).
 */
    public string $type;
}
