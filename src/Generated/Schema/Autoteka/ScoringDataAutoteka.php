<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoteka;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/ScoringDataAutoteka.
 */
class ScoringDataAutoteka extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['accidents' => 'accidents', 'carsharing' => 'carsharing', 'epts' => 'epts', 'import' => 'import', 'leasing' => 'leasing', 'placements' => 'placements', 'pledges' => 'pledges', 'priceEvaluation' => 'priceEvaluation', 'registrations' => 'registrations', 'restrictions' => 'restrictions', 'seriousDamage' => 'seriousDamage', 'stealing' => 'stealing', 'taxi' => 'taxi', 'techSpecification' => 'techSpecification'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['carsharing', 'epts', 'import', 'leasing', 'pledges', 'priceEvaluation', 'registrations', 'restrictions', 'stealing', 'taxi'];

    protected const CASTS = ['accidents' => \Andy87\ClientsAvito\Generated\Schema\Autoteka\ScoringAccidents::class, 'placements' => \Andy87\ClientsAvito\Generated\Schema\Autoteka\ScoringPlacements::class, 'seriousDamage' => \Andy87\ClientsAvito\Generated\Schema\Autoteka\ScoringSeriousDamage::class, 'techSpecification' => \Andy87\ClientsAvito\Generated\Schema\Autoteka\ScoringTechSpecification::class];

    /** @var \Andy87\ClientsAvito\Generated\Schema\Autoteka\ScoringAccidents|null Schema field accidents */
    public ?\Andy87\ClientsAvito\Generated\Schema\Autoteka\ScoringAccidents $accidents = null;

    /** @var array<string, mixed>|null Каршеринг */
    public ?array $carsharing = null;

    /** @var array<string, mixed>|null ЭПТС */
    public ?array $epts = null;

    /** @var array<string, mixed>|null Ввоз из-за рубежа */
    public ?array $import = null;

    /** @var array<string, mixed>|null Лизинг */
    public ?array $leasing = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Autoteka\ScoringPlacements|null Schema field placements */
    public ?\Andy87\ClientsAvito\Generated\Schema\Autoteka\ScoringPlacements $placements = null;

    /** @var array<string, mixed>|null Залоги */
    public ?array $pledges = null;

    /** @var array<string, mixed>|null Оценка автомобиля */
    public ?array $priceEvaluation = null;

    /** @var array<string, mixed>|null Регистрации авто */
    public ?array $registrations = null;

    /** @var array<string, mixed>|null Ограничения */
    public ?array $restrictions = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Autoteka\ScoringSeriousDamage|null Schema field seriousDamage */
    public ?\Andy87\ClientsAvito\Generated\Schema\Autoteka\ScoringSeriousDamage $seriousDamage = null;

    /** @var array<string, mixed>|null Угоны */
    public ?array $stealing = null;

    /** @var array<string, mixed>|null Такси */
    public ?array $taxi = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Autoteka\ScoringTechSpecification|null Schema field techSpecification */
    public ?\Andy87\ClientsAvito\Generated\Schema\Autoteka\ScoringTechSpecification $techSpecification = null;
}
