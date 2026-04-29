<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response\Cpa\Complaint;

use Andy87\ClientsAvito\Generated\Response\CreateComplaintByActionIdResponse as BaseCreateComplaintByActionIdResponse;

/**
 * Ответ Avito API [POST] /cpa/v1/createComplaintByActionId.
 * 
 * @documentation https://developers.avito.ru/api-catalog/cpa/documentation#operation/createComplaintByActionId
 * 
 * @property \Andy87\ClientsAvito\Generated\Schema\Cpa\CpaError|null $errorData Response field error
 * @property bool|null $success Response field success
 */
class CreateByActionIdResponse extends BaseCreateComplaintByActionIdResponse
{
}
