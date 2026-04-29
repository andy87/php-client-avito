<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoteka;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/AutotekaTeaser.
 */
class AutotekaTeaser extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['hasRegularService' => 'hasRegularService', 'isOneOwner' => 'isOneOwner', 'isRealMileage' => 'isRealMileage', 'withoutCrashes' => 'withoutCrashes'];

    protected const REQUIRED_FIELDS = ['isOneOwner', 'withoutCrashes', 'hasRegularService', 'isRealMileage'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var bool Регулярное ТО */
    public bool $hasRegularService;

    /** @var bool У авто один владелец */
    public bool $isOneOwner;

    /** @var bool Реальный пробег */
    public bool $isRealMileage;

    /** @var bool Без ДТП */
    public bool $withoutCrashes;
}
