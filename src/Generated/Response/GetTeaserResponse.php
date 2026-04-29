<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response;

use Andy87\ClientsBase\Response\AbstractResponse;

/**
 * Ответ Avito API [GET] /autoteka/v1/teasers/{teaser_id}.
 * 
 * @documentation https://developers.avito.ru/api-catalog/autoteka/documentation#operation/getTeaser
 */
class GetTeaserResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['data' => 'data', 'status' => 'status', 'teaserId' => 'teaserId'];

    protected const REQUIRED_FIELDS = ['teaserId', 'status', 'data'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['data' => \Andy87\ClientsAvito\Generated\Schema\Autoteka\Teaser::class];

    protected const MODEL = \Andy87\ClientsAvito\Generated\Schema\Autoteka\TeaserResponse::class;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Autoteka\Teaser Response field data */
    public \Andy87\ClientsAvito\Generated\Schema\Autoteka\Teaser $data;

    /** @var string Статус готовности */
    public string $status;

    /** @var int Идентификатор тизера */
    public int $teaserId;
}
