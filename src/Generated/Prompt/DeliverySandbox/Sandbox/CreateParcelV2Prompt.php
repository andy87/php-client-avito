<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\DeliverySandbox\Sandbox;

use Andy87\ClientsAvito\Generated\Prompt\CreateSandboxParcelV2Prompt as BaseCreateSandboxParcelV2Prompt;

/**
 * Класс данных запроса Avito API [POST] /delivery-sandbox/v2/createParcel.
 * 
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/CreateSandboxParcelV2
 * 
 * @property array<int, \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateSandboxParcelItem>|null $items Body field items
 * @property \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateSandboxV2Options|null $options Body field options
 * @property array<string, mixed>|null $receiver Body field receiver
 * @property array<string, mixed>|null $sender Body field sender
 * @property array<int, string>|null $tags Body field tags
 */
class CreateParcelV2Prompt extends BaseCreateSandboxParcelV2Prompt
{
}
