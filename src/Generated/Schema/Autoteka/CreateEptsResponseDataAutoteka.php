<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoteka;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/CreateEptsResponseDataAutoteka.
 */
class CreateEptsResponseDataAutoteka extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['epts' => 'epts'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['epts' => \Andy87\ClientsAvito\Generated\Schema\Autoteka\EptsRequestIdResultAutoteka::class];

    /** @var \Andy87\ClientsAvito\Generated\Schema\Autoteka\EptsRequestIdResultAutoteka|null Schema field epts */
    public ?\Andy87\ClientsAvito\Generated\Schema\Autoteka\EptsRequestIdResultAutoteka $epts = null;
}
