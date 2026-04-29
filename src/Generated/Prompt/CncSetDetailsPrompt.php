<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [POST] /order-management/1/order/cncSetDetails.
 * 
 * @documentation https://developers.avito.ru/api-catalog/order-management/documentation#operation/cncSetDetails
 */
class CncSetDetailsPrompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/order-management/1/order/cncSetDetails';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const FIELD_MAP = ['Authorization' => 'Authorization', 'address' => 'address', 'bookingPeriod' => 'bookingPeriod', 'details' => 'details', 'id' => 'id', 'marketplaceId' => 'marketplaceId'];

    protected const REQUIRED_FIELDS = ['Authorization', 'bookingPeriod', 'id', 'marketplaceId'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const BODY_FIELDS = ['address', 'bookingPeriod', 'details', 'id', 'marketplaceId'];

    /** @var string Токен для авторизации */
    public string $Authorization;

    /** @var string|null Адрес получения товара */
    public ?string $address = null;

    /** @var int Сроки бронирования товара */
    public int $bookingPeriod;

    /** @var string|null Комментарий, который получит покупатель */
    public ?string $details = null;

    /** @var string ID заказа в Авито */
    public string $id;

    /** @var string Номер заказа в Авито в новой системе */
    public string $marketplaceId;
}
