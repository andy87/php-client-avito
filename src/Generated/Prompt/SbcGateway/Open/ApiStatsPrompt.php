<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt\SbcGateway\Open;

use and_y87\php_client_avito\Generated\Prompt\OpenApiStatsPrompt as BaseOpenApiStatsPrompt;

/**
 * Класс данных запроса Avito API [POST] /special-offers/v1/stats.
 *
 * @documentation https://developers.avito.ru/api-catalog/sbc-gateway/documentation#operation/openApiStats
 *
 * @property string $dateTimeFrom Время выборки От. RFC3339
 * @property string $dateTimeTo Время выборки До. RFC3339
 */
class ApiStatsPrompt extends BaseOpenApiStatsPrompt
{
}
