<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\Autoteka;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/CreateEptsResponseDataAutoteka.
 */
class CreateEptsResponseDataAutoteka extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['epts' => 'epts'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['epts' => \and_y87\php_client_avito\Generated\Schema\Autoteka\EptsRequestIdResultAutoteka::class];

    /** @var \and_y87\php_client_avito\Generated\Schema\Autoteka\EptsRequestIdResultAutoteka|null Schema field epts */
    public ?\and_y87\php_client_avito\Generated\Schema\Autoteka\EptsRequestIdResultAutoteka $epts = null;
}
