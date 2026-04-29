<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [POST] /linkItemsV1.
 * 
 * @documentation https://developers.avito.ru/api-catalog/accounts-hierarchy/documentation#operation/linkItemsV1
 */
class LinkItemsV1Prompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/linkItemsV1';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const FIELD_MAP = ['employeeId' => 'employeeId', 'itemIds' => 'itemIds'];

    protected const REQUIRED_FIELDS = ['employeeId', 'itemIds'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const BODY_FIELDS = ['employeeId', 'itemIds'];

    /** @var int Идентификатор сотрудника, к которому прилинкуются объявления */
    public int $employeeId;

    /** @var array<int, int> Список идентификаторов объявлений для линковки (max 50) */
    public array $itemIds;
}
