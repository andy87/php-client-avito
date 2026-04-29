<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoteka;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/InsurancePolicyEventAutoteka.
 */
class InsurancePolicyEventAutoteka extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['companyName' => 'companyName', 'createDate' => 'createDate', 'endDate' => 'endDate', 'hasTrailer' => 'hasTrailer', 'isTransit' => 'isTransit', 'kmb' => 'kmb', 'policyIsRestrict' => 'policyIsRestrict', 'policyNumber' => 'policyNumber', 'policySerial' => 'policySerial', 'restrictionCount' => 'restrictionCount', 'startDate' => 'startDate', 'status' => 'status', 'usageTarget' => 'usageTarget'];

    protected const REQUIRED_FIELDS = ['companyName', 'createDate', 'startDate', 'endDate'];

    protected const NULLABLE_FIELDS = ['hasTrailer', 'isTransit', 'kmb', 'policyIsRestrict', 'policyNumber', 'policySerial', 'restrictionCount', 'status', 'usageTarget'];

    protected const CASTS = [];

    /** @var string Страховая компания */
    public string $companyName;

    /** @var int Дата создания полиса в формате Unixtime */
    public int $createDate;

    /** @var int Дата окончания действия полиса в формате Unixtime */
    public int $endDate;

    /** @var bool|null Признак наличия прицепа */
    public ?bool $hasTrailer = null;

    /** @var bool|null Признак нахождения в транзите */
    public ?bool $isTransit = null;

    /** @var float|null KBM (Показатель безаварийного вождения) */
    public ?float $kmb = null;

    /** @var bool|null Ограничение лиц, допущенных к управлению ТС (true - полис с ограничениями, false - без ограничений) */
    public ?bool $policyIsRestrict = null;

    /** @var string|null Номер полиса */
    public ?string $policyNumber = null;

    /** @var string|null Серия полиса */
    public ?string $policySerial = null;

    /** @var int|null Кол-во лиц, допущенных к управлению */
    public ?int $restrictionCount = null;

    /** @var int Дата начала действия полиса в формате Unixtime */
    public int $startDate;

    /** @var string|null Статус страховки */
    public ?string $status = null;

    /** @var string|null Цель использования */
    public ?string $usageTarget = null;
}
