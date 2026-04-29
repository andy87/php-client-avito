<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * DTO запроса Avito API applyVas.
 */
class ApplyVasPrompt extends AbstractPrompt
{
    protected const METHOD = 'PUT';

    protected const ENDPOINT = '/core/v2/items/{itemId}/vas/';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const FIELD_MAP = ['slugs' => 'slugs', 'stickers' => 'stickers'];

    protected const REQUIRED_FIELDS = ['slugs'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const BODY_FIELDS = ['slugs', 'stickers'];

    /** @var array<int, string> Список идентификаторов услуг */
    public array $slugs;

    /** @var array<int, int>|null Список значков */
    public ?array $stickers = null;
}
