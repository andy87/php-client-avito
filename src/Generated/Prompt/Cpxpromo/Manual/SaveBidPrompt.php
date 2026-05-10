<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Prompt\Cpxpromo\Manual;

use php_client_avito\Generated\Prompt\SaveManualBidPrompt as BaseSaveManualBidPrompt;

/**
 * Класс данных запроса Avito API [POST] /cpxpromo/1/setManual.
 *
 * @documentation https://developers.avito.ru/api-catalog/cpxpromo/documentation#operation/saveManualBid
 *
 * @property int $actionTypeID Тип события (1 - звонок | 5 - пакет кликов | 7 - мессенджер, передача контакта в чате)
 * @property int $bidPenny Текущая цена за целевое действие в копейках
 * @property int $itemID Идентификатор объявления
 * @property int|null $limitPenny Дневной лимит в копейках
 */
class SaveBidPrompt extends BaseSaveManualBidPrompt
{
}
