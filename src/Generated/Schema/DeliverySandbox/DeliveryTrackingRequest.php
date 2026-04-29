<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/DeliveryTrackingRequest.
 */
class DeliveryTrackingRequest extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['avitoEventType' => 'avitoEventType', 'avitoStatus' => 'avitoStatus', 'comment' => 'comment', 'date' => 'date', 'location' => 'location', 'options' => 'options', 'orderId' => 'orderId', 'providerEventCode' => 'providerEventCode'];

    protected const REQUIRED_FIELDS = ['orderId', 'avitoStatus', 'avitoEventType', 'providerEventCode', 'date', 'location'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['date' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryEventDateTime::class, 'orderId' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryOrderIdString::class];

    /** @var string Описание статусов см. [здесь](https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#info/mehanika_raboty_trekinga). */
    public string $avitoEventType;

    /** @var mixed Описание статусов см. [здесь](https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#info/mehanika_raboty_trekinga). */
    public mixed $avitoStatus;

    /** @var string|null Комментарий к статусу. */
    public ?string $comment = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryEventDateTime Schema field date */
    public \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryEventDateTime $date;

    /** @var string Локация в которой произошло событие (населённый пункт в именительном падеже). */
    public string $location;

    /** @var array<string, mixed>|null Дополнительные опции к статусу. На данный момент в опциях поддержана передача штрихкода посылки и возвратных номеров.
Если номера `returnTrackingNumber` и `returnDispatchNumber` совпадают, то нужно присылать в них одинаковые значения.
 */
    public ?array $options = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryOrderIdString Schema field orderId */
    public \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryOrderIdString $orderId;

    /** @var string Код события по версии службы доставки. */
    public string $providerEventCode;
}
