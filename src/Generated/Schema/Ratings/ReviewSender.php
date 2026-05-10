<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\Ratings;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito ratings/ReviewSender.
 */
class ReviewSender extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['name' => 'name'];

    protected const REQUIRED_FIELDS = ['name'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Имя отправителя */
    public string $name;
}
