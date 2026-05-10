<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Response\Promotion\Services;

use and_y87\php_client_avito\Generated\Response\GetServicesByItemsV1Response as BaseGetServicesByItemsV1Response;

/**
 * Ответ Avito API [POST] /promotion/v1/items/services/get.
 *
 * @documentation https://developers.avito.ru/api-catalog/promotion/documentation#operation/get_services_by_items_v1
 *
 * @property array<int, \and_y87\php_client_avito\Generated\Schema\Promotion\ErrorByItemV1>|null $errors Информация об ошибках получения варианта бюджета
 * @property array<int, \and_y87\php_client_avito\Generated\Schema\Promotion\ServicesByItemV1>|null $items Информация об услугах продвижения по объявлениям
 */
class GetByItemsV1Response extends BaseGetServicesByItemsV1Response
{
}
