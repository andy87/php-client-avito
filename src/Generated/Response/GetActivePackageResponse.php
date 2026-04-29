<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response;

use Andy87\ClientsBase\Response\AbstractResponse;

/**
 * DTO ответа Avito API getActivePackage.
 */
class GetActivePackageResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['result' => 'result'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['result' => \Andy87\ClientsAvito\Generated\Schema\Autoteka\GetActivePackageResponseDataAutoteka::class];

    protected const MODEL = \Andy87\ClientsAvito\Generated\Schema\Autoteka\GetActivePackageResponseBodyAutoteka::class;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Autoteka\GetActivePackageResponseDataAutoteka|null Response field result */
    public ?\Andy87\ClientsAvito\Generated\Schema\Autoteka\GetActivePackageResponseDataAutoteka $result = null;
}
