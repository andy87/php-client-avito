<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\Ratings;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito ratings/ReviewItem.
 */
class ReviewItem extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['id' => 'id', 'title' => 'title'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var int|null ID объявления */
    public ?int $id = null;

    /** @var string|null Заголовок объявления */
    public ?string $title = null;
}
