<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoteka;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/EptsAutoteka.
 */
class EptsAutoteka extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['data' => 'data', 'requestId' => 'requestId', 'success' => 'success'];

    protected const REQUIRED_FIELDS = ['requestId', 'success'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['data' => \Andy87\ClientsAvito\Generated\Schema\Autoteka\EptsDataAutoteka::class];

    /** @var \Andy87\ClientsAvito\Generated\Schema\Autoteka\EptsDataAutoteka|null Schema field data */
    public ?\Andy87\ClientsAvito\Generated\Schema\Autoteka\EptsDataAutoteka $data = null;

    /** @var string Идентификатор запроса ЭПТС, по которому его можно получить */
    public string $requestId;

    /** @var bool Признак успешности получения данных. В случае false нужно повторно перезапросить данные */
    public bool $success;
}
