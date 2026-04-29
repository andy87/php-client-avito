<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response\Cpa\Phones;

use Andy87\ClientsAvito\Generated\Response\PhonesInfoFromChatsResponse as BasePhonesInfoFromChatsResponse;

/**
 * Ответ Avito API [POST] /cpa/v1/phonesInfoFromChats.
 * 
 * @documentation https://developers.avito.ru/api-catalog/cpa/documentation#operation/phonesInfoFromChats
 * 
 * @property array<int, \Andy87\ClientsAvito\Generated\Schema\Cpa\OpenAPIPhonesInfoFromChatsOut> $results Response field results
 * @property int $total Число найденных чатов
 */
class InfoFromChatsResponse extends BasePhonesInfoFromChatsResponse
{
}
