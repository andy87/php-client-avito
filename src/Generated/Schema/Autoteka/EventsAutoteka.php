<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoteka;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/EventsAutoteka.
 */
class EventsAutoteka extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['avitoOnSale' => 'avitoOnSale', 'bodyRepair' => 'bodyRepair', 'crashes' => 'crashes', 'dealerDataAvailable' => 'dealerDataAvailable', 'firstSellDate' => 'firstSellDate', 'lastMileageRecord' => 'lastMileageRecord', 'owners' => 'owners', 'pledge' => 'pledge', 'publicPerson' => 'publicPerson'];

    protected const REQUIRED_FIELDS = ['crashes', 'bodyRepair', 'publicPerson', 'owners', 'dealerDataAvailable', 'lastMileageRecord', 'pledge', 'avitoOnSale', 'firstSellDate'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var array<string, mixed> Находится ли в данный момент в продаже на Авито */
    public array $avitoOnSale;

    /** @var array<string, mixed> наличие кузовных ремонтов */
    public array $bodyRepair;

    /** @var array<string, mixed> Наличие ДТП */
    public array $crashes;

    /** @var array<string, mixed> Наличие диллерских данных */
    public array $dealerDataAvailable;

    /** @var array<string, mixed> Дата первой продажи */
    public array $firstSellDate;

    /** @var array<string, mixed> Последний зафиксированный пробег */
    public array $lastMileageRecord;

    /** @var array<string, mixed> Количество владельцев */
    public array $owners;

    /** @var array<string, mixed> Наличие залогов */
    public array $pledge;

    /** @var array<string, mixed> Владелец частное или юридическое лицо */
    public array $publicPerson;
}
