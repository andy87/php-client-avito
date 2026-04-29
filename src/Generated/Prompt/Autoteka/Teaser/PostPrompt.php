<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\Autoteka\Teaser;

use Andy87\ClientsAvito\Generated\Prompt\PostTeaserPrompt as BasePostTeaserPrompt;

/**
 * Класс данных запроса Avito API [POST] /autoteka/v1/teasers.
 * 
 * @documentation https://developers.avito.ru/api-catalog/autoteka/documentation#operation/postTeaser
 * 
 * @property string|null $Authorization Токен для авторизации
 * @property string $vehicleId Идентификатор запрашиваемого авто (vin/frame).
 */
class PostPrompt extends BasePostTeaserPrompt
{
}
