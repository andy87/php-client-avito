<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/CreateParcelRequest.
 */
class CreateParcelRequest extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['barcodes' => 'barcodes', 'directOrderID' => 'directOrderID', 'items' => 'items', 'options' => 'options', 'orderID' => 'orderID', 'package' => 'package', 'parcelID' => 'parcelID', 'payment' => 'payment', 'receiver' => 'receiver', 'sender' => 'sender'];

    protected const REQUIRED_FIELDS = ['orderID', 'parcelID', 'items', 'sender', 'receiver', 'payment'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['items' => [\Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelItem::class], 'options' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelOptions::class, 'package' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelPackage::class, 'payment' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelPayment::class, 'receiver' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelClient::class, 'sender' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelClient::class];

    /** @var array<int, string>|null Штрихкоды посылки.
 */
    public ?array $barcodes = null;

    /** @var string|null Идентификатор прямого заказа Avito.
 */
    public ?string $directOrderID = null;

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelItem> Список товаров, которые поедут в посылке.

Содержит полное описание каждого отдельно взятого товара.
 */
    public array $items;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelOptions|null Schema field options */
    public ?\Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelOptions $options = null;

    /** @var string Идентификатор заказа Avito.
 */
    public string $orderID;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelPackage|null Schema field package */
    public ?\Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelPackage $package = null;

    /** @var string Идентификатор посылки Avito.
 */
    public string $parcelID;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelPayment Schema field payment */
    public \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelPayment $payment;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelClient Schema field receiver */
    public \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelClient $receiver;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelClient Schema field sender */
    public \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelClient $sender;
}
