<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Prompt;

use Andy87\PhpClientSdk\Prompt\AbstractPrompt;

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

    protected const QUERY_PARAMETER_STYLES = [];

    protected const FIELD_MAP = ['X_Oauth_Scopes' => 'X-Oauth-Scopes', 'X_Oauth_Flow' => 'X-Oauth-Flow', 'employeeId' => 'employeeId', 'itemIds' => 'itemIds'];

    protected const REQUIRED_FIELDS = ['employeeId', 'itemIds'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const HEADER_FIELDS = ['X_Oauth_Scopes', 'X_Oauth_Flow'];

    protected const BODY_FIELDS = ['employeeId', 'itemIds'];

    protected const BODY_ROOT_FIELD = null;

    /** @var string|null Список зон доступа, полученных приложением */
    public ?string $X_Oauth_Scopes = null;

    /** @var string|null Выбранный флоу авторизации по протоколу OAuth 2.0 (client_credentials/authorization_code) */
    public ?string $X_Oauth_Flow = null;

    /** @var int Идентификатор сотрудника, к которому прилинкуются объявления */
    public int $employeeId;

    /** @var array<int, int> Список идентификаторов объявлений для линковки (max 50) */
    public array $itemIds;
}
