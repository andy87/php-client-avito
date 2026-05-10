<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\DeliverySandbox;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/CreateParcelRequest.
 */
class CreateParcelRequest extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['barcodes' => 'barcodes', 'directOrderID' => 'directOrderID', 'items' => 'items', 'options' => 'options', 'orderID' => 'orderID', 'package' => 'package', 'parcelID' => 'parcelID', 'payment' => 'payment', 'receiver' => 'receiver', 'sender' => 'sender'];

    protected const REQUIRED_FIELDS = ['orderID', 'parcelID', 'items', 'sender', 'receiver', 'payment'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['items' => [\and_y87\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelItem::class], 'options' => \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelOptions::class, 'package' => \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelPackage::class, 'payment' => \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelPayment::class, 'receiver' => \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelClient::class, 'sender' => \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelClient::class];

    /** @var array<int, string>|null Штрихкоды посылки.
 */
    public ?array $barcodes = null;

    /** @var string|null Идентификатор прямого заказа Avito.
 */
    public ?string $directOrderID = null;

    /** @var array<int, \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelItem> Список товаров, которые поедут в посылке.

Содержит полное описание каждого отдельно взятого товара.
 */
    public array $items;

    /** @var \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelOptions|null Schema field options */
    public ?\and_y87\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelOptions $options = null;

    /** @var string Идентификатор заказа Avito.
 */
    public string $orderID;

    /** @var \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelPackage|null Schema field package */
    public ?\and_y87\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelPackage $package = null;

    /** @var string Идентификатор посылки Avito.
 */
    public string $parcelID;

    /** @var \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelPayment Schema field payment */
    public \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelPayment $payment;

    /** @var \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelClient Schema field receiver */
    public \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelClient $receiver;

    /** @var \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelClient Schema field sender */
    public \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelClient $sender;
}
