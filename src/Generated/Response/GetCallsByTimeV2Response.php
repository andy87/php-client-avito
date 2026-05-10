<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Response;

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

    protected const CASTS = ['calls' => [\and_y87\php_client_avito\Generated\Schema\Cpa\CallV2::class], 'errorData' => \and_y87\php_client_avito\Generated\Schema\Cpa\CpaError::class];

    protected const MODEL = null;

    /** @var array<int, \and_y87\php_client_avito\Generated\Schema\Cpa\CallV2>|null Response field calls */
    public ?array $calls = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\Cpa\CpaError|null Response field error */
    public ?\and_y87\php_client_avito\Generated\Schema\Cpa\CpaError $errorData = null;
}
