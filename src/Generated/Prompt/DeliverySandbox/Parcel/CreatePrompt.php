<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\DeliverySandbox\Parcel;

use Andy87\ClientsAvito\Generated\Prompt\CreateParcelPrompt as BaseCreateParcelPrompt;

/**
 * Класс данных запроса Avito API [POST] /createParcel.
 * 
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/createParcel
 * 
 * @property array<int, string>|null $barcodes Штрихкоды посылки.
 * @property string|null $directOrderID Идентификатор прямого заказа Avito.
 * @property array<int, \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelItem> $items Список товаров, которые поедут в посылке. Содержит полное описание каждого отдельно взятого товара.
 * @property \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelOptions|null $options Body field options
 * @property string $orderID Идентификатор заказа Avito.
 * @property \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelPackage|null $package Body field package
 * @property string $parcelID Идентификатор посылки Avito.
 * @property \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelPayment $payment Body field payment
 * @property \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelClient $receiver Body field receiver
 * @property \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelClient $sender Body field sender
 */
class CreatePrompt extends BaseCreateParcelPrompt
{
}
