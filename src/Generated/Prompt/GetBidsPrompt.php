<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt;

use Andy87\PhpClientSdk\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [GET] /cpxpromo/1/getBids/{itemId}.
 *
 * @documentation https://developers.avito.ru/api-catalog/cpxpromo/documentation#operation/getBids
 */
class GetBidsPrompt extends AbstractPrompt
{
    protected const METHOD = 'GET';

    protected const ENDPOINT = '/cpxpromo/1/getBids/{itemId}';

    protected const CONTENT_TYPE = null;

    protected const AUTHORIZATION_REQUIRED = true;

    protected const QUERY_PARAMETER_STYLES = [];

    protected const FIELD_MAP = ['itemId' => 'itemId'];

    protected const REQUIRED_FIELDS = ['itemId'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = ['itemId'];

    protected const QUERY_FIELDS = [];

    protected const HEADER_FIELDS = [];

    protected const BODY_FIELDS = [];

    protected const BODY_ROOT_FIELD = null;

    /** @var int path-parameter itemId */
    public int $itemId;
}
