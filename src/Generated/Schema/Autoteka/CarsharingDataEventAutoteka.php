<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoteka;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/CarsharingDataEventAutoteka.
 */
class CarsharingDataEventAutoteka extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['company' => 'company', 'inaccurateData' => 'inaccurateData'];

    protected const REQUIRED_FIELDS = ['company', 'inaccurateData'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Компания эксплуатант ТС */
    public string $company;

    /** @var bool Автомобиль мог не использоваться в каршеринге. Такое возможно, если компания оказывает услуги лизинга помимо каршеринга. */
    public bool $inaccurateData;
}
