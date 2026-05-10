<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\DeliverySandbox;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/SandboxCreateAnnouncementDeliveryPoint.
 */
class SandboxCreateAnnouncementDeliveryPoint extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['accuracy' => 'accuracy', 'id' => 'id', 'provider' => 'provider'];

    protected const REQUIRED_FIELDS = ['provider'];

    protected const NULLABLE_FIELDS = ['accuracy', 'id'];

    protected const CASTS = [];

    /** @var string|null Точность определения точки. */
    public ?string $accuracy = null;

    /** @var string|null Идентификатор точки (ПВЗ/сортировочного центра). */
    public ?string $id = null;

    /** @var string Код службы доставки. */
    public string $provider;
}
