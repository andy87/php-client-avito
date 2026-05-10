<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Response\Cpa\Calls;

use php_client_avito\Generated\Response\GetCallsByTimeV2Response as BaseGetCallsByTimeV2Response;

/**
 * Ответ Avito API [POST] /cpa/v2/callsByTime.
 *
 * @documentation https://developers.avito.ru/api-catalog/cpa/documentation#operation/getCallsByTimeV2
 *
 * @property array<int, \php_client_avito\Generated\Schema\Cpa\CallV2>|null $calls Response field calls
 * @property \php_client_avito\Generated\Schema\Cpa\CpaError|null $errorData Response field error
 */
class GetByTimeV2Response extends BaseGetCallsByTimeV2Response
{
}
