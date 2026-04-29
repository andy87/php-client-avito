<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response;

use Andy87\ClientsBase\Response\AbstractResponse;

/**
 * Ответ Avito API [POST] /cpa/v2/callById.
 * 
 * @documentation https://developers.avito.ru/api-catalog/cpa/documentation#operation/getCallByIdV2
 */
class GetCallByIdV2Response extends AbstractResponse
{
    protected const FIELD_MAP = ['calls' => 'calls', 'errorData' => 'error'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['calls' => \Andy87\ClientsAvito\Generated\Schema\Cpa\CallV2::class, 'errorData' => \Andy87\ClientsAvito\Generated\Schema\Cpa\CpaError::class];

    protected const MODEL = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Cpa\CallV2|null Response field calls */
    public ?\Andy87\ClientsAvito\Generated\Schema\Cpa\CallV2 $calls = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Cpa\CpaError|null Response field error */
    public ?\Andy87\ClientsAvito\Generated\Schema\Cpa\CpaError $errorData = null;
}
