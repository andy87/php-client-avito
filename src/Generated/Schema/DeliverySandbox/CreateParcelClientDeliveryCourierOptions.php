<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/CreateParcelClientDeliveryCourierOptions.
 */
class CreateParcelClientDeliveryCourierOptions extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['comment' => 'comment', 'deliveryConfirmationType' => 'deliveryConfirmationType', 'deliveryType' => 'deliveryType', 'elevatorAvailable' => 'elevatorAvailable'];

    protected const REQUIRED_FIELDS = ['deliveryType', 'deliveryConfirmationType', 'elevatorAvailable'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string|null Комментарий для курьера, оставленный пользователем. */
    public ?string $comment = null;

    /** @var string Способ связи с пользователем для подтверждения курьерской доставки.

На текущий момент способ связи всегда `PHONE`.
 */
    public string $deliveryConfirmationType;

    /** @var string Тип курьерской доставки.

На текущий момент тип доставки всегда `DELIVERY_TO_DOOR`.
 */
    public string $deliveryType;

    /** @var bool Наличие лифта в доме, способного поднять посылку. */
    public bool $elevatorAvailable;
}
