<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt;

use Andy87\PhpClientSdk\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [GET] /job/v2/vacancy/dict.
 *
 * @documentation https://developers.avito.ru/api-catalog/job/documentation#operation/getDicts
 */
class GetDictsPrompt extends AbstractPrompt
{
    protected const METHOD = 'GET';

    protected const ENDPOINT = '/job/v2/vacancy/dict';

    protected const CONTENT_TYPE = null;

    protected const AUTHORIZATION_REQUIRED = true;

    protected const QUERY_PARAMETER_STYLES = [];

    protected const FIELD_MAP = ['X_Is_Employee' => 'X-Is-Employee'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['X_Is_Employee'];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const HEADER_FIELDS = ['X_Is_Employee'];

    protected const BODY_FIELDS = [];

    protected const BODY_ROOT_FIELD = null;

    /** @var bool|null Включает привилегии компании для сотрудника */
    public ?bool $X_Is_Employee = null;
}
