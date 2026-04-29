<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoteka;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/TeaserResponse.
 */
class TeaserResponse extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['data' => 'data', 'status' => 'status', 'teaserId' => 'teaserId'];

    protected const REQUIRED_FIELDS = ['teaserId', 'status', 'data'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['data' => \Andy87\ClientsAvito\Generated\Schema\Autoteka\Teaser::class];

    /** @var \Andy87\ClientsAvito\Generated\Schema\Autoteka\Teaser Schema field data */
    public \Andy87\ClientsAvito\Generated\Schema\Autoteka\Teaser $data;

    /** @var string Статус готовности */
    public string $status;

    /** @var int Идентификатор тизера */
    public int $teaserId;
}
