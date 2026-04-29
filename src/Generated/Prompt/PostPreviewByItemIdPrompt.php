<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [POST] /autoteka/v1/request-preview-by-item-id.
 * 
 * @documentation https://developers.avito.ru/api-catalog/autoteka/documentation#operation/postPreviewByItemId
 */
class PostPreviewByItemIdPrompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/autoteka/v1/request-preview-by-item-id';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const FIELD_MAP = ['Authorization' => 'Authorization', 'itemId' => 'itemId'];

    protected const REQUIRED_FIELDS = ['itemId'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const BODY_FIELDS = ['itemId'];

    /** @var string|null Токен для авторизации */
    public ?string $Authorization = null;

    /** @var int Идентификатор объявления на сайте. */
    public int $itemId;
}
