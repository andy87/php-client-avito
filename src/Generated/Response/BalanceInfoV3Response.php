<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response;

use Andy87\ClientsBase\Response\AbstractResponse;

/**
 * DTO ответа Avito API balanceInfoV3.
 */
class BalanceInfoV3Response extends AbstractResponse
{
    protected const FIELD_MAP = ['balance' => 'balance'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const MODEL = null;

    /** @var int|null Response field balance */
    public ?int $balance = null;
}
