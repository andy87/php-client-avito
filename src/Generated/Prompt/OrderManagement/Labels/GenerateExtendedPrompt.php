<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Prompt\OrderManagement\Labels;

use php_client_avito\Generated\Prompt\GenerateLabelsExtendedPrompt as BaseGenerateLabelsExtendedPrompt;

/**
 * Класс данных запроса Avito API [POST] /order-management/1/orders/labels/extended.
 *
 * @documentation https://developers.avito.ru/api-catalog/order-management/documentation#operation/generateLabelsExtended
 *
 * @property array<int, string> $orderIDs ID заказов в сервисе сделок (marketplace)
 */
class GenerateExtendedPrompt extends BaseGenerateLabelsExtendedPrompt
{
}
