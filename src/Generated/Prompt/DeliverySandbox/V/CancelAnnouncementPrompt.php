<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Prompt\DeliverySandbox\V;

use php_client_avito\Generated\Prompt\V1cancelAnnouncementPrompt as BaseV1cancelAnnouncementPrompt;

/**
 * Класс данных запроса Avito API [POST] /delivery-sandbox/v1/cancelAnnouncement.
 *
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/v1cancelAnnouncement
 *
 * @property string $announcementID Уникальный идентификатор анонса UUID V4.
 * @property string $date Дата события
 * @property \php_client_avito\Generated\Schema\DeliverySandbox\SandboxCancelAnnouncementOptions $options Body field options
 */
class CancelAnnouncementPrompt extends BaseV1cancelAnnouncementPrompt
{
}
