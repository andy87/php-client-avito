<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Response\DeliverySandbox\V;

use php_client_avito\Generated\Response\V1getParcelInfoResponse as BaseV1getParcelInfoResponse;

/**
 * Ответ Avito API [POST] /delivery-sandbox/v1/getParcelInfo.
 *
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/v1getParcelInfo
 *
 * @property \php_client_avito\Generated\Schema\DeliverySandbox\GetSandboxParcelInfoReplyData|null $data Response field data
 * @property \php_client_avito\Generated\Schema\DeliverySandbox\GetSandboxParcelInfoError|null $errorData Response field error
 */
class GetParcelInfoResponse extends BaseV1getParcelInfoResponse
{
}
