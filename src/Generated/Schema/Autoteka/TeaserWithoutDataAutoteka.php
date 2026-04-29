<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoteka;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/TeaserWithoutDataAutoteka.
 */
class TeaserWithoutDataAutoteka extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['status' => 'status', 'teaserId' => 'teaserId'];

    protected const REQUIRED_FIELDS = ['teaserId', 'status'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Текущий статус генерации тизера */
    public string $status;

    /** @var int Идентификатор сгенерированного тизера, по которому его можно получить */
    public int $teaserId;
}
