<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response\DeliverySandbox\V;

use Andy87\ClientsAvito\Generated\Response\V1changeParcelResponse as BaseV1changeParcelResponse;

/**
 * Ответ Avito API [POST] /delivery-sandbox/v1/changeParcel.
 * 
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/v1changeParcel
 * 
 * @property \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\ChangeParcelReplyData|null $data Response field data
 * @property \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\ChangeParcelError|null $errorData Response field error
 */
class ChangeParcelResponse extends BaseV1changeParcelResponse
{
}
