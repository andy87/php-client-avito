<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\Autoteka;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/RequestValuationBySpecificationResolve.
 */
class RequestValuationBySpecificationResolve extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['location' => 'location', 'mileage' => 'mileage', 'specification' => 'specification', 'vehicleId' => 'vehicleId'];

    protected const REQUIRED_FIELDS = ['specification'];

    protected const NULLABLE_FIELDS = ['location', 'mileage', 'vehicleId'];

    protected const CASTS = [];

    /** @var array<string, mixed>|null Schema field location */
    public ?array $location = null;

    /** @var int|null Пробег в км */
    public ?int $mileage = null;

    /** @var array<string, mixed> Schema field specification */
    public array $specification;

    /** @var string|null Идентификатор авто (vin/frame). */
    public ?string $vehicleId = null;
}
