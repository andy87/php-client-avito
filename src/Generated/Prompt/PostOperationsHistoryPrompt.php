<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt;

use and_y87\PhpClientSdk\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [POST] /core/v1/accounts/operations_history/.
 *
 * @documentation https://developers.avito.ru/api-catalog/user/documentation#operation/postOperationsHistory
 */
class PostOperationsHistoryPrompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/core/v1/accounts/operations_history/';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const QUERY_PARAMETER_STYLES = [];

    protected const FIELD_MAP = ['dateTimeFrom' => 'dateTimeFrom', 'dateTimeTo' => 'dateTimeTo'];

    protected const REQUIRED_FIELDS = ['dateTimeFrom', 'dateTimeTo'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const HEADER_FIELDS = [];

    protected const BODY_FIELDS = ['dateTimeFrom', 'dateTimeTo'];

    protected const BODY_ROOT_FIELD = null;

    /** @var string Время выборки от. Не далее одного года в прошлое от текущего момента. */
    public string $dateTimeFrom;

    /** @var string Время выборки до (диапазон между dateTimeFrom и dateTimeTo должен быть не более одной недели) */
    public string $dateTimeTo;
}
