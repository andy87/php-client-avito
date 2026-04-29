<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Ratings;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito ratings/CreateAnswerRequestBody.
 */
class CreateAnswerRequestBody extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['message' => 'message', 'reviewId' => 'reviewId'];

    protected const REQUIRED_FIELDS = ['reviewId', 'message'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Текст ответа на отзыв */
    public string $message;

    /** @var int ID отзыва */
    public int $reviewId;
}
