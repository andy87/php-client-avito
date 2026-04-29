<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\Autoteka\Report;

use Andy87\ClientsAvito\Generated\Prompt\PostReportPrompt as BasePostReportPrompt;

/**
 * Класс данных запроса Avito API [POST] /autoteka/v1/reports.
 * 
 * @documentation https://developers.avito.ru/api-catalog/autoteka/documentation#operation/postReport
 * 
 * @property string|null $Authorization Токен для авторизации
 * @property int $previewId Идентификатор превью.
 */
class PostPrompt extends BasePostReportPrompt
{
}
