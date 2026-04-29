<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

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

    protected const FIELD_MAP = ['dateTimeFrom' => 'dateTimeFrom', 'dateTimeTo' => 'dateTimeTo'];

    protected const REQUIRED_FIELDS = ['dateTimeFrom', 'dateTimeTo'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const BODY_FIELDS = ['dateTimeFrom', 'dateTimeTo'];

    /** @var string Время выборки от. Не далее одного года в прошлое от текущего момента. */
    public string $dateTimeFrom;

    /** @var string Время выборки до (диапазон между dateTimeFrom и dateTimeTo должен быть не более одной недели) */
    public string $dateTimeTo;
}
