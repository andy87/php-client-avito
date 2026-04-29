<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\Autoteka\Monitoring;

use Andy87\ClientsAvito\Generated\Prompt\MonitoringBucketRemovePrompt as BaseMonitoringBucketRemovePrompt;

/**
 * Класс данных запроса Avito API [POST] /autoteka/v1/monitoring/bucket/remove.
 * 
 * @documentation https://developers.avito.ru/api-catalog/autoteka/documentation#operation/monitoringBucketRemove
 * 
 * @property array<int, string>|null $data Набор VIN-номеров для дальнейшего заполнения реестра
 */
class BucketRemovePrompt extends BaseMonitoringBucketRemovePrompt
{
}
