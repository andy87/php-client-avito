<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\DeliverySandbox;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/Delivery-terms.
 */
class DeliveryTerms extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['cost' => 'cost', 'directControlDate' => 'directControlDate', 'receiverTerminalCode' => 'receiverTerminalCode', 'returnControlDate' => 'returnControlDate', 'senderReceiveTerminalCode' => 'senderReceiveTerminalCode', 'toughWrap' => 'toughWrap'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['cost' => \php_client_avito\Generated\Schema\DeliverySandbox\Cost::class, 'directControlDate' => \php_client_avito\Generated\Schema\DeliverySandbox\DeliveryDirectControlDate::class, 'receiverTerminalCode' => \php_client_avito\Generated\Schema\DeliverySandbox\DeliveryReceiverTerminalCode::class, 'returnControlDate' => \php_client_avito\Generated\Schema\DeliverySandbox\DeliveryReturnControlDate::class, 'senderReceiveTerminalCode' => \php_client_avito\Generated\Schema\DeliverySandbox\DeliverySenderReceiveTerminalCode::class, 'toughWrap' => \php_client_avito\Generated\Schema\DeliverySandbox\DeliveryToughWrap::class];

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\Cost|null Schema field cost */
    public ?\php_client_avito\Generated\Schema\DeliverySandbox\Cost $cost = null;

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\DeliveryDirectControlDate|null Schema field directControlDate */
    public ?\php_client_avito\Generated\Schema\DeliverySandbox\DeliveryDirectControlDate $directControlDate = null;

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\DeliveryReceiverTerminalCode|null Schema field receiverTerminalCode */
    public ?\php_client_avito\Generated\Schema\DeliverySandbox\DeliveryReceiverTerminalCode $receiverTerminalCode = null;

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\DeliveryReturnControlDate|null Schema field returnControlDate */
    public ?\php_client_avito\Generated\Schema\DeliverySandbox\DeliveryReturnControlDate $returnControlDate = null;

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\DeliverySenderReceiveTerminalCode|null Schema field senderReceiveTerminalCode */
    public ?\php_client_avito\Generated\Schema\DeliverySandbox\DeliverySenderReceiveTerminalCode $senderReceiveTerminalCode = null;

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\DeliveryToughWrap|null Schema field toughWrap */
    public ?\php_client_avito\Generated\Schema\DeliverySandbox\DeliveryToughWrap $toughWrap = null;
}
