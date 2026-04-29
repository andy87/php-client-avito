<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\Autoteka\Preview;

use Andy87\ClientsAvito\Generated\Prompt\PostPreviewByVinPrompt as BasePostPreviewByVinPrompt;

/**
 * Класс данных запроса Avito API [POST] /autoteka/v1/previews.
 * 
 * @documentation https://developers.avito.ru/api-catalog/autoteka/documentation#operation/postPreviewByVin
 * 
 * @property string|null $Authorization Токен для авторизации
 * @property string $vin VIN или номер кузова запрашиваемого авто.
 */
class PostByVinPrompt extends BasePostPreviewByVinPrompt
{
}
