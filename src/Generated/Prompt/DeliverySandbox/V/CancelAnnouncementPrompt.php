<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\DeliverySandbox\V;

use Andy87\ClientsAvito\Generated\Prompt\V1cancelAnnouncementPrompt as BaseV1cancelAnnouncementPrompt;

/**
 * Класс данных запроса Avito API [POST] /delivery-sandbox/v1/cancelAnnouncement.
 * 
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/v1cancelAnnouncement
 * 
 * @property string $announcementID Уникальный идентификатор анонса UUID V4.
 * @property string $date Дата события
 * @property \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\SandboxCancelAnnouncementOptions $options Body field options
 */
class CancelAnnouncementPrompt extends BaseV1cancelAnnouncementPrompt
{
}
