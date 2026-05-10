<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Response;

use and_y87\PhpClientSdk\Response\AbstractResponse;

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

    protected const CASTS = ['data' => \and_y87\php_client_avito\Generated\Schema\Autoteka\Teaser::class];

    protected const MODEL = \and_y87\php_client_avito\Generated\Schema\Autoteka\TeaserResponse::class;

    /** @var \and_y87\php_client_avito\Generated\Schema\Autoteka\Teaser Response field data */
    public \and_y87\php_client_avito\Generated\Schema\Autoteka\Teaser $data;

    /** @var string Статус готовности */
    public string $status;

    /** @var int Идентификатор тизера */
    public int $teaserId;
}
