<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\DeliverySandbox\Tags;

use Andy87\ClientsAvito\Generated\Prompt\AddTagsToSortingCenterPrompt as BaseAddTagsToSortingCenterPrompt;

/**
 * Класс данных запроса Avito API [POST] /delivery-sandbox/tariffs/{tariff_id}/tagged-sorting-centers.
 *
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/AddTagsToSortingCenter
 *
 * @property int $tariff_id id своего тарифа, теги которого будут установлены для сортировочных центров
 * @property \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\TaggedSortingCenterRequest $body Request body
 */
class AddToSortingCenterPrompt extends BaseAddTagsToSortingCenterPrompt
{
}
