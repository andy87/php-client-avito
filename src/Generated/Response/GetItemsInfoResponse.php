<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response;

use Andy87\ClientsBase\Response\AbstractResponse;

/**
 * DTO ответа Avito API getItemsInfo.
 */
class GetItemsInfoResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['meta' => 'meta', 'resources' => 'resources'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const MODEL = \Andy87\ClientsAvito\Generated\Schema\Item\ItemsInfoWithCategoryAvito::class;

    /** @var array<string, mixed>|null Response field meta */
    public ?array $meta = null;

    /** @var array<int, array<string, mixed>>|null Response field resources */
    public ?array $resources = null;
}
