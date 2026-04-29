<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * DTO запроса Avito API CreateReportForClassified.
 */
class CreateReportForClassifiedPrompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/realty/v1/report/create/{itemId}';

    protected const CONTENT_TYPE = null;

    protected const AUTHORIZATION_REQUIRED = true;

    protected const FIELD_MAP = ['itemId' => 'itemId'];

    protected const REQUIRED_FIELDS = ['itemId'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = ['itemId'];

    protected const QUERY_FIELDS = [];

    protected const BODY_FIELDS = [];

    /** @var int Идентификатор объявления */
    public int $itemId;
}
