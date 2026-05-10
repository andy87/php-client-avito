<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\Autoteka;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/PreviewDataAutoteka.
 */
class PreviewDataAutoteka extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['brand' => 'brand', 'model' => 'model', 'sellByProSeller' => 'sellByProSeller', 'year' => 'year'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string|null Brand */
    public ?string $brand = null;

    /** @var string|null Model */
    public ?string $model = null;

    /** @var bool|null Если значение поля true, то у продавца есть автомобили, которые размещали на Авито в течение 3 месяцев. Есть шанс, что и эта машина куплена для перепродажи */
    public ?bool $sellByProSeller = null;

    /** @var int|null Year */
    public ?int $year = null;
}
