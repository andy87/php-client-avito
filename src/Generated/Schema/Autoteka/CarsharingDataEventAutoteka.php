<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\Autoteka;

use php_client_avito\Schema\AbstractSchemaModel;

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
