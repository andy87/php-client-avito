<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Prompt\OrderManagement\General;

use php_client_avito\Generated\Prompt\MarkingsPrompt as BaseMarkingsPrompt;

/**
 * Класс данных запроса Avito API [POST] /order-management/1/markings.
 *
 * @documentation https://developers.avito.ru/api-catalog/order-management/documentation#operation/markings
 *
 * @property array<int, \php_client_avito\Generated\Schema\OrderManagement\Marking>|null $markings Массив маркировок, которые требуется передать
 */
class MarkingsPrompt extends BaseMarkingsPrompt
{
}
