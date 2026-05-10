<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Response\Cpa\Complaint;

use and_y87\php_client_avito\Generated\Response\CreateComplaintByActionIdResponse as BaseCreateComplaintByActionIdResponse;

/**
 * Ответ Avito API [POST] /cpa/v1/createComplaintByActionId.
 *
 * @documentation https://developers.avito.ru/api-catalog/cpa/documentation#operation/createComplaintByActionId
 *
 * @property \and_y87\php_client_avito\Generated\Schema\Cpa\CpaError|null $errorData Response field error
 * @property bool|null $success Response field success
 */
class CreateByActionIdResponse extends BaseCreateComplaintByActionIdResponse
{
}
