<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/TariffZone.
 */
class TariffZone extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['deliveryProviderZoneId' => 'deliveryProviderZoneId', 'items' => 'items', 'name' => 'name'];

    protected const REQUIRED_FIELDS = ['name', 'deliveryProviderTariffZoneId', 'items'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string|null Id тарифной зоны на стороне службы доставки */
    public ?string $deliveryProviderZoneId = null;

    /** @var array<int, mixed> Модели расчета цены для каждой из услуг.
<br>
Стоимость доставки складывается из суммы стоимостей описанных здесь услуг. <br />
Модели расчета разделены на B2C и С2С. Это значит, что для расчета стоимости доставки C2C посылки будут использоваться C2C модели расчета.  <br />
Если в тарифной зоне нет подходящих моделей, то терминалы относящиеся к такой тарифной зоне не будут участвовать в расчете и показе.  <br /> 
**Необходимо указывать модели расчета для С2С и для B2C, даже если цены совпадают.** <br />
Но для сохранения обратной совместимости, пока СД не начала поддерживать разделение на B2C и С2С, для B2C и C2C будут использоваться С2С модели расчета.
 */
    public array $items;

    /** @var string Человекопонятное название тарифной зоны (будет использоваться в интерфейсной части) */
    public string $name;
}
