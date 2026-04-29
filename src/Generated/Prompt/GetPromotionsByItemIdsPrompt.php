<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * DTO запроса Avito API getPromotionsByItemIds.
 */
class GetPromotionsByItemIdsPrompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/cpxpromo/1/getPromotionsByItemIds';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const FIELD_MAP = ['Authorization' => 'Authorization', 'itemIDs' => 'itemIDs'];

    protected const REQUIRED_FIELDS = ['Authorization', 'itemIDs'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const BODY_FIELDS = ['itemIDs'];

    /** @var string Токен для авторизации */
    public string $Authorization;

    /** @var array<int, int> Body field itemIDs */
    public array $itemIDs;
}
