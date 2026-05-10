<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt;

use Andy87\PhpClientSdk\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [POST] /realty/v1/items/{item_id}/base.
 *
 * @documentation https://developers.avito.ru/api-catalog/str/documentation#operation/postBaseParams
 */
class PostBaseParamsPrompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/realty/v1/items/{item_id}/base';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const QUERY_PARAMETER_STYLES = [];

    protected const FIELD_MAP = ['item_id' => 'item_id', 'discount' => 'discount', 'extra_guest_fee' => 'extra_guest_fee', 'extra_guest_threshold' => 'extra_guest_threshold', 'fees' => 'fees', 'instant' => 'instant', 'minimal_duration' => 'minimal_duration', 'night_price' => 'night_price', 'refund' => 'refund'];

    protected const REQUIRED_FIELDS = ['item_id'];

    protected const NULLABLE_FIELDS = ['extra_guest_fee', 'extra_guest_threshold', 'fees', 'instant', 'minimal_duration', 'night_price', 'refund'];

    protected const CASTS = [];

    protected const PATH_FIELDS = ['item_id'];

    protected const QUERY_FIELDS = [];

    protected const HEADER_FIELDS = [];

    protected const BODY_FIELDS = ['discount', 'extra_guest_fee', 'extra_guest_threshold', 'fees', 'instant', 'minimal_duration', 'night_price', 'refund'];

    protected const BODY_ROOT_FIELD = null;

    /** @var int Идентификатор объявления на сайте */
    public int $item_id;

    /** @var array<int, array<string, mixed>>|null Скидки при бронировании от threshold ночей */
    public ?array $discount = null;

    /** @var int|null Доплата за гостя (рубли) */
    public ?int $extra_guest_fee = null;

    /** @var int|null Порог гостей, при котором цена - night_price */
    public ?int $extra_guest_threshold = null;

    /** @var array<string, mixed>|null Настройки доплат */
    public ?array $fees = null;

    /** @var array<string, mixed>|null Параметры мгновенного бронирования */
    public ?array $instant = null;

    /** @var int|null Минимальная продолжительность (ночи) */
    public ?int $minimal_duration = null;

    /** @var int|null Цена проживания за ночь (рубли) */
    public ?int $night_price = null;

    /** @var array<string, mixed>|null Параметры возврата */
    public ?array $refund = null;
}
