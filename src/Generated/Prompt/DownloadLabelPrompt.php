<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [GET] /order-management/1/orders/labels/{taskID}/download.
 * 
 * @documentation https://developers.avito.ru/api-catalog/order-management/documentation#operation/downloadLabel
 */
class DownloadLabelPrompt extends AbstractPrompt
{
    protected const METHOD = 'GET';

    protected const ENDPOINT = '/order-management/1/orders/labels/{taskID}/download';

    protected const CONTENT_TYPE = null;

    protected const AUTHORIZATION_REQUIRED = true;

    protected const FIELD_MAP = ['Authorization' => 'Authorization', 'taskID' => 'taskID'];

    protected const REQUIRED_FIELDS = ['Authorization', 'taskID'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = ['taskID'];

    protected const QUERY_FIELDS = [];

    protected const BODY_FIELDS = [];

    /** @var string Токен для авторизации */
    public string $Authorization;

    /** @var string ID задачи на генерацию */
    public string $taskID;
}
