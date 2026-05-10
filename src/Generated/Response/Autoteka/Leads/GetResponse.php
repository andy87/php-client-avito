<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Response\Autoteka\Leads;

use and_y87\php_client_avito\Generated\Response\GetLeadsResponse as BaseGetLeadsResponse;

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
