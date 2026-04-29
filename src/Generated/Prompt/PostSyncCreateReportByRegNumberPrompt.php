<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [POST] /autoteka/v1/sync/create-by-regnumber.
 * 
 * @documentation https://developers.avito.ru/api-catalog/autoteka/documentation#operation/postSyncCreateReportByRegNumber
 */
class PostSyncCreateReportByRegNumberPrompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/autoteka/v1/sync/create-by-regnumber';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const FIELD_MAP = ['Authorization' => 'Authorization', 'regNumber' => 'regNumber'];

    protected const REQUIRED_FIELDS = ['regNumber'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const BODY_FIELDS = ['regNumber'];

    /** @var string|null Токен для авторизации */
    public ?string $Authorization = null;

    /** @var string государственный номер запрашиваемого авто. */
    public string $regNumber;
}
