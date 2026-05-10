<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Prompt;

use Andy87\PhpClientSdk\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [GET] /realty/v1/accounts/{user_id}/items/{item_id}/bookings.
 *
 * @documentation https://developers.avito.ru/api-catalog/str/documentation#operation/getRealtyBookings
 */
class GetRealtyBookingsPrompt extends AbstractPrompt
{
    protected const METHOD = 'GET';

    protected const ENDPOINT = '/realty/v1/accounts/{user_id}/items/{item_id}/bookings';

    protected const CONTENT_TYPE = null;

    protected const AUTHORIZATION_REQUIRED = true;

    protected const QUERY_PARAMETER_STYLES = ['skip_error' => ['style' => 'form', 'explode' => true], 'date_start' => ['style' => 'form', 'explode' => true], 'date_end' => ['style' => 'form', 'explode' => true], 'with_unpaid' => ['style' => 'form', 'explode' => true]];

    protected const FIELD_MAP = ['user_id' => 'user_id', 'item_id' => 'item_id', 'skip_error' => 'skip_error', 'date_start' => 'date_start', 'date_end' => 'date_end', 'with_unpaid' => 'with_unpaid'];

    protected const REQUIRED_FIELDS = ['user_id', 'item_id', 'date_start', 'date_end'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = ['user_id', 'item_id'];

    protected const QUERY_FIELDS = ['skip_error', 'date_start', 'date_end', 'with_unpaid'];

    protected const HEADER_FIELDS = [];

    protected const BODY_FIELDS = [];

    protected const BODY_ROOT_FIELD = null;

    /** @var int Номер пользователя в Личном кабинете Авито */
    public int $user_id;

    /** @var int Идентификатор объявления на сайте */
    public int $item_id;

    /** @var bool|null Флаг, с которым вместо ошибок(если ошибка произошла с айтемом) возвращается 200 статус, без ошибки */
    public ?bool $skip_error = null;

    /** @var string Фильтр, ограничивающий выборку по нижней границе дат, не в прошлом */
    public string $date_start;

    /** @var string Фильтр, ограничивающий выборку по верхней границе дат, не в прошлом */
    public string $date_end;

    /** @var bool|null Флаг, позволяющий получить неоплаченные брони (возвращаются в статусе pending) */
    public ?bool $with_unpaid = null;
}
