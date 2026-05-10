<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Response;

use Andy87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ Avito API [POST] /autoteka/v1/request-preview-by-item-id.
 *
 * @documentation https://developers.avito.ru/api-catalog/autoteka/documentation#operation/postPreviewByItemId
 */
class PostPreviewByItemIdResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['result' => 'result'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['result' => \php_client_avito\Generated\Schema\Autoteka\RequestPreviewResponseDataAutoteka::class];

    protected const MODEL = \php_client_avito\Generated\Schema\Autoteka\RequestPreviewResponseBodyAutoteka::class;

    /** @var \php_client_avito\Generated\Schema\Autoteka\RequestPreviewResponseDataAutoteka|null Response field result */
    public ?\php_client_avito\Generated\Schema\Autoteka\RequestPreviewResponseDataAutoteka $result = null;
}
