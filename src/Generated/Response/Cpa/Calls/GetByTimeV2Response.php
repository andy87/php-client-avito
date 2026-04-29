<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response\Cpa\Calls;

use Andy87\ClientsAvito\Generated\Response\GetCallsByTimeV2Response as BaseGetCallsByTimeV2Response;

/**
 * Ответ Avito API [POST] /cpa/v2/callsByTime.
 * 
 * @documentation https://developers.avito.ru/api-catalog/cpa/documentation#operation/getCallsByTimeV2
 * 
 * @property array<int, \Andy87\ClientsAvito\Generated\Schema\Cpa\CallV2>|null $calls Response field calls
 * @property \Andy87\ClientsAvito\Generated\Schema\Cpa\CpaError|null $errorData Response field error
 */
class GetByTimeV2Response extends BaseGetCallsByTimeV2Response
{
}
