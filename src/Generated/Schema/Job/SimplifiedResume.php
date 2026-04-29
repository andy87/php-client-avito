<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Job;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito job/SimplifiedResume.
 */
class SimplifiedResume extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['address_details' => 'address_details', 'age' => 'age', 'created' => 'created', 'driver_licence' => 'driver_licence', 'driver_licence_category' => 'driver_licence_category', 'driving_experience' => 'driving_experience', 'education_level' => 'education_level', 'gender' => 'gender', 'id' => 'id', 'is_purchased' => 'is_purchased', 'location' => 'location', 'medical_book' => 'medical_book', 'nationality' => 'nationality', 'own_transport' => 'own_transport', 'salary' => 'salary', 'specialization' => 'specialization', 'title' => 'title', 'total_experience' => 'total_experience', 'updated' => 'updated'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['address_details' => \Andy87\ClientsAvito\Generated\Schema\Job\AddressDetails::class, 'driver_licence' => \Andy87\ClientsAvito\Generated\Schema\Job\DriverLicence::class, 'driver_licence_category' => \Andy87\ClientsAvito\Generated\Schema\Job\DriverLicenceCategory::class, 'driving_experience' => \Andy87\ClientsAvito\Generated\Schema\Job\DrivingExperience::class, 'education_level' => \Andy87\ClientsAvito\Generated\Schema\Job\EducationLevel::class, 'gender' => \Andy87\ClientsAvito\Generated\Schema\Job\Gender::class, 'location' => \Andy87\ClientsAvito\Generated\Schema\Job\Location::class, 'medical_book' => \Andy87\ClientsAvito\Generated\Schema\Job\MedicalBook::class, 'nationality' => \Andy87\ClientsAvito\Generated\Schema\Job\Citizenship::class, 'own_transport' => \Andy87\ClientsAvito\Generated\Schema\Job\OwnTransport::class, 'specialization' => \Andy87\ClientsAvito\Generated\Schema\Job\Specialization::class];

    /** @var \Andy87\ClientsAvito\Generated\Schema\Job\AddressDetails|null Schema field address_details */
    public ?\Andy87\ClientsAvito\Generated\Schema\Job\AddressDetails $address_details = null;

    /** @var int|null Schema field age */
    public ?int $age = null;

    /** @var string|null Schema field created */
    public ?string $created = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Job\DriverLicence|null Schema field driver_licence */
    public ?\Andy87\ClientsAvito\Generated\Schema\Job\DriverLicence $driver_licence = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Job\DriverLicenceCategory|null Schema field driver_licence_category */
    public ?\Andy87\ClientsAvito\Generated\Schema\Job\DriverLicenceCategory $driver_licence_category = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Job\DrivingExperience|null Schema field driving_experience */
    public ?\Andy87\ClientsAvito\Generated\Schema\Job\DrivingExperience $driving_experience = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Job\EducationLevel|null Schema field education_level */
    public ?\Andy87\ClientsAvito\Generated\Schema\Job\EducationLevel $education_level = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Job\Gender|null Schema field gender */
    public ?\Andy87\ClientsAvito\Generated\Schema\Job\Gender $gender = null;

    /** @var int|null Schema field id */
    public ?int $id = null;

    /** @var bool|null Schema field is_purchased */
    public ?bool $is_purchased = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Job\Location|null Schema field location */
    public ?\Andy87\ClientsAvito\Generated\Schema\Job\Location $location = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Job\MedicalBook|null Schema field medical_book */
    public ?\Andy87\ClientsAvito\Generated\Schema\Job\MedicalBook $medical_book = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Job\Citizenship|null Schema field nationality */
    public ?\Andy87\ClientsAvito\Generated\Schema\Job\Citizenship $nationality = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Job\OwnTransport|null Schema field own_transport */
    public ?\Andy87\ClientsAvito\Generated\Schema\Job\OwnTransport $own_transport = null;

    /** @var float|null Schema field salary */
    public ?float $salary = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Job\Specialization|null Schema field specialization */
    public ?\Andy87\ClientsAvito\Generated\Schema\Job\Specialization $specialization = null;

    /** @var string|null Schema field title */
    public ?string $title = null;

    /** @var int|null Schema field total_experience */
    public ?int $total_experience = null;

    /** @var string|null Schema field updated */
    public ?string $updated = null;
}
