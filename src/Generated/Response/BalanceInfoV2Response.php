<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Response;

use Andy87\PhpClientSdk\Response\AbstractResponse;

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

    protected const CASTS = ['errorData' => \and_y87\php_client_avito\Generated\Schema\Cpa\CpaError::class];

    protected const MODEL = null;

    /** @var int|null Response field advance */
    public ?int $advance = null;

    /** @var int|null Response field balance */
    public ?int $balance = null;

    /** @var int|null Response field debt */
    public ?int $debt = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\Cpa\CpaError|null Response field error */
    public ?\and_y87\php_client_avito\Generated\Schema\Cpa\CpaError $errorData = null;
}
