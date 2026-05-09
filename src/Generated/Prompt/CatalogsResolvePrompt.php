<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\PhpClientSdk\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [POST] /autoteka/v1/catalogs/resolve.
 *
 * @documentation https://developers.avito.ru/api-catalog/autoteka/documentation#operation/catalogsResolve
 */
class CatalogsResolvePrompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/autoteka/v1/catalogs/resolve';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const QUERY_PARAMETER_STYLES = [];

    protected const FIELD_MAP = ['fieldsValueIds' => 'fieldsValueIds'];

    protected const REQUIRED_FIELDS = ['fieldsValueIds'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const HEADER_FIELDS = [];

    protected const BODY_FIELDS = ['fieldsValueIds'];

    protected const BODY_ROOT_FIELD = null;

    /** @var array<int, array<string, mixed>> Выбранные значения параметров */
    public array $fieldsValueIds;
}
