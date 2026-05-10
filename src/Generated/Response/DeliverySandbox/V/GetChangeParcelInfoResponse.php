<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Response\DeliverySandbox\V;

use php_client_avito\Generated\Response\V1getChangeParcelInfoResponse as BaseV1getChangeParcelInfoResponse;

/**
 * Ответ Avito API [POST] /delivery-sandbox/v1/getChangeParcelInfo.
 *
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/v1getChangeParcelInfo
 *
 * @property \php_client_avito\Generated\Schema\DeliverySandbox\GetChangeParcelInfoReplyData|null $data Response field data
 * @property \php_client_avito\Generated\Schema\DeliverySandbox\GetChangeParcelInfoError|null $errorData Response field error
 */
class GetChangeParcelInfoResponse extends BaseV1getChangeParcelInfoResponse
{
}
