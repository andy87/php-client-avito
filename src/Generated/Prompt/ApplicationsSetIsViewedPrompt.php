<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\PhpClientSdk\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [POST] /job/v1/applications/set_is_viewed.
 *
 * @documentation https://developers.avito.ru/api-catalog/job/documentation#operation/applicationsSetIsViewed
 */
class ApplicationsSetIsViewedPrompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/job/v1/applications/set_is_viewed';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const QUERY_PARAMETER_STYLES = [];

    protected const FIELD_MAP = ['X_Is_Employee' => 'X-Is-Employee', 'applies' => 'applies'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['X_Is_Employee'];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const HEADER_FIELDS = ['X_Is_Employee'];

    protected const BODY_FIELDS = ['applies'];

    protected const BODY_ROOT_FIELD = null;

    /** @var bool|null Предоставляет возможность менять статус отклика от имени сотрудника */
    public ?bool $X_Is_Employee = null;

    /** @var array<int, array<string, mixed>>|null Список откликов */
    public ?array $applies = null;
}
