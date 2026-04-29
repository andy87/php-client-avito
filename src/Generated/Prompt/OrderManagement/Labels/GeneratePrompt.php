<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\OrderManagement\Labels;

use Andy87\ClientsAvito\Generated\Prompt\GenerateLabelsPrompt as BaseGenerateLabelsPrompt;

/**
 * Класс данных запроса Avito API [POST] /order-management/1/orders/labels.
 * 
 * @documentation https://developers.avito.ru/api-catalog/order-management/documentation#operation/generateLabels
 * 
 * @property string $Authorization Токен для авторизации
 * @property array<int, string> $orderIDs ID заказов в сервисе сделок (marketplace)
 */
class GeneratePrompt extends BaseGenerateLabelsPrompt
{
}
