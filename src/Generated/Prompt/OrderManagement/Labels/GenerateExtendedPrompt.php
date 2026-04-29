<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\OrderManagement\Labels;

use Andy87\ClientsAvito\Generated\Prompt\GenerateLabelsExtendedPrompt as BaseGenerateLabelsExtendedPrompt;

/**
 * Класс данных запроса Avito API [POST] /order-management/1/orders/labels/extended.
 * 
 * @documentation https://developers.avito.ru/api-catalog/order-management/documentation#operation/generateLabelsExtended
 * 
 * @property string $Authorization Токен для авторизации
 * @property array<int, string> $orderIDs ID заказов в сервисе сделок (marketplace)
 */
class GenerateExtendedPrompt extends BaseGenerateLabelsExtendedPrompt
{
}
