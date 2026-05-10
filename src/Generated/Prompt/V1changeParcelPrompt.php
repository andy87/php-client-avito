<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt;

use and_y87\PhpClientSdk\Prompt\AbstractPrompt;

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

    protected const QUERY_PARAMETER_STYLES = [];

    protected const FIELD_MAP = ['application' => 'application', 'options' => 'options', 'parcelID' => 'parcelID', 'type' => 'type'];

    protected const REQUIRED_FIELDS = ['parcelID', 'type'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['application' => \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\ChangeParcelRequestApplication::class, 'options' => \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\ChangeParcelRequestOptions::class];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const HEADER_FIELDS = [];

    protected const BODY_FIELDS = ['application', 'options', 'parcelID', 'type'];

    protected const BODY_ROOT_FIELD = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\ChangeParcelRequestApplication|null Body field application */
    public ?\and_y87\php_client_avito\Generated\Schema\DeliverySandbox\ChangeParcelRequestApplication $application = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\ChangeParcelRequestOptions|null Body field options */
    public ?\and_y87\php_client_avito\Generated\Schema\DeliverySandbox\ChangeParcelRequestOptions $options = null;

    /** @var string Body field parcelID */
    public string $parcelID;

    /** @var string Body field type */
    public string $type;
}
