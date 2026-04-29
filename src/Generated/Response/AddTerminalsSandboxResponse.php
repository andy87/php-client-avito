<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response;

use Andy87\ClientsBase\Response\AbstractResponse;

/**
 * Ответ Avito API [POST] /delivery-sandbox/tariffs/{tariff_id}/terminals.
 * 
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/AddTerminalsSandbox
 */
class AddTerminalsSandboxResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['data' => 'data', 'errorData' => 'error'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['data'];

    protected const CASTS = ['errorData' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryError::class];

    protected const MODEL = \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\AddTerminalsReply::class;

    /** @var array<string, mixed>|null Response field data */
    public ?array $data = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryError|null Response field error */
    public ?\Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryError $errorData = null;
}
