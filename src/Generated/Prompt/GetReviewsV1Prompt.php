<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * DTO запроса Avito API getReviewsV1.
 */
class GetReviewsV1Prompt extends AbstractPrompt
{
    protected const METHOD = 'GET';

    protected const ENDPOINT = '/ratings/v1/reviews';

    protected const CONTENT_TYPE = null;

    protected const AUTHORIZATION_REQUIRED = true;

    protected const FIELD_MAP = ['offset' => 'offset', 'limit' => 'limit'];

    protected const REQUIRED_FIELDS = ['offset', 'limit'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = ['offset', 'limit'];

    protected const BODY_FIELDS = [];

    /** @var int Смещение */
    public int $offset;

    /** @var int Лимит количества отзывов */
    public int $limit;
}
