<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Ratings;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito ratings/RejectReason.
 */
class RejectReason extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['id' => 'id', 'title' => 'title'];

    protected const REQUIRED_FIELDS = ['id', 'title'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var int ID причины отклонения */
    public int $id;

    /** @var string Заголовок причины отклонения */
    public string $title;
}
