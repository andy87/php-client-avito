<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Response\DeliverySandbox\V;

use php_client_avito\Generated\Response\V1createAnnouncementResponse as BaseV1createAnnouncementResponse;

/**
 * Ответ Avito API [POST] /delivery-sandbox/v1/createAnnouncement.
 *
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/v1createAnnouncement
 *
 * @property array<string, mixed>|null $data Response field data
 * @property \php_client_avito\Generated\Schema\DeliverySandbox\SandboxCreateAnnouncementError|null $errorData Response field error
 */
class CreateAnnouncementResponse extends BaseV1createAnnouncementResponse
{
}
