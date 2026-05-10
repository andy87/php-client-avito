<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt;

use and_y87\PhpClientSdk\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [PUT] /core/v2/items/{itemId}/vas/.
 *
 * @documentation https://developers.avito.ru/api-catalog/item/documentation#operation/applyVas
 */
class ApplyVasPrompt extends AbstractPrompt
{
    protected const METHOD = 'PUT';

    protected const ENDPOINT = '/core/v2/items/{itemId}/vas/';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const QUERY_PARAMETER_STYLES = [];

    protected const FIELD_MAP = ['item_id' => 'itemId', 'slugs' => 'slugs', 'stickers' => 'stickers'];

    protected const REQUIRED_FIELDS = ['item_id', 'slugs'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = ['item_id'];

    protected const QUERY_FIELDS = [];

    protected const HEADER_FIELDS = [];

    protected const BODY_FIELDS = ['slugs', 'stickers'];

    protected const BODY_ROOT_FIELD = null;

    /** @var int Идентификатор объявления на сайте */
    public int $item_id;

    /** @var array<int, string> Список идентификаторов услуг */
    public array $slugs;

    /** @var array<int, int>|null Список значков */
    public ?array $stickers = null;
}
