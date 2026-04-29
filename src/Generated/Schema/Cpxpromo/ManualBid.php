<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Cpxpromo;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito cpxpromo/ManualBid.
 */
class ManualBid extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['actionTypeID' => 'actionTypeID', 'bidPenny' => 'bidPenny', 'itemID' => 'itemID', 'limitPenny' => 'limitPenny'];

    protected const REQUIRED_FIELDS = ['itemID', 'bidPenny', 'actionTypeID'];

    protected const NULLABLE_FIELDS = ['limitPenny'];

    protected const CASTS = [];

    /** @var int Тип события (1 - звонок | 5 - пакет кликов | 7 - мессенджер, передача контакта в чате) */
    public int $actionTypeID;

    /** @var int Текущая цена за целевое действие в копейках */
    public int $bidPenny;

    /** @var int Идентификатор объявления */
    public int $itemID;

    /** @var int|null Дневной лимит в копейках */
    public ?int $limitPenny = null;
}
