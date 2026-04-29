<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [POST] /createParcel.
 * 
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/createParcel
 */
class CreateParcelPrompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/createParcel';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = false;

    protected const FIELD_MAP = ['barcodes' => 'barcodes', 'directOrderID' => 'directOrderID', 'items' => 'items', 'options' => 'options', 'orderID' => 'orderID', 'package' => 'package', 'parcelID' => 'parcelID', 'payment' => 'payment', 'receiver' => 'receiver', 'sender' => 'sender'];

    protected const REQUIRED_FIELDS = ['items', 'orderID', 'parcelID', 'payment', 'receiver', 'sender'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['items' => [\Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelItem::class], 'options' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelOptions::class, 'package' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelPackage::class, 'payment' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelPayment::class, 'receiver' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelClient::class, 'sender' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelClient::class];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const BODY_FIELDS = ['barcodes', 'directOrderID', 'items', 'options', 'orderID', 'package', 'parcelID', 'payment', 'receiver', 'sender'];

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

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelOptions|null Body field options */
    public ?\Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelOptions $options = null;

    /** @var string Идентификатор заказа Avito.
 */
    public string $orderID;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelPackage|null Body field package */
    public ?\Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelPackage $package = null;

    /** @var string Идентификатор посылки Avito.
 */
    public string $parcelID;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelPayment Body field payment */
    public \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelPayment $payment;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelClient Body field receiver */
    public \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelClient $receiver;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelClient Body field sender */
    public \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelClient $sender;
}
