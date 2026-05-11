<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt;

use and_y87\PhpClientSdk\Request\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [GET] /autoteka/v1/monitoring/get-reg-actions/.
 *
 * @documentation https://developers.avito.ru/api-catalog/autoteka/documentation#operation/monitoringGetRegActions
 */
class MonitoringGetRegActionsPrompt extends AbstractPrompt
{
    protected const METHOD = 'GET';

    protected const ENDPOINT = '/autoteka/v1/monitoring/get-reg-actions/';

    protected const CONTENT_TYPE = null;

    protected const AUTHORIZATION_REQUIRED = true;

    protected const QUERY_PARAMETER_STYLES = ['cursor' => ['style' => 'form', 'explode' => true], 'operationDateFrom' => ['style' => 'form', 'explode' => true], 'limit' => ['style' => 'form', 'explode' => true]];

    protected const FIELD_MAP = ['cursor' => 'cursor', 'operationDateFrom' => 'operationDateFrom', 'limit' => 'limit'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['cursor', 'operationDateFrom', 'limit'];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = ['cursor', 'operationDateFrom', 'limit'];

    protected const HEADER_FIELDS = [];

    protected const BODY_FIELDS = [];

    protected const BODY_ROOT_FIELD = null;

    /** @var string|null Позиция курсора */
    public ?string $cursor = null;

    /** @var string|null Отбирать рег. действия не раньше указанной даты (включительно) */
    public ?string $operationDateFrom = null;

    /** @var int|null Количество строк в результате */
    public ?int $limit = null;
}
