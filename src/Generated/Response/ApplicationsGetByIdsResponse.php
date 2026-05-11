<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Response;

use and_y87\PhpClientSdk\Response\Model\AbstractResponse;

/**
 * Ответ Avito API [POST] /job/v1/applications/get_by_ids.
 *
 * @documentation https://developers.avito.ru/api-catalog/job/documentation#operation/applicationsGetByIds
 */
class ApplicationsGetByIdsResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['applies' => 'applies'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const MODEL = \and_y87\php_client_avito\Generated\Schema\Job\GetApplicationsByIdsResult::class;

    /** @var array<int, array<string, mixed>>|null Список откликов */
    public ?array $applies = null;
}
