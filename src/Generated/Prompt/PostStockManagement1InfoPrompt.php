<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [POST] /stock-management/1/info.
 * 
 * @documentation https://developers.avito.ru/api-catalog/stock-management/documentation#operation/postStockManagement1Info
 */
class PostStockManagement1InfoPrompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/stock-management/1/info';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const FIELD_MAP = ['Authorization' => 'Authorization', 'item_ids' => 'item_ids', 'strong_consistency' => 'strong_consistency'];

    protected const REQUIRED_FIELDS = ['Authorization', 'item_ids'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const BODY_FIELDS = ['item_ids', 'strong_consistency'];

    /** @var string Токен для авторизации */
    public string $Authorization;

    /** @var array<int, int> Body field item_ids */
    public array $item_ids;

    /** @var bool|null Пропустить поход в кеш, отдать данные из базы */
    public ?bool $strong_consistency = null;
}
