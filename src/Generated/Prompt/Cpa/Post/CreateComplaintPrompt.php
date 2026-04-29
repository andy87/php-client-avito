<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\Cpa\Post;

use Andy87\ClientsAvito\Generated\Prompt\PostCreateComplaintPrompt as BasePostCreateComplaintPrompt;

/**
 * Класс данных запроса Avito API [POST] /cpa/v1/createComplaint.
 * 
 * @documentation https://developers.avito.ru/api-catalog/cpa/documentation#operation/postCreateComplaint
 * 
 * @property int $callId Идентификатор звонка
 * @property string $message Текст жалобы
 */
class CreateComplaintPrompt extends BasePostCreateComplaintPrompt
{
}
