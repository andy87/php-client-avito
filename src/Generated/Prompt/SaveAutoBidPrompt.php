<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [POST] /cpxpromo/1/setAuto.
 * 
 * @documentation https://developers.avito.ru/api-catalog/cpxpromo/documentation#operation/saveAutoBid
 */
class SaveAutoBidPrompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/cpxpromo/1/setAuto';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const FIELD_MAP = ['Authorization' => 'Authorization', 'actionTypeID' => 'actionTypeID', 'budgetPenny' => 'budgetPenny', 'budgetType' => 'budgetType', 'itemID' => 'itemID'];

    protected const REQUIRED_FIELDS = ['Authorization', 'actionTypeID', 'budgetPenny', 'budgetType', 'itemID'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const BODY_FIELDS = ['actionTypeID', 'budgetPenny', 'budgetType', 'itemID'];

    /** @var string Токен для авторизации */
    public string $Authorization;

    /** @var int Тип события (1 - звонок | 5 - пакет кликов | 7 - мессенджер, передача контакта в чате) */
    public int $actionTypeID;

    /** @var int Текущий бюджет в копейках */
    public int $budgetPenny;

    /** @var string Тип бюджета ("1d" - дневной | "7d" - недельный | "30d" - месячный) */
    public string $budgetType;

    /** @var int Идентификатор объявления */
    public int $itemID;
}
