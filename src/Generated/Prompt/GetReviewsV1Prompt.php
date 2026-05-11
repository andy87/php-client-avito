<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt;

use and_y87\PhpClientSdk\Request\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [GET] /ratings/v1/reviews.
 *
 * @documentation https://developers.avito.ru/api-catalog/ratings/documentation#operation/getReviewsV1
 */
class GetReviewsV1Prompt extends AbstractPrompt
{
    protected const METHOD = 'GET';

    protected const ENDPOINT = '/ratings/v1/reviews';

    protected const CONTENT_TYPE = null;

    protected const AUTHORIZATION_REQUIRED = true;

    protected const QUERY_PARAMETER_STYLES = ['offset' => ['style' => 'form', 'explode' => true], 'limit' => ['style' => 'form', 'explode' => true]];

    protected const FIELD_MAP = ['offset' => 'offset', 'limit' => 'limit'];

    protected const REQUIRED_FIELDS = ['offset', 'limit'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = ['offset', 'limit'];

    protected const HEADER_FIELDS = [];

    protected const BODY_FIELDS = [];

    protected const BODY_ROOT_FIELD = null;

    /** @var int Смещение */
    public int $offset;

    /** @var int Лимит количества отзывов */
    public int $limit;
}
