<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/Delivery-terms.
 */
class DeliveryTerms extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['cost' => 'cost', 'directControlDate' => 'directControlDate', 'receiverTerminalCode' => 'receiverTerminalCode', 'returnControlDate' => 'returnControlDate', 'senderReceiveTerminalCode' => 'senderReceiveTerminalCode', 'toughWrap' => 'toughWrap'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['cost' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\Cost::class, 'directControlDate' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryDirectControlDate::class, 'receiverTerminalCode' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryReceiverTerminalCode::class, 'returnControlDate' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryReturnControlDate::class, 'senderReceiveTerminalCode' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliverySenderReceiveTerminalCode::class, 'toughWrap' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryToughWrap::class];

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\Cost|null Schema field cost */
    public ?\Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\Cost $cost = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryDirectControlDate|null Schema field directControlDate */
    public ?\Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryDirectControlDate $directControlDate = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryReceiverTerminalCode|null Schema field receiverTerminalCode */
    public ?\Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryReceiverTerminalCode $receiverTerminalCode = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryReturnControlDate|null Schema field returnControlDate */
    public ?\Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryReturnControlDate $returnControlDate = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliverySenderReceiveTerminalCode|null Schema field senderReceiveTerminalCode */
    public ?\Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliverySenderReceiveTerminalCode $senderReceiveTerminalCode = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryToughWrap|null Schema field toughWrap */
    public ?\Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryToughWrap $toughWrap = null;
}
