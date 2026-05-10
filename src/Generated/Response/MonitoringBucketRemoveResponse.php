<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Response;

use and_y87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ Avito API [POST] /autoteka/v1/monitoring/bucket/remove.
 *
 * @documentation https://developers.avito.ru/api-catalog/autoteka/documentation#operation/monitoringBucketRemove
 */
class MonitoringBucketRemoveResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['result' => 'result'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const MODEL = \and_y87\php_client_avito\Generated\Schema\Autoteka\ResponseMonitoringRemoveVinBucket::class;

    /** @var array<string, mixed>|null Response field result */
    public ?array $result = null;
}
