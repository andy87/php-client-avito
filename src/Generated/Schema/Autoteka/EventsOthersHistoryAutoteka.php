<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoteka;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/EventsOthersHistoryAutoteka.
 */
class EventsOthersHistoryAutoteka extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['date' => 'date', 'description' => 'description', 'event' => 'event', 'mileage' => 'mileage', 'operationCodeId' => 'operationCodeId', 'source' => 'source', 'sourceId' => 'sourceId', 'type' => 'type'];

    protected const REQUIRED_FIELDS = ['date', 'description', 'event', 'mileage', 'source', 'type'];

    protected const NULLABLE_FIELDS = ['operationCodeId', 'sourceId'];

    protected const CASTS = [];

    /** @var int Дата событи в формате Unixtime */
    public int $date;

    /** @var string Подробное описание события */
    public string $description;

    /** @var string Тип события текстом */
    public string $event;

    /** @var int Пробег зафиксированный во время события */
    public int $mileage;

    /** @var int|null Код регистрационного действия */
    public ?int $operationCodeId = null;

    /** @var string Источник данных */
    public string $source;

    /** @var int|null sourceId */
    public ?int $sourceId = null;

    /** @var string Тип события `accident`,`avitoPlacement`,`bodyRepair`,`changeInDocuments`,`customs`,`diagnostic`,`emergencyCommissionerCall`,`externalPlacement`,`inspection`,`recallRecord`,`registration`,`regulation`,`repair`,`repairCalculation`,`salvageCarAuction`,`sell`,`service`,`serviceRequest`,`to`,`tradeInValuations`,`upgrade` */
    public string $type;
}
