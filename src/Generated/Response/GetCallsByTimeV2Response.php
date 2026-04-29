<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response;

use Andy87\ClientsBase\Response\AbstractResponse;

/**
 * Ответ Avito API [POST] /cpa/v2/callsByTime.
 * 
 * @documentation https://developers.avito.ru/api-catalog/cpa/documentation#operation/getCallsByTimeV2
 */
class GetCallsByTimeV2Response extends AbstractResponse
{
    protected const FIELD_MAP = ['calls' => 'calls', 'errorData' => 'error'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['calls' => [\Andy87\ClientsAvito\Generated\Schema\Cpa\CallV2::class], 'errorData' => \Andy87\ClientsAvito\Generated\Schema\Cpa\CpaError::class];

    protected const MODEL = null;

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\Cpa\CallV2>|null Response field calls */
    public ?array $calls = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Cpa\CpaError|null Response field error */
    public ?\Andy87\ClientsAvito\Generated\Schema\Cpa\CpaError $errorData = null;
}
