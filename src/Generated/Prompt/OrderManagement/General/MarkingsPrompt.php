<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\OrderManagement\General;

use Andy87\ClientsAvito\Generated\Prompt\MarkingsPrompt as BaseMarkingsPrompt;

/**
 * Класс данных запроса Avito API [POST] /order-management/1/markings.
 * 
 * @documentation https://developers.avito.ru/api-catalog/order-management/documentation#operation/markings
 * 
 * @property string $Authorization Токен для авторизации
 * @property array<int, \Andy87\ClientsAvito\Generated\Schema\OrderManagement\Marking>|null $markings Массив маркировок, которые требуется передать
 */
class MarkingsPrompt extends BaseMarkingsPrompt
{
}
