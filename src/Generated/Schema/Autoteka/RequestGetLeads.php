<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoteka;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

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
