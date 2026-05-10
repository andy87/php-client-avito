<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Response\DeliverySandbox\Sandbox;

use php_client_avito\Generated\Response\CreateSandboxParcelV2Response as BaseCreateSandboxParcelV2Response;

/**
 * Ответ Avito API [POST] /delivery-sandbox/v2/createParcel.
 *
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/CreateSandboxParcelV2
 *
 * @property array<string, mixed>|null $data Response field data
 * @property \php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelError|null $errorData Response field error
 */
class CreateParcelV2Response extends BaseCreateSandboxParcelV2Response
{
}
