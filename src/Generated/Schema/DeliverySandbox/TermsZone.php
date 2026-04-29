<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/TermsZone.
 */
class TermsZone extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['deliveryProviderZoneId' => 'deliveryProviderZoneId', 'maxTerm' => 'maxTerm', 'minTerm' => 'minTerm', 'name' => 'name'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string|null Id зоны сроков на стороне службы доставки */
    public ?string $deliveryProviderZoneId = null;

    /** @var int|null Максимальный срок доставки в рабочих днях */
    public ?int $maxTerm = null;

    /** @var int|null Минимальный срок доставки в рабочих днях */
    public ?int $minTerm = null;

    /** @var string|null Человекопонятное название зоны (будет использоваться в интерфейсной части) */
    public ?string $name = null;
}
