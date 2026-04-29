<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response;

use Andy87\ClientsBase\Response\AbstractResponse;

/**
 * DTO ответа Avito API getReportsV2.
 */
class GetReportsV2Response extends AbstractResponse
{
    protected const FIELD_MAP = ['meta' => 'meta', 'reports' => 'reports'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['meta' => \Andy87\ClientsAvito\Generated\Schema\Autoload\MetaReportsAutoloadV2::class, 'reports' => \Andy87\ClientsAvito\Generated\Schema\Autoload\ReportShortAutoloadV2::class];

    protected const MODEL = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Autoload\MetaReportsAutoloadV2|null Response field meta */
    public ?\Andy87\ClientsAvito\Generated\Schema\Autoload\MetaReportsAutoloadV2 $meta = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Autoload\ReportShortAutoloadV2|null Response field reports */
    public ?\Andy87\ClientsAvito\Generated\Schema\Autoload\ReportShortAutoloadV2 $reports = null;
}
