<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt\DeliverySandbox\Parcel;

use and_y87\php_client_avito\Generated\Prompt\CreateParcelPrompt as BaseCreateParcelPrompt;

/**
 * Класс данных запроса Avito API [POST] /createParcel.
 *
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/createParcel
 *
 * @property array<int, string>|null $barcodes Штрихкоды посылки.
 * @property string|null $directOrderID Идентификатор прямого заказа Avito.
 * @property array<int, \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelItem> $items Список товаров, которые поедут в посылке. Содержит полное описание каждого отдельно взятого товара.
 * @property \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelOptions|null $options Body field options
 * @property string $orderID Идентификатор заказа Avito.
 * @property \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelPackage|null $package Body field package
 * @property string $parcelID Идентификатор посылки Avito.
 * @property \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelPayment $payment Body field payment
 * @property \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelClient $receiver Body field receiver
 * @property \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelClient $sender Body field sender
 */
class CreatePrompt extends BaseCreateParcelPrompt
{
}
