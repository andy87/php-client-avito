<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response\Cpxpromo\Bids;

use Andy87\ClientsAvito\Generated\Response\GetBidsResponse as BaseGetBidsResponse;

/**
 * Ответ Avito API [GET] /cpxpromo/1/getBids/{itemId}.
 * 
 * @documentation https://developers.avito.ru/api-catalog/cpxpromo/documentation#operation/getBids
 * 
 * @property int $actionTypeID Тип события (1 - звонок | 5 - пакет кликов | 7 - мессенджер, передача контакта в чате)
 * @property \Andy87\ClientsAvito\Generated\Schema\Cpxpromo\Auto|null $auto Response field auto
 * @property \Andy87\ClientsAvito\Generated\Schema\Cpxpromo\Manual|null $manual Response field manual
 * @property string $selectedType Выбранный тип продвижения ("manual" - ручное продвижение | "auto" - автоматическое продвижение)
 */
class GetResponse extends BaseGetBidsResponse
{
}
