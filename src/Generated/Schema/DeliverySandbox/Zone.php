<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/Zone.
 */
class Zone extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['tariffZoneId' => 'tariffZoneId', 'termsZoneId' => 'termsZoneId', 'type' => 'type'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string|null Идентификатор [тарифной зоны](#tag/AvitoDeliveryTariffZone); ссылается на один из объектов в поле tariffZones */
    public ?string $tariffZoneId = null;

    /** @var string|null Идентификатор [зоны сроков](#tag/AvitoDeliveryTariffZone); ссылается на один из объектов в поле termsZones */
    public ?string $termsZoneId = null;

    /** @var string|null Буквенные обозначения типа являются DEPRECATED, используйте числовые обозначения.<br /><br />
Тип доставки, которую описывают данные условия
<br />
  `0` - `S-PUDO2S-PUDO`: Доставка из собственных ПВЗ в собственные ПВЗ<br /><br />
  `3` - `S-AREA2S-AREA`: Доставка из собственной области доставки в собственную область доставки<br /><br />
  `4` - `S-PUDO2S-AREA`: Доставка из собственных ПВЗ в собственные области доставки<br /><br />
  `5` - `S-PUDO-BTW-F-HUB`: Доставка из своего ПВЗ в чужой ХАБ на прямом потоке или из чужого ХАБа в свой ПВЗ на обратном потоке<br />
                  (тут важно обратить внимание, что только одна зона может быть установлена для одного tagFrom, 
                  что эквивалентно тому, что один свой ПВЗ может быть связан только с одним ХАБом чужой службы доставки)<br /><br />
  `6` - `S-HUB-BTW-S-PUDO`: Доставка из своего ХАБа в свой ПВЗ на прямом потоке или из своего ПВЗ в свой ХАБ на обратном потоке<br /><br />
 */
    public ?string $type = null;
}
