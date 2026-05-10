<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt;

use Andy87\PhpClientSdk\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [POST] /autoteka/v1/get-leads/.
 *
 * @documentation https://developers.avito.ru/api-catalog/autoteka/documentation#operation/getLeads
 */
class GetLeadsPrompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/autoteka/v1/get-leads/';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const QUERY_PARAMETER_STYLES = [];

    protected const FIELD_MAP = ['lastId' => 'lastId', 'limit' => 'limit', 'subscriptionId' => 'subscriptionId'];

    protected const REQUIRED_FIELDS = ['subscriptionId'];

    protected const NULLABLE_FIELDS = ['lastId', 'limit'];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const HEADER_FIELDS = [];

    protected const BODY_FIELDS = ['lastId', 'limit', 'subscriptionId'];

    protected const BODY_ROOT_FIELD = null;

    /** @var int|null Последний успешно-прочитанный id, указывается для постраничной выдачи */
    public ?int $lastId = null;

    /** @var int|null Количество записей в ответе */
    public ?int $limit = null;

    /** @var int Идентификатор подписки */
    public int $subscriptionId;
}
