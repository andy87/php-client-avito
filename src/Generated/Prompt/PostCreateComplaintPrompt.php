<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * DTO запроса Avito API postCreateComplaint.
 */
class PostCreateComplaintPrompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/cpa/v1/createComplaint';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const FIELD_MAP = ['callId' => 'callId', 'message' => 'message'];

    protected const REQUIRED_FIELDS = ['callId', 'message'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const BODY_FIELDS = ['callId', 'message'];

    /** @var int Идентификатор звонка */
    public int $callId;

    /** @var string Текст жалобы */
    public string $message;
}
