<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoteka;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/OtherAutoteka.
 */
class OtherAutoteka extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['status' => 'status', 'text' => 'text', 'type' => 'type'];

    protected const REQUIRED_FIELDS = ['status', 'text', 'type'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Статус `ok`, `warning` */
    public string $status;

    /** @var string Текстовое описание */
    public string $text;

    /** @var string тип события `originalPTS` */
    public string $type;
}
