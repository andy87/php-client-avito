<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response;

use Andy87\ClientsBase\Response\AbstractResponse;

/**
 * DTO ответа Avito API itemStatsShallow.
 */
class ItemStatsShallowResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['errors' => 'errors', 'result' => 'result'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const MODEL = \Andy87\ClientsAvito\Generated\Schema\Item\StatisticsResponse::class;

    /** @var array<string, mixed>|null Response field errors */
    public ?array $errors = null;

    /** @var array<string, mixed>|null Статистические счетчики объявления */
    public ?array $result = null;
}
