<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [POST] /delivery-sandbox/v1/changeParcel.
 * 
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/v1changeParcel
 */
class V1changeParcelPrompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/delivery-sandbox/v1/changeParcel';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const FIELD_MAP = ['application' => 'application', 'options' => 'options', 'parcelID' => 'parcelID', 'type' => 'type'];

    protected const REQUIRED_FIELDS = ['parcelID', 'type'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['application' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\ChangeParcelRequestApplication::class, 'options' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\ChangeParcelRequestOptions::class];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const BODY_FIELDS = ['application', 'options', 'parcelID', 'type'];

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\ChangeParcelRequestApplication|null Body field application */
    public ?\Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\ChangeParcelRequestApplication $application = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\ChangeParcelRequestOptions|null Body field options */
    public ?\Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\ChangeParcelRequestOptions $options = null;

    /** @var string Body field parcelID */
    public string $parcelID;

    /** @var string Body field type */
    public string $type;
}
