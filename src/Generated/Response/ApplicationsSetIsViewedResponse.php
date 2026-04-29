<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response;

use Andy87\ClientsBase\Response\AbstractResponse;

/**
 * Ответ Avito API [POST] /job/v1/applications/set_is_viewed.
 * 
 * @documentation https://developers.avito.ru/api-catalog/job/documentation#operation/applicationsSetIsViewed
 */
class ApplicationsSetIsViewedResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['applies' => 'applies'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const MODEL = \Andy87\ClientsAvito\Generated\Schema\Job\SetApplicationsIsViewedResult::class;

    /** @var array<int, array<string, mixed>>|null Список идентификаторов откликов и статусов их просмотренности после обновления */
    public ?array $applies = null;
}
