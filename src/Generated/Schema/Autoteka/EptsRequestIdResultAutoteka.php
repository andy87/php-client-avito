<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoteka;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/EptsRequestIdResultAutoteka.
 */
class EptsRequestIdResultAutoteka extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['requestId' => 'requestId'];

    protected const REQUIRED_FIELDS = ['requestId'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Идентификатор запроса ЭПТС, по которому его можно получить */
    public string $requestId;
}
