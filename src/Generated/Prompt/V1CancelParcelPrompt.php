<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt;

use and_y87\PhpClientSdk\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [POST] /delivery-sandbox/v1/cancelParcel.
 *
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/v1CancelParcel
 */
class V1CancelParcelPrompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/delivery-sandbox/v1/cancelParcel';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const QUERY_PARAMETER_STYLES = [];

    protected const FIELD_MAP = ['options' => 'options', 'parcelID' => 'parcelID'];

    protected const REQUIRED_FIELDS = ['parcelID'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['options' => \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\CancelSandboxParcelOptions::class];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const HEADER_FIELDS = [];

    protected const BODY_FIELDS = ['options', 'parcelID'];

    protected const BODY_ROOT_FIELD = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\CancelSandboxParcelOptions|null Body field options */
    public ?\and_y87\php_client_avito\Generated\Schema\DeliverySandbox\CancelSandboxParcelOptions $options = null;

    /** @var string Body field parcelID */
    public string $parcelID;
}
