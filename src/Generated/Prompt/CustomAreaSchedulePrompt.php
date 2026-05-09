<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\PhpClientSdk\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [POST] /delivery-sandbox/areas/custom-schedule.
 *
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/customAreaSchedule
 */
class CustomAreaSchedulePrompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/delivery-sandbox/areas/custom-schedule';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const QUERY_PARAMETER_STYLES = [];

    protected const FIELD_MAP = ['body' => 'body'];

    protected const REQUIRED_FIELDS = ['body'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['body' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CustomAreaScheduleRequest::class];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const HEADER_FIELDS = [];

    protected const BODY_FIELDS = [];

    protected const BODY_ROOT_FIELD = 'body';

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CustomAreaScheduleRequest Request body */
    public \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CustomAreaScheduleRequest $body;
}
