<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Response;

use Andy87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ Avito API [GET] /autoload/v2/reports.
 *
 * @documentation https://developers.avito.ru/api-catalog/autoload/documentation#operation/getReportsV2
 */
class GetReportsV2Response extends AbstractResponse
{
    protected const FIELD_MAP = ['meta' => 'meta', 'reports' => 'reports'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['meta' => \php_client_avito\Generated\Schema\Autoload\MetaReportsAutoloadV2::class, 'reports' => \php_client_avito\Generated\Schema\Autoload\ReportShortAutoloadV2::class];

    protected const MODEL = null;

    /** @var \php_client_avito\Generated\Schema\Autoload\MetaReportsAutoloadV2|null Response field meta */
    public ?\php_client_avito\Generated\Schema\Autoload\MetaReportsAutoloadV2 $meta = null;

    /** @var \php_client_avito\Generated\Schema\Autoload\ReportShortAutoloadV2|null Response field reports */
    public ?\php_client_avito\Generated\Schema\Autoload\ReportShortAutoloadV2 $reports = null;
}
