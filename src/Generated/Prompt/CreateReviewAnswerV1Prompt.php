<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Prompt;

use Andy87\PhpClientSdk\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [POST] /ratings/v1/answers.
 *
 * @documentation https://developers.avito.ru/api-catalog/ratings/documentation#operation/createReviewAnswerV1
 */
class CreateReviewAnswerV1Prompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/ratings/v1/answers';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const QUERY_PARAMETER_STYLES = [];

    protected const FIELD_MAP = ['message' => 'message', 'reviewId' => 'reviewId'];

    protected const REQUIRED_FIELDS = ['message', 'reviewId'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const HEADER_FIELDS = [];

    protected const BODY_FIELDS = ['message', 'reviewId'];

    protected const BODY_ROOT_FIELD = null;

    /** @var string Текст ответа на отзыв */
    public string $message;

    /** @var int ID отзыва */
    public int $reviewId;
}
