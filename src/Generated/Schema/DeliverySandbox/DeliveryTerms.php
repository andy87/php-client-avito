<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\DeliverySandbox;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/Delivery-terms.
 */
class DeliveryTerms extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['cost' => 'cost', 'directControlDate' => 'directControlDate', 'receiverTerminalCode' => 'receiverTerminalCode', 'returnControlDate' => 'returnControlDate', 'senderReceiveTerminalCode' => 'senderReceiveTerminalCode', 'toughWrap' => 'toughWrap'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['cost' => \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\Cost::class, 'directControlDate' => \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\DeliveryDirectControlDate::class, 'receiverTerminalCode' => \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\DeliveryReceiverTerminalCode::class, 'returnControlDate' => \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\DeliveryReturnControlDate::class, 'senderReceiveTerminalCode' => \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\DeliverySenderReceiveTerminalCode::class, 'toughWrap' => \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\DeliveryToughWrap::class];

    /** @var \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\Cost|null Schema field cost */
    public ?\and_y87\php_client_avito\Generated\Schema\DeliverySandbox\Cost $cost = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\DeliveryDirectControlDate|null Schema field directControlDate */
    public ?\and_y87\php_client_avito\Generated\Schema\DeliverySandbox\DeliveryDirectControlDate $directControlDate = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\DeliveryReceiverTerminalCode|null Schema field receiverTerminalCode */
    public ?\and_y87\php_client_avito\Generated\Schema\DeliverySandbox\DeliveryReceiverTerminalCode $receiverTerminalCode = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\DeliveryReturnControlDate|null Schema field returnControlDate */
    public ?\and_y87\php_client_avito\Generated\Schema\DeliverySandbox\DeliveryReturnControlDate $returnControlDate = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\DeliverySenderReceiveTerminalCode|null Schema field senderReceiveTerminalCode */
    public ?\and_y87\php_client_avito\Generated\Schema\DeliverySandbox\DeliverySenderReceiveTerminalCode $senderReceiveTerminalCode = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\DeliveryToughWrap|null Schema field toughWrap */
    public ?\and_y87\php_client_avito\Generated\Schema\DeliverySandbox\DeliveryToughWrap $toughWrap = null;
}
