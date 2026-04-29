<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response;

use Andy87\ClientsBase\Response\AbstractResponse;

/**
 * DTO ответа Avito API getLeads.
 */
class GetLeadsResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['pagination' => 'pagination', 'result' => 'result'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const MODEL = \Andy87\ClientsAvito\Generated\Schema\Autoteka\ResponseGetLeads::class;

    /** @var array<string, mixed>|null Response field pagination */
    public ?array $pagination = null;

    /** @var array<int, array<string, mixed>>|null Response field result */
    public ?array $result = null;
}
