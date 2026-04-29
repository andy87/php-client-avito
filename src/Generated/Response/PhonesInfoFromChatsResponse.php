<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response;

use Andy87\ClientsBase\Response\AbstractResponse;

/**
 * DTO ответа Avito API phonesInfoFromChats.
 */
class PhonesInfoFromChatsResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['results' => 'results', 'total' => 'total'];

    protected const REQUIRED_FIELDS = ['total', 'results'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['results' => [\Andy87\ClientsAvito\Generated\Schema\Cpa\OpenAPIPhonesInfoFromChatsOut::class]];

    protected const MODEL = null;

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\Cpa\OpenAPIPhonesInfoFromChatsOut> Response field results */
    public array $results;

    /** @var int Число найденных чатов */
    public int $total;
}
