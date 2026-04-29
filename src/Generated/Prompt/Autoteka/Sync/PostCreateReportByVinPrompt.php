<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\Autoteka\Sync;

use Andy87\ClientsAvito\Generated\Prompt\PostSyncCreateReportByVinPrompt as BasePostSyncCreateReportByVinPrompt;

/**
 * Класс данных запроса Avito API [POST] /autoteka/v1/sync/create-by-vin.
 * 
 * @documentation https://developers.avito.ru/api-catalog/autoteka/documentation#operation/postSyncCreateReportByVin
 * 
 * @property string|null $Authorization Токен для авторизации
 * @property string $vin VIN или номер кузова запрашиваемого авто.
 */
class PostCreateReportByVinPrompt extends BasePostSyncCreateReportByVinPrompt
{
}
