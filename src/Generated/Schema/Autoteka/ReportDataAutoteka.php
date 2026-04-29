<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoteka;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/ReportDataAutoteka.
 */
class ReportDataAutoteka extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['accidents' => 'accidents', 'arbitrationCases' => 'arbitrationCases', 'avitoAuctions' => 'avitoAuctions', 'avitoItems' => 'avitoItems', 'avitoPriceValuation' => 'avitoPriceValuation', 'carImage' => 'carImage', 'carsharingData' => 'carsharingData', 'crashesHistory' => 'crashesHistory', 'customs' => 'customs', 'diagnostics' => 'diagnostics', 'epts' => 'epts', 'equipment' => 'equipment', 'events' => 'events', 'eventsOthersHistory' => 'eventsOthersHistory', 'extendedSpecifications' => 'extendedSpecifications', 'externalPlacements' => 'externalPlacements', 'fines' => 'fines', 'head' => 'head', 'insights' => 'insights', 'insurancePayments' => 'insurancePayments', 'insurancePolicies' => 'insurancePolicies', 'leasing' => 'leasing', 'maxPosterPriceValuation' => 'maxPosterPriceValuation', 'other' => 'other', 'ownersHistory' => 'ownersHistory', 'paidFines' => 'paidFines', 'priceStat' => 'priceStat', 'priceStatForNewCars' => 'priceStatForNewCars', 'ptsData' => 'ptsData', 'ptsType' => 'ptsType', 'recalls' => 'recalls', 'registrationActions' => 'registrationActions', 'restrictions' => 'restrictions', 'salvageCarAuctionRecords' => 'salvageCarAuctionRecords', 'serviceInfo' => 'serviceInfo', 'taxiData' => 'taxiData', 'teaser' => 'teaser', 'techInspectionHistory' => 'techInspectionHistory', 'vehicleSpecifications' => 'vehicleSpecifications'];

    protected const REQUIRED_FIELDS = ['head', 'carImage', 'events', 'equipment', 'ownersHistory', 'registrationActions', 'restrictions', 'other', 'avitoItems', 'eventsOthersHistory', 'crashesHistory', 'accidents', 'techInspectionHistory', 'customs', 'serviceInfo', 'diagnostics', 'ptsData', 'recalls', 'insurancePayments', 'salvageCarAuctionRecords', 'arbitrationCases', 'leasing', 'avitoAuctions'];

    protected const NULLABLE_FIELDS = ['externalPlacements', 'ptsType'];

    protected const CASTS = ['arbitrationCases' => \Andy87\ClientsAvito\Generated\Schema\Autoteka\ArbitrationCases::class, 'avitoAuctions' => \Andy87\ClientsAvito\Generated\Schema\Autoteka\AvitoAuctions::class, 'avitoItems' => [\Andy87\ClientsAvito\Generated\Schema\Autoteka\AvitoItemAutoteka::class], 'avitoPriceValuation' => \Andy87\ClientsAvito\Generated\Schema\Autoteka\AvitoPriceValuation::class, 'carImage' => \Andy87\ClientsAvito\Generated\Schema\Autoteka\CarImageAutoteka::class, 'carsharingData' => \Andy87\ClientsAvito\Generated\Schema\Autoteka\CarsharingDataAutoteka::class, 'crashesHistory' => [\Andy87\ClientsAvito\Generated\Schema\Autoteka\CrashesHistoryAutoteka::class], 'customs' => \Andy87\ClientsAvito\Generated\Schema\Autoteka\Customs::class, 'diagnostics' => \Andy87\ClientsAvito\Generated\Schema\Autoteka\Diagnostics::class, 'epts' => \Andy87\ClientsAvito\Generated\Schema\Autoteka\Epts::class, 'equipment' => \Andy87\ClientsAvito\Generated\Schema\Autoteka\EquipmentAutoteka::class, 'events' => \Andy87\ClientsAvito\Generated\Schema\Autoteka\EventsAutoteka::class, 'eventsOthersHistory' => [\Andy87\ClientsAvito\Generated\Schema\Autoteka\EventsOthersHistoryAutoteka::class], 'extendedSpecifications' => \Andy87\ClientsAvito\Generated\Schema\Autoteka\ExtendedSpecifications::class, 'externalPlacements' => [\Andy87\ClientsAvito\Generated\Schema\Autoteka\ExternalPlacementAutoteka::class], 'fines' => \Andy87\ClientsAvito\Generated\Schema\Autoteka\FinesAutoteka::class, 'head' => \Andy87\ClientsAvito\Generated\Schema\Autoteka\HeadAutoteka::class, 'insights' => \Andy87\ClientsAvito\Generated\Schema\Autoteka\Insights::class, 'insurancePayments' => \Andy87\ClientsAvito\Generated\Schema\Autoteka\InsurancePayments::class, 'insurancePolicies' => \Andy87\ClientsAvito\Generated\Schema\Autoteka\InsurancePoliciesAutoteka::class, 'leasing' => \Andy87\ClientsAvito\Generated\Schema\Autoteka\Leasing::class, 'maxPosterPriceValuation' => \Andy87\ClientsAvito\Generated\Schema\Autoteka\MaxPosterPriceValuation::class, 'other' => [\Andy87\ClientsAvito\Generated\Schema\Autoteka\OtherAutoteka::class], 'ownersHistory' => [\Andy87\ClientsAvito\Generated\Schema\Autoteka\OwnersHistoryAutoteka::class], 'paidFines' => \Andy87\ClientsAvito\Generated\Schema\Autoteka\FinesAutoteka::class, 'priceStat' => \Andy87\ClientsAvito\Generated\Schema\Autoteka\PriceStatAutoteka::class, 'priceStatForNewCars' => \Andy87\ClientsAvito\Generated\Schema\Autoteka\PriceStatForNewCarsAutoteka::class, 'ptsData' => \Andy87\ClientsAvito\Generated\Schema\Autoteka\PtsData::class, 'recalls' => \Andy87\ClientsAvito\Generated\Schema\Autoteka\Recalls::class, 'restrictions' => \Andy87\ClientsAvito\Generated\Schema\Autoteka\RestrictionsAutoteka::class, 'salvageCarAuctionRecords' => \Andy87\ClientsAvito\Generated\Schema\Autoteka\SalvageCarAuctionRecords::class, 'serviceInfo' => \Andy87\ClientsAvito\Generated\Schema\Autoteka\ServiceInfoAutoteka::class, 'taxiData' => \Andy87\ClientsAvito\Generated\Schema\Autoteka\TaxiDataAutoteka::class, 'teaser' => \Andy87\ClientsAvito\Generated\Schema\Autoteka\AutotekaTeaser::class, 'techInspectionHistory' => \Andy87\ClientsAvito\Generated\Schema\Autoteka\TechInspectionHistory::class, 'vehicleSpecifications' => \Andy87\ClientsAvito\Generated\Schema\Autoteka\VehicleSpecifications::class];

    /** @var array<string, mixed> Schema field accidents */
    public array $accidents;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Autoteka\ArbitrationCases Schema field arbitrationCases */
    public \Andy87\ClientsAvito\Generated\Schema\Autoteka\ArbitrationCases $arbitrationCases;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Autoteka\AvitoAuctions Schema field avitoAuctions */
    public \Andy87\ClientsAvito\Generated\Schema\Autoteka\AvitoAuctions $avitoAuctions;

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\Autoteka\AvitoItemAutoteka> История публикации на Авито */
    public array $avitoItems;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Autoteka\AvitoPriceValuation|null Schema field avitoPriceValuation */
    public ?\Andy87\ClientsAvito\Generated\Schema\Autoteka\AvitoPriceValuation $avitoPriceValuation = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Autoteka\CarImageAutoteka Schema field carImage */
    public \Andy87\ClientsAvito\Generated\Schema\Autoteka\CarImageAutoteka $carImage;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Autoteka\CarsharingDataAutoteka|null Schema field carsharingData */
    public ?\Andy87\ClientsAvito\Generated\Schema\Autoteka\CarsharingDataAutoteka $carsharingData = null;

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\Autoteka\CrashesHistoryAutoteka> Подробная детализация ДТП, блок больше не поддерживается, рекомендуем смотреть блок accidents */
    public array $crashesHistory;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Autoteka\Customs Schema field customs */
    public \Andy87\ClientsAvito\Generated\Schema\Autoteka\Customs $customs;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Autoteka\Diagnostics Schema field diagnostics */
    public \Andy87\ClientsAvito\Generated\Schema\Autoteka\Diagnostics $diagnostics;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Autoteka\Epts|null Schema field epts */
    public ?\Andy87\ClientsAvito\Generated\Schema\Autoteka\Epts $epts = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Autoteka\EquipmentAutoteka Schema field equipment */
    public \Andy87\ClientsAvito\Generated\Schema\Autoteka\EquipmentAutoteka $equipment;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Autoteka\EventsAutoteka Schema field events */
    public \Andy87\ClientsAvito\Generated\Schema\Autoteka\EventsAutoteka $events;

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\Autoteka\EventsOthersHistoryAutoteka> История владения, включающяя все события произошедшие с авто */
    public array $eventsOthersHistory;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Autoteka\ExtendedSpecifications|null Schema field extendedSpecifications */
    public ?\Andy87\ClientsAvito\Generated\Schema\Autoteka\ExtendedSpecifications $extendedSpecifications = null;

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\Autoteka\ExternalPlacementAutoteka>|null Размещения на других площадках */
    public ?array $externalPlacements = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Autoteka\FinesAutoteka|null Schema field fines */
    public ?\Andy87\ClientsAvito\Generated\Schema\Autoteka\FinesAutoteka $fines = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Autoteka\HeadAutoteka Schema field head */
    public \Andy87\ClientsAvito\Generated\Schema\Autoteka\HeadAutoteka $head;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Autoteka\Insights|null Schema field insights */
    public ?\Andy87\ClientsAvito\Generated\Schema\Autoteka\Insights $insights = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Autoteka\InsurancePayments Schema field insurancePayments */
    public \Andy87\ClientsAvito\Generated\Schema\Autoteka\InsurancePayments $insurancePayments;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Autoteka\InsurancePoliciesAutoteka|null Schema field insurancePolicies */
    public ?\Andy87\ClientsAvito\Generated\Schema\Autoteka\InsurancePoliciesAutoteka $insurancePolicies = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Autoteka\Leasing Schema field leasing */
    public \Andy87\ClientsAvito\Generated\Schema\Autoteka\Leasing $leasing;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Autoteka\MaxPosterPriceValuation|null Schema field maxPosterPriceValuation */
    public ?\Andy87\ClientsAvito\Generated\Schema\Autoteka\MaxPosterPriceValuation $maxPosterPriceValuation = null;

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\Autoteka\OtherAutoteka> Прочее */
    public array $other;

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\Autoteka\OwnersHistoryAutoteka> История регистраций авто, блок не поддерживается, рекомендуем использовать registrationActions */
    public array $ownersHistory;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Autoteka\FinesAutoteka|null Schema field paidFines */
    public ?\Andy87\ClientsAvito\Generated\Schema\Autoteka\FinesAutoteka $paidFines = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Autoteka\PriceStatAutoteka|null Schema field priceStat */
    public ?\Andy87\ClientsAvito\Generated\Schema\Autoteka\PriceStatAutoteka $priceStat = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Autoteka\PriceStatForNewCarsAutoteka|null Schema field priceStatForNewCars */
    public ?\Andy87\ClientsAvito\Generated\Schema\Autoteka\PriceStatForNewCarsAutoteka $priceStatForNewCars = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Autoteka\PtsData Schema field ptsData */
    public \Andy87\ClientsAvito\Generated\Schema\Autoteka\PtsData $ptsData;

    /** @var string|null Тип ПТС */
    public ?string $ptsType = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Autoteka\Recalls Schema field recalls */
    public \Andy87\ClientsAvito\Generated\Schema\Autoteka\Recalls $recalls;

    /** @var array<string, mixed> История регистраций авто */
    public array $registrationActions;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Autoteka\RestrictionsAutoteka Schema field restrictions */
    public \Andy87\ClientsAvito\Generated\Schema\Autoteka\RestrictionsAutoteka $restrictions;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Autoteka\SalvageCarAuctionRecords Schema field salvageCarAuctionRecords */
    public \Andy87\ClientsAvito\Generated\Schema\Autoteka\SalvageCarAuctionRecords $salvageCarAuctionRecords;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Autoteka\ServiceInfoAutoteka Schema field serviceInfo */
    public \Andy87\ClientsAvito\Generated\Schema\Autoteka\ServiceInfoAutoteka $serviceInfo;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Autoteka\TaxiDataAutoteka|null Schema field taxiData */
    public ?\Andy87\ClientsAvito\Generated\Schema\Autoteka\TaxiDataAutoteka $taxiData = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Autoteka\AutotekaTeaser|null Schema field teaser */
    public ?\Andy87\ClientsAvito\Generated\Schema\Autoteka\AutotekaTeaser $teaser = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Autoteka\TechInspectionHistory Schema field techInspectionHistory */
    public \Andy87\ClientsAvito\Generated\Schema\Autoteka\TechInspectionHistory $techInspectionHistory;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Autoteka\VehicleSpecifications|null Schema field vehicleSpecifications */
    public ?\Andy87\ClientsAvito\Generated\Schema\Autoteka\VehicleSpecifications $vehicleSpecifications = null;
}
