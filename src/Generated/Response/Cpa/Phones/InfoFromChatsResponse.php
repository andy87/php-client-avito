<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Response\Cpa\Phones;

use and_y87\php_client_avito\Generated\Response\PhonesInfoFromChatsResponse as BasePhonesInfoFromChatsResponse;

/**
 * Ответ Avito API [POST] /cpa/v1/phonesInfoFromChats.
 *
 * @documentation https://developers.avito.ru/api-catalog/cpa/documentation#operation/phonesInfoFromChats
 *
 * @property array<int, \and_y87\php_client_avito\Generated\Schema\Cpa\OpenAPIPhonesInfoFromChatsOut> $results Response field results
 * @property int $total Число найденных чатов
 */
class InfoFromChatsResponse extends BasePhonesInfoFromChatsResponse
{
}
