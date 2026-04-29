<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [GET] /autoload/v2/reports/items.
 * 
 * @documentation https://developers.avito.ru/api-catalog/autoload/documentation#operation/getAutoloadItemsInfoV2
 */
class GetAutoloadItemsInfoV2Prompt extends AbstractPrompt
{
    protected const METHOD = 'GET';

    protected const ENDPOINT = '/autoload/v2/reports/items';

    protected const CONTENT_TYPE = null;

    protected const AUTHORIZATION_REQUIRED = false;

    protected const FIELD_MAP = ['query' => 'query', 'Authorization' => 'Authorization'];

    protected const REQUIRED_FIELDS = ['query', 'Authorization'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = ['query'];

    protected const BODY_FIELDS = [];

    /** @var string Идентификаторы объявлений из файла ([параметр Id](https://autoload.avito.ru/format/realty/#Id)).
Формат значения: строка, содержащая от 1 до 100 идентификаторов, перечисленных через «,» или «|».
 */
    public string $query;

    /** @var string Токен для авторизации */
    public string $Authorization;
}
