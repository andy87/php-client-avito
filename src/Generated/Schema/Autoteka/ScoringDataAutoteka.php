<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\Autoteka;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/ScoringDataAutoteka.
 */
class ScoringDataAutoteka extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['accidents' => 'accidents', 'carsharing' => 'carsharing', 'epts' => 'epts', 'import' => 'import', 'leasing' => 'leasing', 'placements' => 'placements', 'pledges' => 'pledges', 'priceEvaluation' => 'priceEvaluation', 'registrations' => 'registrations', 'restrictions' => 'restrictions', 'seriousDamage' => 'seriousDamage', 'stealing' => 'stealing', 'taxi' => 'taxi', 'techSpecification' => 'techSpecification'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['carsharing', 'epts', 'import', 'leasing', 'pledges', 'priceEvaluation', 'registrations', 'restrictions', 'stealing', 'taxi'];

    protected const CASTS = ['accidents' => \and_y87\php_client_avito\Generated\Schema\Autoteka\ScoringAccidents::class, 'placements' => \and_y87\php_client_avito\Generated\Schema\Autoteka\ScoringPlacements::class, 'seriousDamage' => \and_y87\php_client_avito\Generated\Schema\Autoteka\ScoringSeriousDamage::class, 'techSpecification' => \and_y87\php_client_avito\Generated\Schema\Autoteka\ScoringTechSpecification::class];

    /** @var \and_y87\php_client_avito\Generated\Schema\Autoteka\ScoringAccidents|null Schema field accidents */
    public ?\and_y87\php_client_avito\Generated\Schema\Autoteka\ScoringAccidents $accidents = null;

    /** @var array<string, mixed>|null Каршеринг */
    public ?array $carsharing = null;

    /** @var array<string, mixed>|null ЭПТС */
    public ?array $epts = null;

    /** @var array<string, mixed>|null Ввоз из-за рубежа */
    public ?array $import = null;

    /** @var array<string, mixed>|null Лизинг */
    public ?array $leasing = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\Autoteka\ScoringPlacements|null Schema field placements */
    public ?\and_y87\php_client_avito\Generated\Schema\Autoteka\ScoringPlacements $placements = null;

    /** @var array<string, mixed>|null Залоги */
    public ?array $pledges = null;

    /** @var array<string, mixed>|null Оценка автомобиля */
    public ?array $priceEvaluation = null;

    /** @var array<string, mixed>|null Регистрации авто */
    public ?array $registrations = null;

    /** @var array<string, mixed>|null Ограничения */
    public ?array $restrictions = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\Autoteka\ScoringSeriousDamage|null Schema field seriousDamage */
    public ?\and_y87\php_client_avito\Generated\Schema\Autoteka\ScoringSeriousDamage $seriousDamage = null;

    /** @var array<string, mixed>|null Угоны */
    public ?array $stealing = null;

    /** @var array<string, mixed>|null Такси */
    public ?array $taxi = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\Autoteka\ScoringTechSpecification|null Schema field techSpecification */
    public ?\and_y87\php_client_avito\Generated\Schema\Autoteka\ScoringTechSpecification $techSpecification = null;
}
