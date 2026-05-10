<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt;

use Andy87\PhpClientSdk\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [POST] /autoteka/v1/previews.
 *
 * @documentation https://developers.avito.ru/api-catalog/autoteka/documentation#operation/postPreviewByVin
 */
class PostPreviewByVinPrompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/autoteka/v1/previews';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const QUERY_PARAMETER_STYLES = [];

    protected const FIELD_MAP = ['vin' => 'vin'];

    protected const REQUIRED_FIELDS = ['vin'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const HEADER_FIELDS = [];

    protected const BODY_FIELDS = ['vin'];

    protected const BODY_ROOT_FIELD = null;

    /** @var string VIN или номер кузова запрашиваемого авто. */
    public string $vin;
}
