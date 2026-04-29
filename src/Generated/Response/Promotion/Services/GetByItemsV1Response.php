<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response\Promotion\Services;

use Andy87\ClientsAvito\Generated\Response\GetServicesByItemsV1Response as BaseGetServicesByItemsV1Response;

/**
 * Ответ Avito API [POST] /promotion/v1/items/services/get.
 * 
 * @documentation https://developers.avito.ru/api-catalog/promotion/documentation#operation/get_services_by_items_v1
 * 
 * @property array<int, \Andy87\ClientsAvito\Generated\Schema\Promotion\ErrorByItemV1>|null $errors Информация об ошибках получения варианта бюджета
 * @property array<int, \Andy87\ClientsAvito\Generated\Schema\Promotion\ServicesByItemV1>|null $items Информация об услугах продвижения по объявлениям
 */
class GetByItemsV1Response extends BaseGetServicesByItemsV1Response
{
}
