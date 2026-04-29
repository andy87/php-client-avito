<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [POST] /order-management/1/markings.
 * 
 * @documentation https://developers.avito.ru/api-catalog/order-management/documentation#operation/markings
 */
class MarkingsPrompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/order-management/1/markings';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const FIELD_MAP = ['Authorization' => 'Authorization', 'markings' => 'markings'];

    protected const REQUIRED_FIELDS = ['Authorization'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['markings' => [\Andy87\ClientsAvito\Generated\Schema\OrderManagement\Marking::class]];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const BODY_FIELDS = ['markings'];

    /** @var string Токен для авторизации */
    public string $Authorization;

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\OrderManagement\Marking>|null Массив маркировок, которые требуется передать */
    public ?array $markings = null;
}
