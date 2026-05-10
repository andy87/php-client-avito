<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt;

use and_y87\PhpClientSdk\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [POST] /order-management/1/order/setCourierDeliveryRange.
 *
 * @documentation https://developers.avito.ru/api-catalog/order-management/documentation#operation/setCourierDeliveryRange
 */
class SetCourierDeliveryRangePrompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/order-management/1/order/setCourierDeliveryRange';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const QUERY_PARAMETER_STYLES = [];

    protected const FIELD_MAP = ['address' => 'address', 'addressDetails' => 'addressDetails', 'endDate' => 'endDate', 'intervalType' => 'intervalType', 'name' => 'name', 'orderId' => 'orderId', 'phone' => 'phone', 'startDate' => 'startDate'];

    protected const REQUIRED_FIELDS = ['address', 'endDate', 'intervalType', 'name', 'orderId', 'phone', 'startDate'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const HEADER_FIELDS = [];

    protected const BODY_FIELDS = ['address', 'addressDetails', 'endDate', 'intervalType', 'name', 'orderId', 'phone', 'startDate'];

    protected const BODY_ROOT_FIELD = null;

    /** @var string Адрес продавца */
    public string $address;

    /** @var string|null Детали адреса продавца */
    public ?string $addressDetails = null;

    /** @var string Конечная дата приезда курьера */
    public string $endDate;

    /** @var string Тип интервала */
    public string $intervalType;

    /** @var string ФИО */
    public string $name;

    /** @var string ID заказа */
    public string $orderId;

    /** @var string Телефон */
    public string $phone;

    /** @var string Начальная дата приезда курьера */
    public string $startDate;
}
