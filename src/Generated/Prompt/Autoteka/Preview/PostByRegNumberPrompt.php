<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\Autoteka\Preview;

use Andy87\ClientsAvito\Generated\Prompt\PostPreviewByRegNumberPrompt as BasePostPreviewByRegNumberPrompt;

/**
 * Класс данных запроса Avito API [POST] /autoteka/v1/request-preview-by-regnumber.
 * 
 * @documentation https://developers.avito.ru/api-catalog/autoteka/documentation#operation/postPreviewByRegNumber
 * 
 * @property string|null $Authorization Токен для авторизации
 * @property string $regNumber государственный номер запрашиваемого авто.
 */
class PostByRegNumberPrompt extends BasePostPreviewByRegNumberPrompt
{
}
