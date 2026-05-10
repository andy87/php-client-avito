<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt\Cpa\Post;

use and_y87\php_client_avito\Generated\Prompt\PostCreateComplaintPrompt as BasePostCreateComplaintPrompt;

/**
 * Класс данных запроса Avito API [POST] /cpa/v1/createComplaint.
 *
 * @documentation https://developers.avito.ru/api-catalog/cpa/documentation#operation/postCreateComplaint
 *
 * @property string $X_Source Имя сервиса, отправляющего запрос
 * @property int $callId Идентификатор звонка
 * @property string $message Текст жалобы
 */
class CreateComplaintPrompt extends BasePostCreateComplaintPrompt
{
}
