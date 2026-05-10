<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Response;

use Andy87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ Avito API [POST] /job/v1/applications/apply_actions.
 *
 * @documentation https://developers.avito.ru/api-catalog/job/documentation#operation/applicationsApplyActions
 */
class ApplicationsApplyActionsResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['applies' => 'applies'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const MODEL = \and_y87\php_client_avito\Generated\Schema\Job\GetApplicationsIdsResult::class;

    /** @var array<int, array<string, mixed>>|null Список идентификаторов */
    public ?array $applies = null;
}
