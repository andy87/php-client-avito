<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\User;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito user/RequestOperationsHistory.
 */
class RequestOperationsHistory extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['dateTimeFrom' => 'dateTimeFrom', 'dateTimeTo' => 'dateTimeTo'];

    protected const REQUIRED_FIELDS = ['dateTimeFrom', 'dateTimeTo'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Время выборки от. Не далее одного года в прошлое от текущего момента. */
    public string $dateTimeFrom;

    /** @var string Время выборки до (диапазон между dateTimeFrom и dateTimeTo должен быть не более одной недели) */
    public string $dateTimeTo;
}
