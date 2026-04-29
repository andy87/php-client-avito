<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\DeliverySandbox\V;

use Andy87\ClientsAvito\Generated\Prompt\V1createAnnouncementPrompt as BaseV1createAnnouncementPrompt;

/**
 * Класс данных запроса Avito API [POST] /delivery-sandbox/v1/createAnnouncement.
 * 
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/v1createAnnouncement
 * 
 * @property string $announcementID Уникальный идентификатор анонса UUID V4.
 * @property string $announcementType Тип анонса.
 * @property string $barcode Штрихкод анонса.
 * @property string $date Дата и время создания анонса (UTC).
 * @property \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\SandboxCreateAnnouncementOptions $options Body field options
 * @property array<int, \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\SandboxCreateAnnouncementPackage> $packages Список грузомест.
 * @property \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\SandboxCreateAnnouncementParticipant $receiver Body field receiver
 * @property \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\SandboxCreateAnnouncementParticipant $sender Body field sender
 */
class CreateAnnouncementPrompt extends BaseV1createAnnouncementPrompt
{
}
