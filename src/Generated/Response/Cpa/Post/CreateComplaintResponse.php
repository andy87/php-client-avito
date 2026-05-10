<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Response\Cpa\Post;

use and_y87\php_client_avito\Generated\Response\PostCreateComplaintResponse as BasePostCreateComplaintResponse;

/**
 * Ответ Avito API [POST] /cpa/v1/createComplaint.
 *
 * @documentation https://developers.avito.ru/api-catalog/cpa/documentation#operation/postCreateComplaint
 *
 * @property \and_y87\php_client_avito\Generated\Schema\Cpa\CpaError|null $errorData Response field error
 * @property bool|null $success Response field success
 */
class CreateComplaintResponse extends BasePostCreateComplaintResponse
{
}
