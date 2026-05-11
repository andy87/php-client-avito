<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt;

use and_y87\PhpClientSdk\Request\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [POST] /autoteka/v1/request-preview-by-regnumber.
 *
 * @documentation https://developers.avito.ru/api-catalog/autoteka/documentation#operation/postPreviewByRegNumber
 */
class PostPreviewByRegNumberPrompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/autoteka/v1/request-preview-by-regnumber';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const QUERY_PARAMETER_STYLES = [];

    protected const FIELD_MAP = ['regNumber' => 'regNumber'];

    protected const REQUIRED_FIELDS = ['regNumber'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const HEADER_FIELDS = [];

    protected const BODY_FIELDS = ['regNumber'];

    protected const BODY_ROOT_FIELD = null;

    /** @var string государственный номер запрашиваемого авто. */
    public string $regNumber;
}
