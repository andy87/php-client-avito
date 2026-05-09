<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\PhpClientSdk\Prompt\AbstractPrompt;

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

    protected const QUERY_PARAMETER_STYLES = [];

    protected const FIELD_MAP = ['answer_id' => 'answer_id'];

    protected const REQUIRED_FIELDS = ['answer_id'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = ['answer_id'];

    protected const QUERY_FIELDS = [];

    protected const HEADER_FIELDS = [];

    protected const BODY_FIELDS = [];

    protected const BODY_ROOT_FIELD = null;

    /** @var int Идентификатор ответа на отзыв */
    public int $answer_id;
}
