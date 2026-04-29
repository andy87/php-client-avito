<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response;

use Andy87\ClientsBase\Response\AbstractResponse;

/**
 * DTO ответа Avito API getAvitoIdsByAdIds.
 */
class GetAvitoIdsByAdIdsResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['items' => 'items'];

    protected const REQUIRED_FIELDS = ['items'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const MODEL = null;

    /** @var array<int, array<string, mixed>> Список связанных идентификаторов (ID) объявлений из файла с идентификаторами (ID) на Авито */
    public array $items;
}
