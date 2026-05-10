<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\DeliverySandbox;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/customAreaScheduleRequestObject.
 */
class CustomAreaScheduleRequestObject extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['customSchedule' => 'customSchedule', 'providerAreaNumber' => 'providerAreaNumber', 'services' => 'services', 'useAllAreas' => 'useAllAreas'];

    protected const REQUIRED_FIELDS = ['providerAreaNumber', 'services', 'customSchedule'];

    protected const NULLABLE_FIELDS = ['useAllAreas'];

    protected const CASTS = ['customSchedule' => [\php_client_avito\Generated\Schema\DeliverySandbox\DeliveryIntervalInDate::class], 'providerAreaNumber' => [\php_client_avito\Generated\Schema\DeliverySandbox\DeliveryProviderAreaNumber::class]];

    /** @var array<int, \php_client_avito\Generated\Schema\DeliverySandbox\DeliveryIntervalInDate> Список доступных интервалов доставки/забора посылки в определенную дату
В случае если доступные интервалы доставки отсутствуют требуется передать пустой список
 */
    public array $customSchedule;

    /** @var array<int, \php_client_avito\Generated\Schema\DeliverySandbox\DeliveryProviderAreaNumber> Список областей, к которым применимо данное расписание. */
    public array $providerAreaNumber;

    /** @var array<int, string> Услуги расписание на которые требуется скорректировать. Забор (intake), доставка (delivery) */
    public array $services;

    /** @var bool|null Будет игнорироваться список providerAreaNumber и будут использоваться все области актуального тарифа. */
    public ?bool $useAllAreas = null;
}
