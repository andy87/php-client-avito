<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\Autoteka\Preview;

use Andy87\ClientsAvito\Generated\Prompt\PostPreviewByExternalItemPrompt as BasePostPreviewByExternalItemPrompt;

/**
 * Класс данных запроса Avito API [POST] /autoteka/v1/request-preview-by-external-item.
 * 
 * @documentation https://developers.avito.ru/api-catalog/autoteka/documentation#operation/postPreviewByExternalItem
 * 
 * @property string|null $Authorization Токен для авторизации
 * @property string|null $itemId Body field itemId
 * @property string|null $site Body field site
 */
class PostByExternalItemPrompt extends BasePostPreviewByExternalItemPrompt
{
}
