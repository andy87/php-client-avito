<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\DeliverySandbox;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/CreateParcelRequest.
 */
class CreateParcelRequest extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['barcodes' => 'barcodes', 'directOrderID' => 'directOrderID', 'items' => 'items', 'options' => 'options', 'orderID' => 'orderID', 'package' => 'package', 'parcelID' => 'parcelID', 'payment' => 'payment', 'receiver' => 'receiver', 'sender' => 'sender'];

    protected const REQUIRED_FIELDS = ['orderID', 'parcelID', 'items', 'sender', 'receiver', 'payment'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['items' => [\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelItem::class], 'options' => \php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelOptions::class, 'package' => \php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelPackage::class, 'payment' => \php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelPayment::class, 'receiver' => \php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelClient::class, 'sender' => \php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelClient::class];

    /** @var array<int, string>|null Штрихкоды посылки.
 */
    public ?array $barcodes = null;

    /** @var string|null Идентификатор прямого заказа Avito.
 */
    public ?string $directOrderID = null;

    /** @var array<int, \php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelItem> Список товаров, которые поедут в посылке.

Содержит полное описание каждого отдельно взятого товара.
 */
    public array $items;

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelOptions|null Schema field options */
    public ?\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelOptions $options = null;

    /** @var string Идентификатор заказа Avito.
 */
    public string $orderID;

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelPackage|null Schema field package */
    public ?\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelPackage $package = null;

    /** @var string Идентификатор посылки Avito.
 */
    public string $parcelID;

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelPayment Schema field payment */
    public \php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelPayment $payment;

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelClient Schema field receiver */
    public \php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelClient $receiver;

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelClient Schema field sender */
    public \php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelClient $sender;
}
