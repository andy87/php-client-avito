<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt;

use and_y87\PhpClientSdk\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [GET] /listCompanyPhonesV1.
 *
 * @documentation https://developers.avito.ru/api-catalog/accounts-hierarchy/documentation#operation/listCompanyPhonesV1
 */
class ListCompanyPhonesV1Prompt extends AbstractPrompt
{
    protected const METHOD = 'GET';

    protected const ENDPOINT = '/listCompanyPhonesV1';

    protected const CONTENT_TYPE = null;

    protected const AUTHORIZATION_REQUIRED = true;

    protected const QUERY_PARAMETER_STYLES = [];

    protected const FIELD_MAP = ['X_Oauth_Scopes' => 'X-Oauth-Scopes', 'X_Oauth_Flow' => 'X-Oauth-Flow'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const HEADER_FIELDS = ['X_Oauth_Scopes', 'X_Oauth_Flow'];

    protected const BODY_FIELDS = [];

    protected const BODY_ROOT_FIELD = null;

    /** @var string|null Список зон доступа, полученных приложением */
    public ?string $X_Oauth_Scopes = null;

    /** @var string|null Выбранный флоу авторизации по протоколу OAuth 2.0 (client_credentials/authorization_code) */
    public ?string $X_Oauth_Flow = null;
}
