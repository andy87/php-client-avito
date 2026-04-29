<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response;

use Andy87\ClientsBase\Response\AbstractResponse;

/**
 * DTO ответа Avito API postReportByVehicleId.
 */
class PostReportByVehicleIdResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['result' => 'result'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['result' => \Andy87\ClientsAvito\Generated\Schema\Autoteka\CreateReportResponseDataAutoteka::class];

    protected const MODEL = \Andy87\ClientsAvito\Generated\Schema\Autoteka\CreateReportResponseBodyAutoteka::class;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Autoteka\CreateReportResponseDataAutoteka|null Response field result */
    public ?\Andy87\ClientsAvito\Generated\Schema\Autoteka\CreateReportResponseDataAutoteka $result = null;
}
