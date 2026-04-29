<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response;

use Andy87\ClientsBase\Response\AbstractResponse;

/**
 * Ответ Avito API [POST] /cpa/v2/balanceInfo.
 * 
 * @documentation https://developers.avito.ru/api-catalog/cpa/documentation#operation/balanceInfoV2
 */
class BalanceInfoV2Response extends AbstractResponse
{
    protected const FIELD_MAP = ['advance' => 'advance', 'balance' => 'balance', 'debt' => 'debt', 'errorData' => 'error'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['errorData' => \Andy87\ClientsAvito\Generated\Schema\Cpa\CpaError::class];

    protected const MODEL = null;

    /** @var int|null Response field advance */
    public ?int $advance = null;

    /** @var int|null Response field balance */
    public ?int $balance = null;

    /** @var int|null Response field debt */
    public ?int $debt = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Cpa\CpaError|null Response field error */
    public ?\Andy87\ClientsAvito\Generated\Schema\Cpa\CpaError $errorData = null;
}
