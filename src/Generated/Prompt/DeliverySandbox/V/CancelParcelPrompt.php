<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\DeliverySandbox\V;

use Andy87\ClientsAvito\Generated\Prompt\V1CancelParcelPrompt as BaseV1CancelParcelPrompt;

/**
 * Класс данных запроса Avito API [POST] /delivery-sandbox/v1/cancelParcel.
 * 
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/v1CancelParcel
 * 
 * @property \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CancelSandboxParcelOptions|null $options Body field options
 * @property string $parcelID Body field parcelID
 */
class CancelParcelPrompt extends BaseV1CancelParcelPrompt
{
}
