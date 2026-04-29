<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response\Autoteka\Leads;

use Andy87\ClientsAvito\Generated\Response\GetLeadsResponse as BaseGetLeadsResponse;

/**
 * Ответ Avito API [POST] /autoteka/v1/get-leads/.
 * 
 * @documentation https://developers.avito.ru/api-catalog/autoteka/documentation#operation/getLeads
 * 
 * @property array<string, mixed>|null $pagination Response field pagination
 * @property array<int, array<string, mixed>>|null $result Response field result
 */
class GetResponse extends BaseGetLeadsResponse
{
}
