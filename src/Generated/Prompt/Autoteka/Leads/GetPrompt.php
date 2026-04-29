<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\Autoteka\Leads;

use Andy87\ClientsAvito\Generated\Prompt\GetLeadsPrompt as BaseGetLeadsPrompt;

/**
 * Класс данных запроса Avito API [POST] /autoteka/v1/get-leads/.
 * 
 * @documentation https://developers.avito.ru/api-catalog/autoteka/documentation#operation/getLeads
 * 
 * @property int|null $lastId Последний успешно-прочитанный id, указывается для постраничной выдачи
 * @property int|null $limit Количество записей в ответе
 * @property int $subscriptionId Идентификатор подписки
 */
class GetPrompt extends BaseGetLeadsPrompt
{
}
