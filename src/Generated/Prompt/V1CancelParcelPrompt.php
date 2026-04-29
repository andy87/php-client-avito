<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * DTO запроса Avito API v1CancelParcel.
 */
class V1CancelParcelPrompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/delivery-sandbox/v1/cancelParcel';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const FIELD_MAP = ['options' => 'options', 'parcelID' => 'parcelID'];

    protected const REQUIRED_FIELDS = ['parcelID'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['options' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CancelSandboxParcelOptions::class];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const BODY_FIELDS = ['options', 'parcelID'];

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CancelSandboxParcelOptions|null Body field options */
    public ?\Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CancelSandboxParcelOptions $options = null;

    /** @var string Body field parcelID */
    public string $parcelID;
}
