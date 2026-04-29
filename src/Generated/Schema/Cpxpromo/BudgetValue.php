<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Cpxpromo;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito cpxpromo/budgetValue.
 */
class BudgetValue extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['compare' => 'compare', 'maxForecast' => 'maxForecast', 'minForecast' => 'minForecast', 'valuePenny' => 'valuePenny'];

    protected const REQUIRED_FIELDS = ['valuePenny', 'minForecast', 'maxForecast', 'compare'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var int Количество процентных пунктов. (На сколько выше в сравнении с конкурентами) */
    public int $compare;

    /** @var int Максимальное кол-во ЦД за цену ЦД */
    public int $maxForecast;

    /** @var int Минимальное кол-во ЦД за цену ЦД */
    public int $minForecast;

    /** @var int Бюджет (в копейках) */
    public int $valuePenny;
}
