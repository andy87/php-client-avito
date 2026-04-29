<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * DTO запроса Avito API saveManualBid.
 */
class SaveManualBidPrompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/cpxpromo/1/setManual';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const FIELD_MAP = ['Authorization' => 'Authorization', 'actionTypeID' => 'actionTypeID', 'bidPenny' => 'bidPenny', 'itemID' => 'itemID', 'limitPenny' => 'limitPenny'];

    protected const REQUIRED_FIELDS = ['Authorization', 'actionTypeID', 'bidPenny', 'itemID'];

    protected const NULLABLE_FIELDS = ['limitPenny'];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const BODY_FIELDS = ['actionTypeID', 'bidPenny', 'itemID', 'limitPenny'];

    /** @var string Токен для авторизации */
    public string $Authorization;

    /** @var int Тип события (1 - звонок | 5 - пакет кликов | 7 - мессенджер, передача контакта в чате) */
    public int $actionTypeID;

    /** @var int Текущая цена за целевое действие в копейках */
    public int $bidPenny;

    /** @var int Идентификатор объявления */
    public int $itemID;

    /** @var int|null Дневной лимит в копейках */
    public ?int $limitPenny = null;
}
