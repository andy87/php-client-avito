<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\Autoteka;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/RequestGetLeads.
 */
class RequestGetLeads extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['lastId' => 'lastId', 'limit' => 'limit', 'subscriptionId' => 'subscriptionId'];

    protected const REQUIRED_FIELDS = ['subscriptionId'];

    protected const NULLABLE_FIELDS = ['lastId', 'limit'];

    protected const CASTS = [];

    /** @var int|null Последний успешно-прочитанный id, указывается для постраничной выдачи */
    public ?int $lastId = null;

    /** @var int|null Количество записей в ответе */
    public ?int $limit = null;

    /** @var int Идентификатор подписки */
    public int $subscriptionId;
}
