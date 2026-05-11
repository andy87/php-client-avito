<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt;

use and_y87\PhpClientSdk\Request\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [POST] /order-management/1/order/acceptReturnOrder.
 *
 * @documentation https://developers.avito.ru/api-catalog/order-management/documentation#operation/acceptReturnOrder
 */
class AcceptReturnOrderPrompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/order-management/1/order/acceptReturnOrder';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const QUERY_PARAMETER_STYLES = [];

    protected const FIELD_MAP = ['orderId' => 'orderId', 'recipient' => 'recipient', 'terminalNumber' => 'terminalNumber'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const HEADER_FIELDS = [];

    protected const BODY_FIELDS = ['orderId', 'recipient', 'terminalNumber'];

    protected const BODY_ROOT_FIELD = null;

    /** @var string|null ID заказа в Авито */
    public ?string $orderId = null;

    /** @var array<string, mixed>|null Данные человека, который будет забирать возвратную посылку */
    public ?array $recipient = null;

    /** @var string|null Номер отделения Почты России, куда придёт возвратная посылка. */
    public ?string $terminalNumber = null;
}
