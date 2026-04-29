<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [POST] /delivery-sandbox/v1/getChangeParcelInfo.
 * 
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/v1getChangeParcelInfo
 */
class V1getChangeParcelInfoPrompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/delivery-sandbox/v1/getChangeParcelInfo';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const FIELD_MAP = ['applicationID' => 'applicationID'];

    protected const REQUIRED_FIELDS = ['applicationID'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const BODY_FIELDS = ['applicationID'];

    /** @var string Body field applicationID */
    public string $applicationID;
}
