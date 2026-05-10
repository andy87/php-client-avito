<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt;

use Andy87\PhpClientSdk\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [POST] /realty/v1/accounts/{user_id}/items/{item_id}/prices.
 *
 * @documentation https://developers.avito.ru/api-catalog/str/documentation#operation/postRealtyPrices
 */
class PostRealtyPricesPrompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/realty/v1/accounts/{user_id}/items/{item_id}/prices';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const QUERY_PARAMETER_STYLES = ['skip_error' => ['style' => 'form', 'explode' => true]];

    protected const FIELD_MAP = ['user_id' => 'user_id', 'item_id' => 'item_id', 'skip_error' => 'skip_error', 'prices' => 'prices'];

    protected const REQUIRED_FIELDS = ['user_id', 'item_id', 'prices'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['prices' => [\and_y87\php_client_avito\Generated\Schema\Str\ParamPriceItemRealty::class]];

    protected const PATH_FIELDS = ['user_id', 'item_id'];

    protected const QUERY_FIELDS = ['skip_error'];

    protected const HEADER_FIELDS = [];

    protected const BODY_FIELDS = ['prices'];

    protected const BODY_ROOT_FIELD = null;

    /** @var int Номер пользователя в Личном кабинете Авито */
    public int $user_id;

    /** @var int Идентификатор объявления на сайте */
    public int $item_id;

    /** @var bool|null Флаг, с которым вместо ошибок(если ошибка произошла с айтемом) возвращается 200 статус, без ошибки */
    public ?bool $skip_error = null;

    /** @var array<int, \and_y87\php_client_avito\Generated\Schema\Str\ParamPriceItemRealty> Body field prices */
    public array $prices;
}
