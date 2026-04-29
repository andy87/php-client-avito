<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [GET] /getEmployeesV1.
 * 
 * @documentation https://developers.avito.ru/api-catalog/accounts-hierarchy/documentation#operation/getEmployeesV1
 */
class GetEmployeesV1Prompt extends AbstractPrompt
{
    protected const METHOD = 'GET';

    protected const ENDPOINT = '/getEmployeesV1';

    protected const CONTENT_TYPE = null;

    protected const AUTHORIZATION_REQUIRED = true;

    protected const FIELD_MAP = [];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const BODY_FIELDS = [];
}
