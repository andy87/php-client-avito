<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\Cpxpromo\Bids;

use Andy87\ClientsAvito\Generated\Prompt\GetBidsPrompt as BaseGetBidsPrompt;

/**
 * Класс данных запроса Avito API [GET] /cpxpromo/1/getBids/{itemId}.
 * 
 * @documentation https://developers.avito.ru/api-catalog/cpxpromo/documentation#operation/getBids
 * 
 * @property string $Authorization Токен для авторизации
 * @property int $itemId path-parameter itemId
 */
class GetPrompt extends BaseGetBidsPrompt
{
}
