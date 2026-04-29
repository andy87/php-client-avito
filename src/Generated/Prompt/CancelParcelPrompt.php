<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * DTO запроса Avito API cancelParcel.
 */
class CancelParcelPrompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/delivery-sandbox/cancelParcel';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = false;

    protected const FIELD_MAP = ['actor' => 'actor', 'parcelID' => 'parcelID'];

    protected const REQUIRED_FIELDS = ['actor', 'parcelID'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['parcelID' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryOrderIdString::class];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const BODY_FIELDS = ['actor', 'parcelID'];

    /** @var string Кто отменяет посылку */
    public string $actor;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryOrderIdString Body field parcelID */
    public \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryOrderIdString $parcelID;
}
