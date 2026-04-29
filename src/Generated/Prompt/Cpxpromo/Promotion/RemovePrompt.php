<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\Cpxpromo\Promotion;

use Andy87\ClientsAvito\Generated\Prompt\RemovePromotionPrompt as BaseRemovePromotionPrompt;

/**
 * Класс данных запроса Avito API [POST] /cpxpromo/1/remove.
 * 
 * @documentation https://developers.avito.ru/api-catalog/cpxpromo/documentation#operation/removePromotion
 * 
 * @property string $Authorization Токен для авторизации
 * @property int $itemID Идентификатор объявления
 */
class RemovePrompt extends BaseRemovePromotionPrompt
{
}
