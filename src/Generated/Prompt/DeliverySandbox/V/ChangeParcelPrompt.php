<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\DeliverySandbox\V;

use Andy87\ClientsAvito\Generated\Prompt\V1changeParcelPrompt as BaseV1changeParcelPrompt;

/**
 * Класс данных запроса Avito API [POST] /delivery-sandbox/v1/changeParcel.
 * 
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/v1changeParcel
 * 
 * @property \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\ChangeParcelRequestApplication|null $application Body field application
 * @property \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\ChangeParcelRequestOptions|null $options Body field options
 * @property string $parcelID Body field parcelID
 * @property string $type Body field type
 */
class ChangeParcelPrompt extends BaseV1changeParcelPrompt
{
}
