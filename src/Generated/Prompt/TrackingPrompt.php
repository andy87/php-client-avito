<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Prompt;

use Andy87\PhpClientSdk\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [POST] /delivery-sandbox/order/tracking.
 *
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/tracking
 */
class TrackingPrompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/delivery-sandbox/order/tracking';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const QUERY_PARAMETER_STYLES = [];

    protected const FIELD_MAP = ['avitoEventType' => 'avitoEventType', 'avitoStatus' => 'avitoStatus', 'comment' => 'comment', 'date' => 'date', 'location' => 'location', 'options' => 'options', 'orderId' => 'orderId', 'providerEventCode' => 'providerEventCode'];

    protected const REQUIRED_FIELDS = ['avitoEventType', 'avitoStatus', 'date', 'location', 'orderId', 'providerEventCode'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['date' => \php_client_avito\Generated\Schema\DeliverySandbox\DeliveryEventDateTime::class, 'orderId' => \php_client_avito\Generated\Schema\DeliverySandbox\DeliveryOrderIdString::class];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const HEADER_FIELDS = [];

    protected const BODY_FIELDS = ['avitoEventType', 'avitoStatus', 'comment', 'date', 'location', 'options', 'orderId', 'providerEventCode'];

    protected const BODY_ROOT_FIELD = null;

    /** @var string Описание статусов см. [здесь](https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#info/mehanika_raboty_trekinga). */
    public string $avitoEventType;

    /** @var mixed Описание статусов см. [здесь](https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#info/mehanika_raboty_trekinga). */
    public mixed $avitoStatus;

    /** @var string|null Комментарий к статусу. */
    public ?string $comment = null;

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\DeliveryEventDateTime Body field date */
    public \php_client_avito\Generated\Schema\DeliverySandbox\DeliveryEventDateTime $date;

    /** @var string Локация в которой произошло событие (населённый пункт в именительном падеже). */
    public string $location;

    /** @var array<string, mixed>|null Дополнительные опции к статусу. На данный момент в опциях поддержана передача штрихкода посылки и возвратных номеров.
Если номера `returnTrackingNumber` и `returnDispatchNumber` совпадают, то нужно присылать в них одинаковые значения.
 */
    public ?array $options = null;

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\DeliveryOrderIdString Body field orderId */
    public \php_client_avito\Generated\Schema\DeliverySandbox\DeliveryOrderIdString $orderId;

    /** @var string Код события по версии службы доставки. */
    public string $providerEventCode;
}
