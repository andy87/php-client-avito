<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [DELETE] /ratings/v1/answers/{answer_id}.
 * 
 * @documentation https://developers.avito.ru/api-catalog/ratings/documentation#operation/removeReviewAnswerV1
 */
class RemoveReviewAnswerV1Prompt extends AbstractPrompt
{
    protected const METHOD = 'DELETE';

    protected const ENDPOINT = '/ratings/v1/answers/{answer_id}';

    protected const CONTENT_TYPE = null;

    protected const AUTHORIZATION_REQUIRED = true;

    protected const FIELD_MAP = [];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const BODY_FIELDS = [];
}
