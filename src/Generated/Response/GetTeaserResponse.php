<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Response;

use Andy87\PhpClientSdk\Response\AbstractResponse;

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

    protected const CASTS = ['data' => \php_client_avito\Generated\Schema\Autoteka\Teaser::class];

    protected const MODEL = \php_client_avito\Generated\Schema\Autoteka\TeaserResponse::class;

    /** @var \php_client_avito\Generated\Schema\Autoteka\Teaser Response field data */
    public \php_client_avito\Generated\Schema\Autoteka\Teaser $data;

    /** @var string Статус готовности */
    public string $status;

    /** @var int Идентификатор тизера */
    public int $teaserId;
}
