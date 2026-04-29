<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * DTO запроса Avito API api_trx_promo_open_api_cancel.
 */
class ApiTrxPromoOpenApiCancelPrompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/trx-promo/1/cancel';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const FIELD_MAP = ['x_oauth_scopes' => 'x-oauth-scopes', 'x_oauth_flow' => 'x-oauth-flow', 'x_authenticated_userid' => 'x-authenticated-userid', 'itemIDs' => 'itemIDs'];

    protected const REQUIRED_FIELDS = ['x_oauth_flow', 'x_authenticated_userid', 'itemIDs'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const BODY_FIELDS = ['itemIDs'];

    /** @var string|null Список зон доступа */
    public ?string $x_oauth_scopes = null;

    /** @var string Выбранный флоу авторизации по протоколу OAuth 2.0 */
    public string $x_oauth_flow;

    /** @var string Avito-ID пользователя */
    public string $x_authenticated_userid;

    /** @var array<int, int> Body field itemIDs */
    public array $itemIDs;
}
