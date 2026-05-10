<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Response\DeliverySandbox\V;

use and_y87\php_client_avito\Generated\Response\V1cancelAnnouncementResponse as BaseV1cancelAnnouncementResponse;

/**
 * Ответ Avito API [POST] /delivery-sandbox/v1/cancelAnnouncement.
 *
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/v1cancelAnnouncement
 *
 * @property array<string, mixed>|null $data Response field data
 * @property \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\SandboxCancelAnnouncementError|null $errorData Response field error
 */
class CancelAnnouncementResponse extends BaseV1cancelAnnouncementResponse
{
}
