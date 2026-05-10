<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\Cpxpromo;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito cpxpromo/AutoBid.
 */
class AutoBid extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['actionTypeID' => 'actionTypeID', 'budgetPenny' => 'budgetPenny', 'budgetType' => 'budgetType', 'itemID' => 'itemID'];

    protected const REQUIRED_FIELDS = ['itemID', 'budgetPenny', 'budgetType', 'actionTypeID'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var int Тип события (1 - звонок | 5 - пакет кликов | 7 - мессенджер, передача контакта в чате) */
    public int $actionTypeID;

    /** @var int Текущий бюджет в копейках */
    public int $budgetPenny;

    /** @var string Тип бюджета ("1d" - дневной | "7d" - недельный | "30d" - месячный) */
    public string $budgetType;

    /** @var int Идентификатор объявления */
    public int $itemID;
}
