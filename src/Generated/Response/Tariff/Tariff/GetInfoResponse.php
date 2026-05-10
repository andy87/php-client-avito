<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Response\Tariff\Tariff;

use php_client_avito\Generated\Response\GetTariffInfoResponse as BaseGetTariffInfoResponse;

/**
 * Ответ Avito API [GET] /tariff/info/1.
 *
 * @documentation https://developers.avito.ru/api-catalog/tariff/documentation#operation/getTariffInfo
 *
 * @property \php_client_avito\Generated\Schema\Tariff\TariffContract|null $current Response field current
 * @property \php_client_avito\Generated\Schema\Tariff\TariffContract|null $scheduled Response field scheduled
 */
class GetInfoResponse extends BaseGetTariffInfoResponse
{
}
