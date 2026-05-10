<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Response;

use Andy87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ Avito API [GET] /tariff/info/1.
 *
 * @documentation https://developers.avito.ru/api-catalog/tariff/documentation#operation/getTariffInfo
 */
class GetTariffInfoResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['current' => 'current', 'scheduled' => 'scheduled'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['current' => \php_client_avito\Generated\Schema\Tariff\TariffContract::class, 'scheduled' => \php_client_avito\Generated\Schema\Tariff\TariffContract::class];

    protected const MODEL = \php_client_avito\Generated\Schema\Tariff\TariffInfo::class;

    /** @var \php_client_avito\Generated\Schema\Tariff\TariffContract|null Response field current */
    public ?\php_client_avito\Generated\Schema\Tariff\TariffContract $current = null;

    /** @var \php_client_avito\Generated\Schema\Tariff\TariffContract|null Response field scheduled */
    public ?\php_client_avito\Generated\Schema\Tariff\TariffContract $scheduled = null;
}
