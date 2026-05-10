<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Response\DeliverySandbox\V;

use php_client_avito\Generated\Response\V1changeParcelResponse as BaseV1changeParcelResponse;

/**
 * Ответ Avito API [POST] /delivery-sandbox/v1/changeParcel.
 *
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/v1changeParcel
 *
 * @property \php_client_avito\Generated\Schema\DeliverySandbox\ChangeParcelReplyData|null $data Response field data
 * @property \php_client_avito\Generated\Schema\DeliverySandbox\ChangeParcelError|null $errorData Response field error
 */
class ChangeParcelResponse extends BaseV1changeParcelResponse
{
}
