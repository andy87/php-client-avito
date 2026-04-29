<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [POST] /autoteka/v1/monitoring/bucket/add.
 * 
 * @documentation https://developers.avito.ru/api-catalog/autoteka/documentation#operation/monitoringBucketAdd
 */
class MonitoringBucketAddPrompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/autoteka/v1/monitoring/bucket/add';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const FIELD_MAP = ['data' => 'data'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const BODY_FIELDS = ['data'];

    /** @var array<int, string>|null Набор VIN-номеров для дальнейшего заполнения реестра */
    public ?array $data = null;
}
