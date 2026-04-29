<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response\Cpa\Call;

use Andy87\ClientsAvito\Generated\Response\GetCallByIdV2Response as BaseGetCallByIdV2Response;

/**
 * Ответ Avito API [POST] /cpa/v2/callById.
 * 
 * @documentation https://developers.avito.ru/api-catalog/cpa/documentation#operation/getCallByIdV2
 * 
 * @property \Andy87\ClientsAvito\Generated\Schema\Cpa\CallV2|null $calls Response field calls
 * @property \Andy87\ClientsAvito\Generated\Schema\Cpa\CpaError|null $errorData Response field error
 */
class GetByIdV2Response extends BaseGetCallByIdV2Response
{
}
