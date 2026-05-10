<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\Autoteka;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/ValuationBySpecificationResultAutoteka.
 */
class ValuationBySpecificationResultAutoteka extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['brand' => 'brand', 'mileage' => 'mileage', 'model' => 'model', 'newCarValuations' => 'newCarValuations', 'ownersCount' => 'ownersCount', 'status' => 'status', 'valuation' => 'valuation', 'vehicleId' => 'vehicleId', 'year' => 'year'];

    protected const REQUIRED_FIELDS = ['valuation', 'brand', 'model', 'year', 'ownersCount', 'status', 'vehicleId'];

    protected const NULLABLE_FIELDS = ['mileage', 'newCarValuations', 'vehicleId'];

    protected const CASTS = ['newCarValuations' => [\and_y87\php_client_avito\Generated\Schema\Autoteka\NewCarValuation::class], 'valuation' => \and_y87\php_client_avito\Generated\Schema\Autoteka\AvitoPriceValuation::class];

    /** @var string Марка */
    public string $brand;

    /** @var int|null Пробег запрашиваемого авто */
    public ?int $mileage = null;

    /** @var string Модель */
    public string $model;

    /** @var array<int, \and_y87\php_client_avito\Generated\Schema\Autoteka\NewCarValuation>|null Массив оценок новых авто с аналогичной спецификацией.

Чтобы подключить эту возможность, обратитесь к менеджеру Автотеки.
 */
    public ?array $newCarValuations = null;

    /** @var string Количество владельцев */
    public string $ownersCount;

    /** @var string Статус `success`, `notFound` */
    public string $status;

    /** @var \and_y87\php_client_avito\Generated\Schema\Autoteka\AvitoPriceValuation Schema field valuation */
    public \and_y87\php_client_avito\Generated\Schema\Autoteka\AvitoPriceValuation $valuation;

    /** @var string|null Идентификатор запрашиваемого авто (vin/frame) */
    public ?string $vehicleId;

    /** @var int Год выпуска запрашиваемого авто */
    public int $year;
}
