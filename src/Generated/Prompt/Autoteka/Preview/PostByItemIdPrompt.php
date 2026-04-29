<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\Autoteka\Preview;

use Andy87\ClientsAvito\Generated\Prompt\PostPreviewByItemIdPrompt as BasePostPreviewByItemIdPrompt;

/**
 * Класс данных запроса Avito API [POST] /autoteka/v1/request-preview-by-item-id.
 * 
 * @documentation https://developers.avito.ru/api-catalog/autoteka/documentation#operation/postPreviewByItemId
 * 
 * @property string|null $Authorization Токен для авторизации
 * @property int $itemId Идентификатор объявления на сайте.
 */
class PostByItemIdPrompt extends BasePostPreviewByItemIdPrompt
{
}
