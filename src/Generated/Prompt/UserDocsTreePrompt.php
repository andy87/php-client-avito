<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [GET] /autoload/v1/user-docs/tree.
 * 
 * @documentation https://developers.avito.ru/api-catalog/autoload/documentation#operation/userDocsTree
 */
class UserDocsTreePrompt extends AbstractPrompt
{
    protected const METHOD = 'GET';

    protected const ENDPOINT = '/autoload/v1/user-docs/tree';

    protected const CONTENT_TYPE = null;

    protected const AUTHORIZATION_REQUIRED = false;

    protected const FIELD_MAP = [];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const BODY_FIELDS = [];
}
