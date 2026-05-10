<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt\OrderManagement\Labels;

use and_y87\php_client_avito\Generated\Prompt\GenerateLabelsPrompt as BaseGenerateLabelsPrompt;

/**
 * Класс данных запроса Avito API [POST] /order-management/1/orders/labels.
 *
 * @documentation https://developers.avito.ru/api-catalog/order-management/documentation#operation/generateLabels
 *
 * @property array<int, string> $orderIDs ID заказов в сервисе сделок (marketplace)
 */
class GeneratePrompt extends BaseGenerateLabelsPrompt
{
}
