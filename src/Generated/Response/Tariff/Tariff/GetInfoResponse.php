<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response\Tariff\Tariff;

use Andy87\ClientsAvito\Generated\Response\GetTariffInfoResponse as BaseGetTariffInfoResponse;

/**
 * Ответ Avito API [GET] /tariff/info/1.
 * 
 * @documentation https://developers.avito.ru/api-catalog/tariff/documentation#operation/getTariffInfo
 * 
 * @property \Andy87\ClientsAvito\Generated\Schema\Tariff\TariffContract|null $current Response field current
 * @property \Andy87\ClientsAvito\Generated\Schema\Tariff\TariffContract|null $scheduled Response field scheduled
 */
class GetInfoResponse extends BaseGetTariffInfoResponse
{
}
