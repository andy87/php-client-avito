<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt;

use Andy87\PhpClientSdk\Prompt\AbstractPrompt;

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

    protected const QUERY_PARAMETER_STYLES = [];

    protected const FIELD_MAP = ['user_id' => 'user_id', 'item_id' => 'item_id', 'bookings' => 'bookings', 'source' => 'source'];

    protected const REQUIRED_FIELDS = ['user_id', 'item_id'];

    protected const NULLABLE_FIELDS = ['source'];

    protected const CASTS = [];

    protected const PATH_FIELDS = ['user_id', 'item_id'];

    protected const QUERY_FIELDS = [];

    protected const HEADER_FIELDS = [];

    protected const BODY_FIELDS = ['bookings', 'source'];

    protected const BODY_ROOT_FIELD = null;

    /** @var int Номер пользователя в Личном кабинете Авито */
    public int $user_id;

    /** @var int Идентификатор объявления на сайте */
    public int $item_id;

    /** @var array<int, array<string, mixed>>|null Список броней для выбранного объекта недвижимости (объявления) */
    public ?array $bookings = null;

    /** @var string|null Название PMS системы */
    public ?string $source = null;
}
