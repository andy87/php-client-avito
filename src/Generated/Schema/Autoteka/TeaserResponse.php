<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\Autoteka;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/TeaserResponse.
 */
class TeaserResponse extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['data' => 'data', 'status' => 'status', 'teaserId' => 'teaserId'];

    protected const REQUIRED_FIELDS = ['teaserId', 'status', 'data'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['data' => \and_y87\php_client_avito\Generated\Schema\Autoteka\Teaser::class];

    /** @var \and_y87\php_client_avito\Generated\Schema\Autoteka\Teaser Schema field data */
    public \and_y87\php_client_avito\Generated\Schema\Autoteka\Teaser $data;

    /** @var string Статус готовности */
    public string $status;

    /** @var int Идентификатор тизера */
    public int $teaserId;
}
