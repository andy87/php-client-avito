<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoteka;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/ResponseMonitoringGetRegAction.
 */
class ResponseMonitoringGetRegAction extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['actualAt' => 'actualAt', 'brand' => 'brand', 'model' => 'model', 'operationCode' => 'operationCode', 'operationDate' => 'operationDate', 'operationDateFrom' => 'operationDateFrom', 'operationDateTo' => 'operationDateTo', 'ownerCode' => 'ownerCode', 'vin' => 'vin', 'year' => 'year'];

    protected const REQUIRED_FIELDS = ['vin', 'operationCode'];

    protected const NULLABLE_FIELDS = ['actualAt', 'operationDateTo', 'ownerCode'];

    protected const CASTS = [];

    /** @var int|null Дата актуальности в формате Unixtime */
    public ?int $actualAt = null;

    /** @var string|null Марка авто */
    public ?string $brand = null;

    /** @var string|null Модель авто */
    public ?string $model = null;

    /** @var int Код регистрационного действий согласно справочнику */
    public int $operationCode;

    /** @var string|null __DEPRECATED.__
__Используйте поле operationDateFrom.__
Дата регистрационного действия.
 */
    public ?string $operationDate = null;

    /** @var string|null Дата начала рег. действия */
    public ?string $operationDateFrom = null;

    /** @var string|null Дата окончания рег. действия, null если длится по настоящее время */
    public ?string $operationDateTo = null;

    /** @var int|null Код владельца: 1 — юр. лицо, 2 — физ. лицо */
    public ?int $ownerCode = null;

    /** @var string VIN-номер авто */
    public string $vin;

    /** @var int|null Год выпуска авто */
    public ?int $year = null;
}
