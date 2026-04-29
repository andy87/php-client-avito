<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

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

    protected const FIELD_MAP = ['applies' => 'applies'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const BODY_FIELDS = ['applies'];

    /** @var array<int, array<string, mixed>>|null Список откликов */
    public ?array $applies = null;
}
