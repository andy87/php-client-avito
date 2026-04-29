<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response\DeliverySandbox\V;

use Andy87\ClientsAvito\Generated\Response\V1getParcelInfoResponse as BaseV1getParcelInfoResponse;

/**
 * Ответ Avito API [POST] /delivery-sandbox/v1/getParcelInfo.
 * 
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/v1getParcelInfo
 * 
 * @property \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\GetSandboxParcelInfoReplyData|null $data Response field data
 * @property \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\GetSandboxParcelInfoError|null $errorData Response field error
 */
class GetParcelInfoResponse extends BaseV1getParcelInfoResponse
{
}
