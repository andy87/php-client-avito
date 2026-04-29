<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\Cpxpromo\Manual;

use Andy87\ClientsAvito\Generated\Prompt\SaveManualBidPrompt as BaseSaveManualBidPrompt;

/**
 * Класс данных запроса Avito API [POST] /cpxpromo/1/setManual.
 * 
 * @documentation https://developers.avito.ru/api-catalog/cpxpromo/documentation#operation/saveManualBid
 * 
 * @property string $Authorization Токен для авторизации
 * @property int $actionTypeID Тип события (1 - звонок | 5 - пакет кликов | 7 - мессенджер, передача контакта в чате)
 * @property int $bidPenny Текущая цена за целевое действие в копейках
 * @property int $itemID Идентификатор объявления
 * @property int|null $limitPenny Дневной лимит в копейках
 */
class SaveBidPrompt extends BaseSaveManualBidPrompt
{
}
