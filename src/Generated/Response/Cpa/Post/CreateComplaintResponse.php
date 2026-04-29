<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response\Cpa\Post;

use Andy87\ClientsAvito\Generated\Response\PostCreateComplaintResponse as BasePostCreateComplaintResponse;

/**
 * Ответ Avito API [POST] /cpa/v1/createComplaint.
 * 
 * @documentation https://developers.avito.ru/api-catalog/cpa/documentation#operation/postCreateComplaint
 * 
 * @property \Andy87\ClientsAvito\Generated\Schema\Cpa\CpaError|null $errorData Response field error
 * @property bool|null $success Response field success
 */
class CreateComplaintResponse extends BasePostCreateComplaintResponse
{
}
