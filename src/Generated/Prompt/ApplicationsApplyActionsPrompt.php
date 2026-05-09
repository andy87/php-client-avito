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

    protected const QUERY_PARAMETER_STYLES = [];

    protected const FIELD_MAP = ['X_Is_Employee' => 'X-Is-Employee', 'action' => 'action', 'ids' => 'ids'];

    protected const REQUIRED_FIELDS = ['action', 'ids'];

    protected const NULLABLE_FIELDS = ['X_Is_Employee'];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const HEADER_FIELDS = ['X_Is_Employee'];

    protected const BODY_FIELDS = ['action', 'ids'];

    protected const BODY_ROOT_FIELD = null;

    /** @var bool|null Сотрудник может менять статусы откликов для вакансий которые он разместил в рамках компании */
    public ?bool $X_Is_Employee = null;

    /** @var string Новый статус отклика, который нужно применить */
    public string $action;

    /** @var array<int, string> Список идентификаторов откликов, к которым нужно применить статус */
    public array $ids;
}
