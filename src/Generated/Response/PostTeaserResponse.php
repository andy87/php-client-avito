<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response;

use Andy87\ClientsBase\Response\AbstractResponse;

/**
 * DTO ответа Avito API postTeaser.
 */
class PostTeaserResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['result' => 'result'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['result' => \Andy87\ClientsAvito\Generated\Schema\Autoteka\CreateTeaserResponseDataAutoteka::class];

    protected const MODEL = \Andy87\ClientsAvito\Generated\Schema\Autoteka\CreateTeaserResponseBodyAutoteka::class;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Autoteka\CreateTeaserResponseDataAutoteka|null Response field result */
    public ?\Andy87\ClientsAvito\Generated\Schema\Autoteka\CreateTeaserResponseDataAutoteka $result = null;
}
