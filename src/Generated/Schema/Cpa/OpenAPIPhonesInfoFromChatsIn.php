<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\Cpa;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito cpa/OpenAPIPhonesInfoFromChatsIn.
 */
class OpenAPIPhonesInfoFromChatsIn extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['dateTimeFrom' => 'dateTimeFrom', 'limit' => 'limit', 'offset' => 'offset'];

    protected const REQUIRED_FIELDS = ['dateTimeFrom', 'offset', 'limit'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Время с которого начинается поиск */
    public string $dateTimeFrom;

    /** @var int Schema field limit */
    public int $limit;

    /** @var int Schema field offset */
    public int $offset;
}
