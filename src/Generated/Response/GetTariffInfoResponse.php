<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Response;

use and_y87\PhpClientSdk\Response\Model\AbstractResponse;

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

    protected const CASTS = ['current' => \and_y87\php_client_avito\Generated\Schema\Tariff\TariffContract::class, 'scheduled' => \and_y87\php_client_avito\Generated\Schema\Tariff\TariffContract::class];

    protected const MODEL = \and_y87\php_client_avito\Generated\Schema\Tariff\TariffInfo::class;

    /** @var \and_y87\php_client_avito\Generated\Schema\Tariff\TariffContract|null Response field current */
    public ?\and_y87\php_client_avito\Generated\Schema\Tariff\TariffContract $current = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\Tariff\TariffContract|null Response field scheduled */
    public ?\and_y87\php_client_avito\Generated\Schema\Tariff\TariffContract $scheduled = null;
}
