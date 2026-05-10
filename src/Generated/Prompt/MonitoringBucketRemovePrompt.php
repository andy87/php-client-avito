<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Prompt;

use Andy87\PhpClientSdk\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [POST] /autoteka/v1/monitoring/bucket/remove.
 *
 * @documentation https://developers.avito.ru/api-catalog/autoteka/documentation#operation/monitoringBucketRemove
 */
class MonitoringBucketRemovePrompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/autoteka/v1/monitoring/bucket/remove';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const QUERY_PARAMETER_STYLES = [];

    protected const FIELD_MAP = ['data' => 'data'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const HEADER_FIELDS = [];

    protected const BODY_FIELDS = ['data'];

    protected const BODY_ROOT_FIELD = null;

    /** @var array<int, string>|null Набор VIN-номеров для дальнейшего заполнения реестра */
    public ?array $data = null;
}
