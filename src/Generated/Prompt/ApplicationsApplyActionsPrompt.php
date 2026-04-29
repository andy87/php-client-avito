<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [POST] /job/v1/applications/apply_actions.
 * 
 * @documentation https://developers.avito.ru/api-catalog/job/documentation#operation/applicationsApplyActions
 */
class ApplicationsApplyActionsPrompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/job/v1/applications/apply_actions';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const FIELD_MAP = ['action' => 'action', 'ids' => 'ids'];

    protected const REQUIRED_FIELDS = ['action', 'ids'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const BODY_FIELDS = ['action', 'ids'];

    /** @var string Новый статус отклика, который нужно применить */
    public string $action;

    /** @var array<int, string> Список идентификаторов откликов, к которым нужно применить статус */
    public array $ids;
}
