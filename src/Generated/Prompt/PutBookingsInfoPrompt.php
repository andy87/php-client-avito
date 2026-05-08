<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [POST] /core/v1/accounts/{user_id}/items/{item_id}/bookings.
 * 
 * @documentation https://developers.avito.ru/api-catalog/str/documentation#operation/putBookingsInfo
 */
class PutBookingsInfoPrompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/core/v1/accounts/{user_id}/items/{item_id}/bookings';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const FIELD_MAP = ['bookings' => 'bookings', 'source' => 'source', 'user_id' => 'user_id', 'item_id' => 'item_id'];

    protected const REQUIRED_FIELDS = ['user_id', 'item_id'];

    protected const NULLABLE_FIELDS = ['source'];

    protected const CASTS = [];

    protected const PATH_FIELDS = ['user_id', 'item_id'];

    protected const QUERY_FIELDS = [];

    protected const BODY_FIELDS = ['bookings', 'source'];

    /** @var array<int, array<string, mixed>>|null Список броней для выбранного объекта недвижимости (объявления) */
    public ?array $bookings = null;

    /** @var string|null Название PMS системы */
    public ?string $source = null;
    /** @var string|int path-parameter user_id */
    public string|int $user_id;

    /** @var string|int path-parameter item_id */
    public string|int $item_id;
}
