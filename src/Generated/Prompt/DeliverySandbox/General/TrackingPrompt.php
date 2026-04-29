<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\DeliverySandbox\General;

use Andy87\ClientsAvito\Generated\Prompt\TrackingPrompt as BaseTrackingPrompt;

/**
 * Класс данных запроса Avito API [POST] /delivery-sandbox/order/tracking.
 * 
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/tracking
 * 
 * @property string $avitoEventType Описание статусов см. [здесь](https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#info/mehanika_raboty_trekinga).
 * @property mixed $avitoStatus Описание статусов см. [здесь](https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#info/mehanika_raboty_trekinga).
 * @property string|null $comment Комментарий к статусу.
 * @property \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryEventDateTime $date Body field date
 * @property string $location Локация в которой произошло событие (населённый пункт в именительном падеже).
 * @property array<string, mixed>|null $options Дополнительные опции к статусу. На данный момент в опциях поддержана передача штрихкода посылки и возвратных номеров. Если номера `returnTrackingNumber` и `returnDispatchNumber` совпадают, то нужно присылать в них одинаковые значения.
 * @property \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryOrderIdString $orderId Body field orderId
 * @property string $providerEventCode Код события по версии службы доставки.
 */
class TrackingPrompt extends BaseTrackingPrompt
{
}
