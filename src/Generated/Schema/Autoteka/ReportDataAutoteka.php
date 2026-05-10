<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\Autoteka;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/ReportDataAutoteka.
 */
class ReportDataAutoteka extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['accidents' => 'accidents', 'arbitrationCases' => 'arbitrationCases', 'avitoAuctions' => 'avitoAuctions', 'avitoItems' => 'avitoItems', 'avitoPriceValuation' => 'avitoPriceValuation', 'carImage' => 'carImage', 'carsharingData' => 'carsharingData', 'crashesHistory' => 'crashesHistory', 'customs' => 'customs', 'diagnostics' => 'diagnostics', 'epts' => 'epts', 'equipment' => 'equipment', 'events' => 'events', 'eventsOthersHistory' => 'eventsOthersHistory', 'extendedSpecifications' => 'extendedSpecifications', 'externalPlacements' => 'externalPlacements', 'fines' => 'fines', 'head' => 'head', 'insights' => 'insights', 'insurancePayments' => 'insurancePayments', 'insurancePolicies' => 'insurancePolicies', 'leasing' => 'leasing', 'maxPosterPriceValuation' => 'maxPosterPriceValuation', 'other' => 'other', 'ownersHistory' => 'ownersHistory', 'paidFines' => 'paidFines', 'priceStat' => 'priceStat', 'priceStatForNewCars' => 'priceStatForNewCars', 'ptsData' => 'ptsData', 'ptsType' => 'ptsType', 'recalls' => 'recalls', 'registrationActions' => 'registrationActions', 'restrictions' => 'restrictions', 'salvageCarAuctionRecords' => 'salvageCarAuctionRecords', 'serviceInfo' => 'serviceInfo', 'taxiData' => 'taxiData', 'teaser' => 'teaser', 'techInspectionHistory' => 'techInspectionHistory', 'vehicleSpecifications' => 'vehicleSpecifications'];

    protected const REQUIRED_FIELDS = ['head', 'carImage', 'events', 'equipment', 'ownersHistory', 'registrationActions', 'restrictions', 'other', 'avitoItems', 'eventsOthersHistory', 'crashesHistory', 'accidents', 'techInspectionHistory', 'customs', 'serviceInfo', 'diagnostics', 'ptsData', 'recalls', 'insurancePayments', 'salvageCarAuctionRecords', 'arbitrationCases', 'leasing', 'avitoAuctions'];

    protected const NULLABLE_FIELDS = ['externalPlacements', 'ptsType'];

    protected const CASTS = ['arbitrationCases' => \php_client_avito\Generated\Schema\Autoteka\ArbitrationCases::class, 'avitoAuctions' => \php_client_avito\Generated\Schema\Autoteka\AvitoAuctions::class, 'avitoItems' => [\php_client_avito\Generated\Schema\Autoteka\AvitoItemAutoteka::class], 'avitoPriceValuation' => \php_client_avito\Generated\Schema\Autoteka\AvitoPriceValuation::class, 'carImage' => \php_client_avito\Generated\Schema\Autoteka\CarImageAutoteka::class, 'carsharingData' => \php_client_avito\Generated\Schema\Autoteka\CarsharingDataAutoteka::class, 'crashesHistory' => [\php_client_avito\Generated\Schema\Autoteka\CrashesHistoryAutoteka::class], 'customs' => \php_client_avito\Generated\Schema\Autoteka\Customs::class, 'diagnostics' => \php_client_avito\Generated\Schema\Autoteka\Diagnostics::class, 'epts' => \php_client_avito\Generated\Schema\Autoteka\Epts::class, 'equipment' => \php_client_avito\Generated\Schema\Autoteka\EquipmentAutoteka::class, 'events' => \php_client_avito\Generated\Schema\Autoteka\EventsAutoteka::class, 'eventsOthersHistory' => [\php_client_avito\Generated\Schema\Autoteka\EventsOthersHistoryAutoteka::class], 'extendedSpecifications' => \php_client_avito\Generated\Schema\Autoteka\ExtendedSpecifications::class, 'externalPlacements' => [\php_client_avito\Generated\Schema\Autoteka\ExternalPlacementAutoteka::class], 'fines' => \php_client_avito\Generated\Schema\Autoteka\FinesAutoteka::class, 'head' => \php_client_avito\Generated\Schema\Autoteka\HeadAutoteka::class, 'insights' => \php_client_avito\Generated\Schema\Autoteka\Insights::class, 'insurancePayments' => \php_client_avito\Generated\Schema\Autoteka\InsurancePayments::class, 'insurancePolicies' => \php_client_avito\Generated\Schema\Autoteka\InsurancePoliciesAutoteka::class, 'leasing' => \php_client_avito\Generated\Schema\Autoteka\Leasing::class, 'maxPosterPriceValuation' => \php_client_avito\Generated\Schema\Autoteka\MaxPosterPriceValuation::class, 'other' => [\php_client_avito\Generated\Schema\Autoteka\OtherAutoteka::class], 'ownersHistory' => [\php_client_avito\Generated\Schema\Autoteka\OwnersHistoryAutoteka::class], 'paidFines' => \php_client_avito\Generated\Schema\Autoteka\FinesAutoteka::class, 'priceStat' => \php_client_avito\Generated\Schema\Autoteka\PriceStatAutoteka::class, 'priceStatForNewCars' => \php_client_avito\Generated\Schema\Autoteka\PriceStatForNewCarsAutoteka::class, 'ptsData' => \php_client_avito\Generated\Schema\Autoteka\PtsData::class, 'recalls' => \php_client_avito\Generated\Schema\Autoteka\Recalls::class, 'restrictions' => \php_client_avito\Generated\Schema\Autoteka\RestrictionsAutoteka::class, 'salvageCarAuctionRecords' => \php_client_avito\Generated\Schema\Autoteka\SalvageCarAuctionRecords::class, 'serviceInfo' => \php_client_avito\Generated\Schema\Autoteka\ServiceInfoAutoteka::class, 'taxiData' => \php_client_avito\Generated\Schema\Autoteka\TaxiDataAutoteka::class, 'teaser' => \php_client_avito\Generated\Schema\Autoteka\AutotekaTeaser::class, 'techInspectionHistory' => \php_client_avito\Generated\Schema\Autoteka\TechInspectionHistory::class, 'vehicleSpecifications' => \php_client_avito\Generated\Schema\Autoteka\VehicleSpecifications::class];

    /** @var array<string, mixed> Schema field accidents */
    public array $accidents;

    /** @var \php_client_avito\Generated\Schema\Autoteka\ArbitrationCases Schema field arbitrationCases */
    public \php_client_avito\Generated\Schema\Autoteka\ArbitrationCases $arbitrationCases;

    /** @var \php_client_avito\Generated\Schema\Autoteka\AvitoAuctions Schema field avitoAuctions */
    public \php_client_avito\Generated\Schema\Autoteka\AvitoAuctions $avitoAuctions;

    /** @var array<int, \php_client_avito\Generated\Schema\Autoteka\AvitoItemAutoteka> История публикации на Авито */
    public array $avitoItems;

    /** @var \php_client_avito\Generated\Schema\Autoteka\AvitoPriceValuation|null Schema field avitoPriceValuation */
    public ?\php_client_avito\Generated\Schema\Autoteka\AvitoPriceValuation $avitoPriceValuation = null;

    /** @var \php_client_avito\Generated\Schema\Autoteka\CarImageAutoteka Schema field carImage */
    public \php_client_avito\Generated\Schema\Autoteka\CarImageAutoteka $carImage;

    /** @var \php_client_avito\Generated\Schema\Autoteka\CarsharingDataAutoteka|null Schema field carsharingData */
    public ?\php_client_avito\Generated\Schema\Autoteka\CarsharingDataAutoteka $carsharingData = null;

    /** @var array<int, \php_client_avito\Generated\Schema\Autoteka\CrashesHistoryAutoteka> Подробная детализация ДТП, блок больше не поддерживается, рекомендуем смотреть блок accidents */
    public array $crashesHistory;

    /** @var \php_client_avito\Generated\Schema\Autoteka\Customs Schema field customs */
    public \php_client_avito\Generated\Schema\Autoteka\Customs $customs;

    /** @var \php_client_avito\Generated\Schema\Autoteka\Diagnostics Schema field diagnostics */
    public \php_client_avito\Generated\Schema\Autoteka\Diagnostics $diagnostics;

    /** @var \php_client_avito\Generated\Schema\Autoteka\Epts|null Schema field epts */
    public ?\php_client_avito\Generated\Schema\Autoteka\Epts $epts = null;

    /** @var \php_client_avito\Generated\Schema\Autoteka\EquipmentAutoteka Schema field equipment */
    public \php_client_avito\Generated\Schema\Autoteka\EquipmentAutoteka $equipment;

    /** @var \php_client_avito\Generated\Schema\Autoteka\EventsAutoteka Schema field events */
    public \php_client_avito\Generated\Schema\Autoteka\EventsAutoteka $events;

    /** @var array<int, \php_client_avito\Generated\Schema\Autoteka\EventsOthersHistoryAutoteka> История владения, включающяя все события произошедшие с авто */
    public array $eventsOthersHistory;

    /** @var \php_client_avito\Generated\Schema\Autoteka\ExtendedSpecifications|null Schema field extendedSpecifications */
    public ?\php_client_avito\Generated\Schema\Autoteka\ExtendedSpecifications $extendedSpecifications = null;

    /** @var array<int, \php_client_avito\Generated\Schema\Autoteka\ExternalPlacementAutoteka>|null Размещения на других площадках */
    public ?array $externalPlacements = null;

    /** @var \php_client_avito\Generated\Schema\Autoteka\FinesAutoteka|null Schema field fines */
    public ?\php_client_avito\Generated\Schema\Autoteka\FinesAutoteka $fines = null;

    /** @var \php_client_avito\Generated\Schema\Autoteka\HeadAutoteka Schema field head */
    public \php_client_avito\Generated\Schema\Autoteka\HeadAutoteka $head;

    /** @var \php_client_avito\Generated\Schema\Autoteka\Insights|null Schema field insights */
    public ?\php_client_avito\Generated\Schema\Autoteka\Insights $insights = null;

    /** @var \php_client_avito\Generated\Schema\Autoteka\InsurancePayments Schema field insurancePayments */
    public \php_client_avito\Generated\Schema\Autoteka\InsurancePayments $insurancePayments;

    /** @var \php_client_avito\Generated\Schema\Autoteka\InsurancePoliciesAutoteka|null Schema field insurancePolicies */
    public ?\php_client_avito\Generated\Schema\Autoteka\InsurancePoliciesAutoteka $insurancePolicies = null;

    /** @var \php_client_avito\Generated\Schema\Autoteka\Leasing Schema field leasing */
    public \php_client_avito\Generated\Schema\Autoteka\Leasing $leasing;

    /** @var \php_client_avito\Generated\Schema\Autoteka\MaxPosterPriceValuation|null Schema field maxPosterPriceValuation */
    public ?\php_client_avito\Generated\Schema\Autoteka\MaxPosterPriceValuation $maxPosterPriceValuation = null;

    /** @var array<int, \php_client_avito\Generated\Schema\Autoteka\OtherAutoteka> Прочее */
    public array $other;

    /** @var array<int, \php_client_avito\Generated\Schema\Autoteka\OwnersHistoryAutoteka> История регистраций авто, блок не поддерживается, рекомендуем использовать registrationActions */
    public array $ownersHistory;

    /** @var \php_client_avito\Generated\Schema\Autoteka\FinesAutoteka|null Schema field paidFines */
    public ?\php_client_avito\Generated\Schema\Autoteka\FinesAutoteka $paidFines = null;

    /** @var \php_client_avito\Generated\Schema\Autoteka\PriceStatAutoteka|null Schema field priceStat */
    public ?\php_client_avito\Generated\Schema\Autoteka\PriceStatAutoteka $priceStat = null;

    /** @var \php_client_avito\Generated\Schema\Autoteka\PriceStatForNewCarsAutoteka|null Schema field priceStatForNewCars */
    public ?\php_client_avito\Generated\Schema\Autoteka\PriceStatForNewCarsAutoteka $priceStatForNewCars = null;

    /** @var \php_client_avito\Generated\Schema\Autoteka\PtsData Schema field ptsData */
    public \php_client_avito\Generated\Schema\Autoteka\PtsData $ptsData;

    /** @var string|null Тип ПТС */
    public ?string $ptsType = null;

    /** @var \php_client_avito\Generated\Schema\Autoteka\Recalls Schema field recalls */
    public \php_client_avito\Generated\Schema\Autoteka\Recalls $recalls;

    /** @var array<string, mixed> История регистраций авто */
    public array $registrationActions;

    /** @var \php_client_avito\Generated\Schema\Autoteka\RestrictionsAutoteka Schema field restrictions */
    public \php_client_avito\Generated\Schema\Autoteka\RestrictionsAutoteka $restrictions;

    /** @var \php_client_avito\Generated\Schema\Autoteka\SalvageCarAuctionRecords Schema field salvageCarAuctionRecords */
    public \php_client_avito\Generated\Schema\Autoteka\SalvageCarAuctionRecords $salvageCarAuctionRecords;

    /** @var \php_client_avito\Generated\Schema\Autoteka\ServiceInfoAutoteka Schema field serviceInfo */
    public \php_client_avito\Generated\Schema\Autoteka\ServiceInfoAutoteka $serviceInfo;

    /** @var \php_client_avito\Generated\Schema\Autoteka\TaxiDataAutoteka|null Schema field taxiData */
    public ?\php_client_avito\Generated\Schema\Autoteka\TaxiDataAutoteka $taxiData = null;

    /** @var \php_client_avito\Generated\Schema\Autoteka\AutotekaTeaser|null Schema field teaser */
    public ?\php_client_avito\Generated\Schema\Autoteka\AutotekaTeaser $teaser = null;

    /** @var \php_client_avito\Generated\Schema\Autoteka\TechInspectionHistory Schema field techInspectionHistory */
    public \php_client_avito\Generated\Schema\Autoteka\TechInspectionHistory $techInspectionHistory;

    /** @var \php_client_avito\Generated\Schema\Autoteka\VehicleSpecifications|null Schema field vehicleSpecifications */
    public ?\php_client_avito\Generated\Schema\Autoteka\VehicleSpecifications $vehicleSpecifications = null;
}
