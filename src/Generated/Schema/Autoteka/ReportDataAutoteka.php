<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\Autoteka;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/ReportDataAutoteka.
 */
class ReportDataAutoteka extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['accidents' => 'accidents', 'arbitrationCases' => 'arbitrationCases', 'avitoAuctions' => 'avitoAuctions', 'avitoItems' => 'avitoItems', 'avitoPriceValuation' => 'avitoPriceValuation', 'carImage' => 'carImage', 'carsharingData' => 'carsharingData', 'crashesHistory' => 'crashesHistory', 'customs' => 'customs', 'diagnostics' => 'diagnostics', 'epts' => 'epts', 'equipment' => 'equipment', 'events' => 'events', 'eventsOthersHistory' => 'eventsOthersHistory', 'extendedSpecifications' => 'extendedSpecifications', 'externalPlacements' => 'externalPlacements', 'fines' => 'fines', 'head' => 'head', 'insights' => 'insights', 'insurancePayments' => 'insurancePayments', 'insurancePolicies' => 'insurancePolicies', 'leasing' => 'leasing', 'maxPosterPriceValuation' => 'maxPosterPriceValuation', 'other' => 'other', 'ownersHistory' => 'ownersHistory', 'paidFines' => 'paidFines', 'priceStat' => 'priceStat', 'priceStatForNewCars' => 'priceStatForNewCars', 'ptsData' => 'ptsData', 'ptsType' => 'ptsType', 'recalls' => 'recalls', 'registrationActions' => 'registrationActions', 'restrictions' => 'restrictions', 'salvageCarAuctionRecords' => 'salvageCarAuctionRecords', 'serviceInfo' => 'serviceInfo', 'taxiData' => 'taxiData', 'teaser' => 'teaser', 'techInspectionHistory' => 'techInspectionHistory', 'vehicleSpecifications' => 'vehicleSpecifications'];

    protected const REQUIRED_FIELDS = ['head', 'carImage', 'events', 'equipment', 'ownersHistory', 'registrationActions', 'restrictions', 'other', 'avitoItems', 'eventsOthersHistory', 'crashesHistory', 'accidents', 'techInspectionHistory', 'customs', 'serviceInfo', 'diagnostics', 'ptsData', 'recalls', 'insurancePayments', 'salvageCarAuctionRecords', 'arbitrationCases', 'leasing', 'avitoAuctions'];

    protected const NULLABLE_FIELDS = ['externalPlacements', 'ptsType'];

    protected const CASTS = ['arbitrationCases' => \and_y87\php_client_avito\Generated\Schema\Autoteka\ArbitrationCases::class, 'avitoAuctions' => \and_y87\php_client_avito\Generated\Schema\Autoteka\AvitoAuctions::class, 'avitoItems' => [\and_y87\php_client_avito\Generated\Schema\Autoteka\AvitoItemAutoteka::class], 'avitoPriceValuation' => \and_y87\php_client_avito\Generated\Schema\Autoteka\AvitoPriceValuation::class, 'carImage' => \and_y87\php_client_avito\Generated\Schema\Autoteka\CarImageAutoteka::class, 'carsharingData' => \and_y87\php_client_avito\Generated\Schema\Autoteka\CarsharingDataAutoteka::class, 'crashesHistory' => [\and_y87\php_client_avito\Generated\Schema\Autoteka\CrashesHistoryAutoteka::class], 'customs' => \and_y87\php_client_avito\Generated\Schema\Autoteka\Customs::class, 'diagnostics' => \and_y87\php_client_avito\Generated\Schema\Autoteka\Diagnostics::class, 'epts' => \and_y87\php_client_avito\Generated\Schema\Autoteka\Epts::class, 'equipment' => \and_y87\php_client_avito\Generated\Schema\Autoteka\EquipmentAutoteka::class, 'events' => \and_y87\php_client_avito\Generated\Schema\Autoteka\EventsAutoteka::class, 'eventsOthersHistory' => [\and_y87\php_client_avito\Generated\Schema\Autoteka\EventsOthersHistoryAutoteka::class], 'extendedSpecifications' => \and_y87\php_client_avito\Generated\Schema\Autoteka\ExtendedSpecifications::class, 'externalPlacements' => [\and_y87\php_client_avito\Generated\Schema\Autoteka\ExternalPlacementAutoteka::class], 'fines' => \and_y87\php_client_avito\Generated\Schema\Autoteka\FinesAutoteka::class, 'head' => \and_y87\php_client_avito\Generated\Schema\Autoteka\HeadAutoteka::class, 'insights' => \and_y87\php_client_avito\Generated\Schema\Autoteka\Insights::class, 'insurancePayments' => \and_y87\php_client_avito\Generated\Schema\Autoteka\InsurancePayments::class, 'insurancePolicies' => \and_y87\php_client_avito\Generated\Schema\Autoteka\InsurancePoliciesAutoteka::class, 'leasing' => \and_y87\php_client_avito\Generated\Schema\Autoteka\Leasing::class, 'maxPosterPriceValuation' => \and_y87\php_client_avito\Generated\Schema\Autoteka\MaxPosterPriceValuation::class, 'other' => [\and_y87\php_client_avito\Generated\Schema\Autoteka\OtherAutoteka::class], 'ownersHistory' => [\and_y87\php_client_avito\Generated\Schema\Autoteka\OwnersHistoryAutoteka::class], 'paidFines' => \and_y87\php_client_avito\Generated\Schema\Autoteka\FinesAutoteka::class, 'priceStat' => \and_y87\php_client_avito\Generated\Schema\Autoteka\PriceStatAutoteka::class, 'priceStatForNewCars' => \and_y87\php_client_avito\Generated\Schema\Autoteka\PriceStatForNewCarsAutoteka::class, 'ptsData' => \and_y87\php_client_avito\Generated\Schema\Autoteka\PtsData::class, 'recalls' => \and_y87\php_client_avito\Generated\Schema\Autoteka\Recalls::class, 'restrictions' => \and_y87\php_client_avito\Generated\Schema\Autoteka\RestrictionsAutoteka::class, 'salvageCarAuctionRecords' => \and_y87\php_client_avito\Generated\Schema\Autoteka\SalvageCarAuctionRecords::class, 'serviceInfo' => \and_y87\php_client_avito\Generated\Schema\Autoteka\ServiceInfoAutoteka::class, 'taxiData' => \and_y87\php_client_avito\Generated\Schema\Autoteka\TaxiDataAutoteka::class, 'teaser' => \and_y87\php_client_avito\Generated\Schema\Autoteka\AutotekaTeaser::class, 'techInspectionHistory' => \and_y87\php_client_avito\Generated\Schema\Autoteka\TechInspectionHistory::class, 'vehicleSpecifications' => \and_y87\php_client_avito\Generated\Schema\Autoteka\VehicleSpecifications::class];

    /** @var array<string, mixed> Schema field accidents */
    public array $accidents;

    /** @var \and_y87\php_client_avito\Generated\Schema\Autoteka\ArbitrationCases Schema field arbitrationCases */
    public \and_y87\php_client_avito\Generated\Schema\Autoteka\ArbitrationCases $arbitrationCases;

    /** @var \and_y87\php_client_avito\Generated\Schema\Autoteka\AvitoAuctions Schema field avitoAuctions */
    public \and_y87\php_client_avito\Generated\Schema\Autoteka\AvitoAuctions $avitoAuctions;

    /** @var array<int, \and_y87\php_client_avito\Generated\Schema\Autoteka\AvitoItemAutoteka> История публикации на Авито */
    public array $avitoItems;

    /** @var \and_y87\php_client_avito\Generated\Schema\Autoteka\AvitoPriceValuation|null Schema field avitoPriceValuation */
    public ?\and_y87\php_client_avito\Generated\Schema\Autoteka\AvitoPriceValuation $avitoPriceValuation = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\Autoteka\CarImageAutoteka Schema field carImage */
    public \and_y87\php_client_avito\Generated\Schema\Autoteka\CarImageAutoteka $carImage;

    /** @var \and_y87\php_client_avito\Generated\Schema\Autoteka\CarsharingDataAutoteka|null Schema field carsharingData */
    public ?\and_y87\php_client_avito\Generated\Schema\Autoteka\CarsharingDataAutoteka $carsharingData = null;

    /** @var array<int, \and_y87\php_client_avito\Generated\Schema\Autoteka\CrashesHistoryAutoteka> Подробная детализация ДТП, блок больше не поддерживается, рекомендуем смотреть блок accidents */
    public array $crashesHistory;

    /** @var \and_y87\php_client_avito\Generated\Schema\Autoteka\Customs Schema field customs */
    public \and_y87\php_client_avito\Generated\Schema\Autoteka\Customs $customs;

    /** @var \and_y87\php_client_avito\Generated\Schema\Autoteka\Diagnostics Schema field diagnostics */
    public \and_y87\php_client_avito\Generated\Schema\Autoteka\Diagnostics $diagnostics;

    /** @var \and_y87\php_client_avito\Generated\Schema\Autoteka\Epts|null Schema field epts */
    public ?\and_y87\php_client_avito\Generated\Schema\Autoteka\Epts $epts = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\Autoteka\EquipmentAutoteka Schema field equipment */
    public \and_y87\php_client_avito\Generated\Schema\Autoteka\EquipmentAutoteka $equipment;

    /** @var \and_y87\php_client_avito\Generated\Schema\Autoteka\EventsAutoteka Schema field events */
    public \and_y87\php_client_avito\Generated\Schema\Autoteka\EventsAutoteka $events;

    /** @var array<int, \and_y87\php_client_avito\Generated\Schema\Autoteka\EventsOthersHistoryAutoteka> История владения, включающяя все события произошедшие с авто */
    public array $eventsOthersHistory;

    /** @var \and_y87\php_client_avito\Generated\Schema\Autoteka\ExtendedSpecifications|null Schema field extendedSpecifications */
    public ?\and_y87\php_client_avito\Generated\Schema\Autoteka\ExtendedSpecifications $extendedSpecifications = null;

    /** @var array<int, \and_y87\php_client_avito\Generated\Schema\Autoteka\ExternalPlacementAutoteka>|null Размещения на других площадках */
    public ?array $externalPlacements = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\Autoteka\FinesAutoteka|null Schema field fines */
    public ?\and_y87\php_client_avito\Generated\Schema\Autoteka\FinesAutoteka $fines = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\Autoteka\HeadAutoteka Schema field head */
    public \and_y87\php_client_avito\Generated\Schema\Autoteka\HeadAutoteka $head;

    /** @var \and_y87\php_client_avito\Generated\Schema\Autoteka\Insights|null Schema field insights */
    public ?\and_y87\php_client_avito\Generated\Schema\Autoteka\Insights $insights = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\Autoteka\InsurancePayments Schema field insurancePayments */
    public \and_y87\php_client_avito\Generated\Schema\Autoteka\InsurancePayments $insurancePayments;

    /** @var \and_y87\php_client_avito\Generated\Schema\Autoteka\InsurancePoliciesAutoteka|null Schema field insurancePolicies */
    public ?\and_y87\php_client_avito\Generated\Schema\Autoteka\InsurancePoliciesAutoteka $insurancePolicies = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\Autoteka\Leasing Schema field leasing */
    public \and_y87\php_client_avito\Generated\Schema\Autoteka\Leasing $leasing;

    /** @var \and_y87\php_client_avito\Generated\Schema\Autoteka\MaxPosterPriceValuation|null Schema field maxPosterPriceValuation */
    public ?\and_y87\php_client_avito\Generated\Schema\Autoteka\MaxPosterPriceValuation $maxPosterPriceValuation = null;

    /** @var array<int, \and_y87\php_client_avito\Generated\Schema\Autoteka\OtherAutoteka> Прочее */
    public array $other;

    /** @var array<int, \and_y87\php_client_avito\Generated\Schema\Autoteka\OwnersHistoryAutoteka> История регистраций авто, блок не поддерживается, рекомендуем использовать registrationActions */
    public array $ownersHistory;

    /** @var \and_y87\php_client_avito\Generated\Schema\Autoteka\FinesAutoteka|null Schema field paidFines */
    public ?\and_y87\php_client_avito\Generated\Schema\Autoteka\FinesAutoteka $paidFines = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\Autoteka\PriceStatAutoteka|null Schema field priceStat */
    public ?\and_y87\php_client_avito\Generated\Schema\Autoteka\PriceStatAutoteka $priceStat = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\Autoteka\PriceStatForNewCarsAutoteka|null Schema field priceStatForNewCars */
    public ?\and_y87\php_client_avito\Generated\Schema\Autoteka\PriceStatForNewCarsAutoteka $priceStatForNewCars = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\Autoteka\PtsData Schema field ptsData */
    public \and_y87\php_client_avito\Generated\Schema\Autoteka\PtsData $ptsData;

    /** @var string|null Тип ПТС */
    public ?string $ptsType = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\Autoteka\Recalls Schema field recalls */
    public \and_y87\php_client_avito\Generated\Schema\Autoteka\Recalls $recalls;

    /** @var array<string, mixed> История регистраций авто */
    public array $registrationActions;

    /** @var \and_y87\php_client_avito\Generated\Schema\Autoteka\RestrictionsAutoteka Schema field restrictions */
    public \and_y87\php_client_avito\Generated\Schema\Autoteka\RestrictionsAutoteka $restrictions;

    /** @var \and_y87\php_client_avito\Generated\Schema\Autoteka\SalvageCarAuctionRecords Schema field salvageCarAuctionRecords */
    public \and_y87\php_client_avito\Generated\Schema\Autoteka\SalvageCarAuctionRecords $salvageCarAuctionRecords;

    /** @var \and_y87\php_client_avito\Generated\Schema\Autoteka\ServiceInfoAutoteka Schema field serviceInfo */
    public \and_y87\php_client_avito\Generated\Schema\Autoteka\ServiceInfoAutoteka $serviceInfo;

    /** @var \and_y87\php_client_avito\Generated\Schema\Autoteka\TaxiDataAutoteka|null Schema field taxiData */
    public ?\and_y87\php_client_avito\Generated\Schema\Autoteka\TaxiDataAutoteka $taxiData = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\Autoteka\AutotekaTeaser|null Schema field teaser */
    public ?\and_y87\php_client_avito\Generated\Schema\Autoteka\AutotekaTeaser $teaser = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\Autoteka\TechInspectionHistory Schema field techInspectionHistory */
    public \and_y87\php_client_avito\Generated\Schema\Autoteka\TechInspectionHistory $techInspectionHistory;

    /** @var \and_y87\php_client_avito\Generated\Schema\Autoteka\VehicleSpecifications|null Schema field vehicleSpecifications */
    public ?\and_y87\php_client_avito\Generated\Schema\Autoteka\VehicleSpecifications $vehicleSpecifications = null;
}
