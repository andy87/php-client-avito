<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [POST] /listItemsByEmployeeIdV1.
 * 
 * @documentation https://developers.avito.ru/api-catalog/accounts-hierarchy/documentation#operation/listItemsByEmployeeIdV1
 */
class ListItemsByEmployeeIdV1Prompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/listItemsByEmployeeIdV1';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const FIELD_MAP = ['categoryId' => 'categoryId', 'employeeId' => 'employeeId', 'lastItemId' => 'lastItemId'];

    protected const REQUIRED_FIELDS = ['categoryId', 'employeeId'];

    protected const NULLABLE_FIELDS = ['lastItemId'];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const BODY_FIELDS = ['categoryId', 'employeeId', 'lastItemId'];

    /** @var int Идентификатор категории объявления */
    public int $categoryId;

    /** @var int Идентификатор сотрудника, к которому прилинкованы объявления */
    public int $employeeId;

    /** @var int|null Идентификатор объявления для пагинации по курсору */
    public ?int $lastItemId = null;
}
