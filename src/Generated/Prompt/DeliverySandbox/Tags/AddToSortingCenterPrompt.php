<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Prompt\DeliverySandbox\Tags;

use php_client_avito\Generated\Prompt\AddTagsToSortingCenterPrompt as BaseAddTagsToSortingCenterPrompt;

/**
 * Класс данных запроса Avito API [POST] /delivery-sandbox/tariffs/{tariff_id}/tagged-sorting-centers.
 *
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/AddTagsToSortingCenter
 *
 * @property int $tariff_id id своего тарифа, теги которого будут установлены для сортировочных центров
 * @property \php_client_avito\Generated\Schema\DeliverySandbox\TaggedSortingCenterRequest $body Request body
 */
class AddToSortingCenterPrompt extends BaseAddTagsToSortingCenterPrompt
{
}
