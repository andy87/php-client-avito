<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response;

use Andy87\ClientsBase\Response\AbstractResponse;

/**
 * DTO ответа Avito API setOrderProperties.
 */
class SetOrderPropertiesResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['data' => 'data', 'errorData' => 'error'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['data'];

    protected const CASTS = ['errorData' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryError::class];

    protected const MODEL = \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliverySetOrderPropertiesReply::class;

    /** @var array<string, mixed>|null Response field data */
    public ?array $data = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryError|null Response field error */
    public ?\Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryError $errorData = null;
}
