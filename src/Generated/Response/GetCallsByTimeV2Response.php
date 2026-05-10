<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Response;

use Andy87\PhpClientSdk\Response\AbstractResponse;

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

    protected const CASTS = ['calls' => [\php_client_avito\Generated\Schema\Cpa\CallV2::class], 'errorData' => \php_client_avito\Generated\Schema\Cpa\CpaError::class];

    protected const MODEL = null;

    /** @var array<int, \php_client_avito\Generated\Schema\Cpa\CallV2>|null Response field calls */
    public ?array $calls = null;

    /** @var \php_client_avito\Generated\Schema\Cpa\CpaError|null Response field error */
    public ?\php_client_avito\Generated\Schema\Cpa\CpaError $errorData = null;
}
