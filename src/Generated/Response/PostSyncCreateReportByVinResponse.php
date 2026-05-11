<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Response;

use and_y87\PhpClientSdk\Response\Model\AbstractResponse;

/**
 * Ответ Avito API [POST] /autoteka/v1/sync/create-by-vin.
 *
 * @documentation https://developers.avito.ru/api-catalog/autoteka/documentation#operation/postSyncCreateReportByVin
 */
class PostSyncCreateReportByVinResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['result' => 'result'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['result' => \and_y87\php_client_avito\Generated\Schema\Autoteka\GetReportResult::class];

    protected const MODEL = \and_y87\php_client_avito\Generated\Schema\Autoteka\GetReport::class;

    /** @var \and_y87\php_client_avito\Generated\Schema\Autoteka\GetReportResult|null Response field result */
    public ?\and_y87\php_client_avito\Generated\Schema\Autoteka\GetReportResult $result = null;
}
