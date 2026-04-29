<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoteka;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/RequestPreviewByItemIdAutoteka.
 */
class RequestPreviewByItemIdAutoteka extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['itemId' => 'itemId'];

    protected const REQUIRED_FIELDS = ['itemId'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var int Идентификатор объявления на сайте. */
    public int $itemId;
}
