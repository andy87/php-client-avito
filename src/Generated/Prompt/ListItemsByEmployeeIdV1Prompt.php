<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt;

use and_y87\PhpClientSdk\Request\Prompt\AbstractPrompt;

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

    protected const QUERY_PARAMETER_STYLES = [];

    protected const FIELD_MAP = ['X_Oauth_Scopes' => 'X-Oauth-Scopes', 'X_Oauth_Flow' => 'X-Oauth-Flow', 'X_Is_Employee' => 'X-Is-Employee', 'categoryId' => 'categoryId', 'employeeId' => 'employeeId', 'lastItemId' => 'lastItemId'];

    protected const REQUIRED_FIELDS = ['categoryId', 'employeeId'];

    protected const NULLABLE_FIELDS = ['X_Is_Employee', 'lastItemId'];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const HEADER_FIELDS = ['X_Oauth_Scopes', 'X_Oauth_Flow', 'X_Is_Employee'];

    protected const BODY_FIELDS = ['categoryId', 'employeeId', 'lastItemId'];

    protected const BODY_ROOT_FIELD = null;

    /** @var string|null Список зон доступа, полученных приложением */
    public ?string $X_Oauth_Scopes = null;

    /** @var string|null Выбранный флоу авторизации по протоколу OAuth 2.0 (client_credentials/authorization_code) */
    public ?string $X_Oauth_Flow = null;

    /** @var bool|null Список объявлений запрашивается от имени сотрудника. */
    public ?bool $X_Is_Employee = null;

    /** @var int Идентификатор категории объявления */
    public int $categoryId;

    /** @var int Идентификатор сотрудника, к которому прилинкованы объявления */
    public int $employeeId;

    /** @var int|null Идентификатор объявления для пагинации по курсору */
    public ?int $lastItemId = null;
}
