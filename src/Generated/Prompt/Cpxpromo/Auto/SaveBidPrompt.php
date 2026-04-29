<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\Cpxpromo\Auto;

use Andy87\ClientsAvito\Generated\Prompt\SaveAutoBidPrompt as BaseSaveAutoBidPrompt;

/**
 * Класс данных запроса Avito API [POST] /cpxpromo/1/setAuto.
 * 
 * @documentation https://developers.avito.ru/api-catalog/cpxpromo/documentation#operation/saveAutoBid
 * 
 * @property string $Authorization Токен для авторизации
 * @property int $actionTypeID Тип события (1 - звонок | 5 - пакет кликов | 7 - мессенджер, передача контакта в чате)
 * @property int $budgetPenny Текущий бюджет в копейках
 * @property string $budgetType Тип бюджета ("1d" - дневной | "7d" - недельный | "30d" - месячный)
 * @property int $itemID Идентификатор объявления
 */
class SaveBidPrompt extends BaseSaveAutoBidPrompt
{
}
