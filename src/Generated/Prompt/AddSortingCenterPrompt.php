<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt;

use Andy87\PhpClientSdk\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [POST] /delivery-sandbox/tariffs/sorting-center.
 *
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/AddSortingCenter
 */
class AddSortingCenterPrompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/delivery-sandbox/tariffs/sorting-center';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const QUERY_PARAMETER_STYLES = [];

    protected const FIELD_MAP = ['body' => 'body'];

    protected const REQUIRED_FIELDS = ['body'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['body' => \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\AddSortingCentersRequest::class];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const HEADER_FIELDS = [];

    protected const BODY_FIELDS = [];

    protected const BODY_ROOT_FIELD = 'body';

    /** @var \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\AddSortingCentersRequest Request body */
    public \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\AddSortingCentersRequest $body;
}
