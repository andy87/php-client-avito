<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\Cpxpromo;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito cpxpromo/manual.
 */
class Manual extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['bidPenny' => 'bidPenny', 'bids' => 'bids', 'limitPenny' => 'limitPenny', 'maxBidPenny' => 'maxBidPenny', 'maxLimitPenny' => 'maxLimitPenny', 'minBidPenny' => 'minBidPenny', 'minLimitPenny' => 'minLimitPenny', 'recBidPenny' => 'recBidPenny'];

    protected const REQUIRED_FIELDS = ['recBidPenny', 'minBidPenny', 'maxBidPenny', 'minLimitPenny', 'maxLimitPenny', 'bids'];

    protected const NULLABLE_FIELDS = ['bidPenny', 'limitPenny'];

    protected const CASTS = ['bids' => [\and_y87\php_client_avito\Generated\Schema\Cpxpromo\Bid::class]];

    /** @var int|null Текущая цена за целевое действие (в копейках) */
    public ?int $bidPenny = null;

    /** @var array<int, \and_y87\php_client_avito\Generated\Schema\Cpxpromo\Bid> Schema field bids */
    public array $bids;

    /** @var int|null Дневной лимит (в копейках) */
    public ?int $limitPenny = null;

    /** @var int Максимальная цена за целевое действие (в копейках) */
    public int $maxBidPenny;

    /** @var int Максимальный дневной лимит (в копейках) */
    public int $maxLimitPenny;

    /** @var int Минимальная цена за целевое действие (в копейках) */
    public int $minBidPenny;

    /** @var int Минимальный дневной лимит (в копейках) */
    public int $minLimitPenny;

    /** @var int Рекомендуемая цена за целевое действие (в копейках) */
    public int $recBidPenny;
}
