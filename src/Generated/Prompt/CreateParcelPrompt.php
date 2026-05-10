<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Prompt;

use Andy87\PhpClientSdk\Prompt\AbstractPrompt;

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

    protected const AUTHORIZATION_REQUIRED = true;

    protected const QUERY_PARAMETER_STYLES = [];

    protected const FIELD_MAP = ['barcodes' => 'barcodes', 'directOrderID' => 'directOrderID', 'items' => 'items', 'options' => 'options', 'orderID' => 'orderID', 'package' => 'package', 'parcelID' => 'parcelID', 'payment' => 'payment', 'receiver' => 'receiver', 'sender' => 'sender'];

    protected const REQUIRED_FIELDS = ['items', 'orderID', 'parcelID', 'payment', 'receiver', 'sender'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['items' => [\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelItem::class], 'options' => \php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelOptions::class, 'package' => \php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelPackage::class, 'payment' => \php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelPayment::class, 'receiver' => \php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelClient::class, 'sender' => \php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelClient::class];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const HEADER_FIELDS = [];

    protected const BODY_FIELDS = ['barcodes', 'directOrderID', 'items', 'options', 'orderID', 'package', 'parcelID', 'payment', 'receiver', 'sender'];

    protected const BODY_ROOT_FIELD = null;

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

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelOptions|null Body field options */
    public ?\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelOptions $options = null;

    /** @var string Идентификатор заказа Avito.
 */
    public string $orderID;

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelPackage|null Body field package */
    public ?\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelPackage $package = null;

    /** @var string Идентификатор посылки Avito.
 */
    public string $parcelID;

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelPayment Body field payment */
    public \php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelPayment $payment;

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelClient Body field receiver */
    public \php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelClient $receiver;

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelClient Body field sender */
    public \php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelClient $sender;
}
