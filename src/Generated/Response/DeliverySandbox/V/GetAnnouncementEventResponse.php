<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response\DeliverySandbox\V;

use Andy87\ClientsAvito\Generated\Response\V1getAnnouncementEventResponse as BaseV1getAnnouncementEventResponse;

/**
 * Ответ Avito API [POST] /delivery-sandbox/v1/getAnnouncementEvent.
 * 
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/v1getAnnouncementEvent
 * 
 * @property array<string, mixed>|null $data Response field data
 * @property \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\SandboxGetAnnouncementEventError|null $errorData Response field error
 */
class GetAnnouncementEventResponse extends BaseV1getAnnouncementEventResponse
{
}
