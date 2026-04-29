<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Ratings;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito ratings/CreateAnswerResponse.
 */
class CreateAnswerResponse extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['createdAt' => 'createdAt', 'id' => 'id'];

    protected const REQUIRED_FIELDS = ['id', 'createdAt'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var int Timestamp создания ответа */
    public int $createdAt;

    /** @var int ID ответа */
    public int $id;
}
