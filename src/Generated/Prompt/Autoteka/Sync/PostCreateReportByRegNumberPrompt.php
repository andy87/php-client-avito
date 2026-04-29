<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\Autoteka\Sync;

use Andy87\ClientsAvito\Generated\Prompt\PostSyncCreateReportByRegNumberPrompt as BasePostSyncCreateReportByRegNumberPrompt;

/**
 * Класс данных запроса Avito API [POST] /autoteka/v1/sync/create-by-regnumber.
 * 
 * @documentation https://developers.avito.ru/api-catalog/autoteka/documentation#operation/postSyncCreateReportByRegNumber
 * 
 * @property string|null $Authorization Токен для авторизации
 * @property string $regNumber государственный номер запрашиваемого авто.
 */
class PostCreateReportByRegNumberPrompt extends BasePostSyncCreateReportByRegNumberPrompt
{
}
