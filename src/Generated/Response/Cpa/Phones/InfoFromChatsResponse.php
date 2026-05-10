<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Response\Cpa\Phones;

use php_client_avito\Generated\Response\PhonesInfoFromChatsResponse as BasePhonesInfoFromChatsResponse;

/**
 * Ответ Avito API [POST] /cpa/v1/phonesInfoFromChats.
 *
 * @documentation https://developers.avito.ru/api-catalog/cpa/documentation#operation/phonesInfoFromChats
 *
 * @property array<int, \php_client_avito\Generated\Schema\Cpa\OpenAPIPhonesInfoFromChatsOut> $results Response field results
 * @property int $total Число найденных чатов
 */
class InfoFromChatsResponse extends BasePhonesInfoFromChatsResponse
{
}
