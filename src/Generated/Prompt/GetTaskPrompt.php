<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt;

use Andy87\PhpClientSdk\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [GET] /delivery-sandbox/tasks/{task_id}.
 *
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/GetTask
 */
class GetTaskPrompt extends AbstractPrompt
{
    protected const METHOD = 'GET';

    protected const ENDPOINT = '/delivery-sandbox/tasks/{task_id}';

    protected const CONTENT_TYPE = null;

    protected const AUTHORIZATION_REQUIRED = true;

    protected const QUERY_PARAMETER_STYLES = [];

    protected const FIELD_MAP = ['task_id' => 'task_id'];

    protected const REQUIRED_FIELDS = ['task_id'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = ['task_id'];

    protected const QUERY_FIELDS = [];

    protected const HEADER_FIELDS = [];

    protected const BODY_FIELDS = [];

    protected const BODY_ROOT_FIELD = null;

    /** @var int path-parameter task_id */
    public int $task_id;
}
