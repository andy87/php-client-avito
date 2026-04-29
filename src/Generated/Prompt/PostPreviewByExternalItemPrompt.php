<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [POST] /autoteka/v1/request-preview-by-external-item.
 * 
 * @documentation https://developers.avito.ru/api-catalog/autoteka/documentation#operation/postPreviewByExternalItem
 */
class PostPreviewByExternalItemPrompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/autoteka/v1/request-preview-by-external-item';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const FIELD_MAP = ['Authorization' => 'Authorization', 'itemId' => 'itemId', 'site' => 'site'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const BODY_FIELDS = ['itemId', 'site'];

    /** @var string|null Токен для авторизации */
    public ?string $Authorization = null;

    /** @var string|null Body field itemId */
    public ?string $itemId = null;

    /** @var string|null Body field site */
    public ?string $site = null;
}
