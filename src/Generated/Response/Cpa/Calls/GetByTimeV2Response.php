<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Response\Cpa\Calls;

use and_y87\php_client_avito\Generated\Response\GetCallsByTimeV2Response as BaseGetCallsByTimeV2Response;

/**
 * Ответ Avito API [POST] /cpa/v2/callsByTime.
 *
 * @documentation https://developers.avito.ru/api-catalog/cpa/documentation#operation/getCallsByTimeV2
 *
 * @property array<int, \and_y87\php_client_avito\Generated\Schema\Cpa\CallV2>|null $calls Response field calls
 * @property \and_y87\php_client_avito\Generated\Schema\Cpa\CpaError|null $errorData Response field error
 */
class GetByTimeV2Response extends BaseGetCallsByTimeV2Response
{
}
