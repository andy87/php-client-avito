<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response;

use Andy87\ClientsBase\Response\AbstractResponse;

/**
 * DTO ответа Avito API getTariffInfo.
 */
class GetTariffInfoResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['current' => 'current', 'scheduled' => 'scheduled'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['current' => \Andy87\ClientsAvito\Generated\Schema\Tariff\TariffContract::class, 'scheduled' => \Andy87\ClientsAvito\Generated\Schema\Tariff\TariffContract::class];

    protected const MODEL = \Andy87\ClientsAvito\Generated\Schema\Tariff\TariffInfo::class;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Tariff\TariffContract|null Response field current */
    public ?\Andy87\ClientsAvito\Generated\Schema\Tariff\TariffContract $current = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Tariff\TariffContract|null Response field scheduled */
    public ?\Andy87\ClientsAvito\Generated\Schema\Tariff\TariffContract $scheduled = null;
}
