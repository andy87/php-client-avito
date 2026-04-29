<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response;

use Andy87\ClientsBase\Response\AbstractResponse;

/**
 * DTO ответа Avito API chatRead.
 */
class ChatReadResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['ok' => 'ok'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const MODEL = null;

    /** @var bool|null Response field ok */
    public ?bool $ok = null;
}
