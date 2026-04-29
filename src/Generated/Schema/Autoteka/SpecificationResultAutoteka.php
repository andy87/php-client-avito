<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoteka;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/SpecificationResultAutoteka.
 */
class SpecificationResultAutoteka extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['equipment' => 'equipment', 'normalizedSpecification' => 'normalizedSpecification', 'plateNumber' => 'plateNumber', 'specificationId' => 'specificationId', 'status' => 'status', 'vehicleId' => 'vehicleId'];

    protected const REQUIRED_FIELDS = ['equipment', 'normalizedSpecification', 'specificationId', 'plateNumber', 'status', 'vehicleId'];

    protected const NULLABLE_FIELDS = ['plateNumber', 'vehicleId'];

    protected const CASTS = ['equipment' => \Andy87\ClientsAvito\Generated\Schema\Autoteka\SpecificationEquipmentAutoteka::class, 'normalizedSpecification' => \Andy87\ClientsAvito\Generated\Schema\Autoteka\SpecificationNormalizedSpecificationAutoteka::class];

    /** @var \Andy87\ClientsAvito\Generated\Schema\Autoteka\SpecificationEquipmentAutoteka Schema field equipment */
    public \Andy87\ClientsAvito\Generated\Schema\Autoteka\SpecificationEquipmentAutoteka $equipment;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Autoteka\SpecificationNormalizedSpecificationAutoteka Schema field normalizedSpecification */
    public \Andy87\ClientsAvito\Generated\Schema\Autoteka\SpecificationNormalizedSpecificationAutoteka $normalizedSpecification;

    /** @var string|null Регистрационный номер */
    public ?string $plateNumber;

    /** @var int Идентификатор спецификации */
    public int $specificationId;

    /** @var string Статус `success`, `processing`, `notFound` */
    public string $status;

    /** @var string|null Идентификатор запрашиваемого авто (vin/frame) */
    public ?string $vehicleId;
}
