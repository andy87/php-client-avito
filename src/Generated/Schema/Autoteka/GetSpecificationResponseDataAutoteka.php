<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\Autoteka;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/GetSpecificationResponseDataAutoteka.
 */
class GetSpecificationResponseDataAutoteka extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['documents' => 'documents', 'newCarValuations' => 'newCarValuations', 'specification' => 'specification', 'valuation' => 'valuation'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['newCarValuations'];

    protected const CASTS = ['documents' => \and_y87\php_client_avito\Generated\Schema\Autoteka\DocumentsResultAutoteka::class, 'newCarValuations' => [\and_y87\php_client_avito\Generated\Schema\Autoteka\NewCarValuation::class], 'specification' => \and_y87\php_client_avito\Generated\Schema\Autoteka\SpecificationResultAutoteka::class, 'valuation' => \and_y87\php_client_avito\Generated\Schema\Autoteka\AvitoPriceValuation::class];

    /** @var \and_y87\php_client_avito\Generated\Schema\Autoteka\DocumentsResultAutoteka|null Schema field documents */
    public ?\and_y87\php_client_avito\Generated\Schema\Autoteka\DocumentsResultAutoteka $documents = null;

    /** @var array<int, \and_y87\php_client_avito\Generated\Schema\Autoteka\NewCarValuation>|null Массив оценок новых авто с аналогичной спецификацией.

Чтобы подключить эту возможность, обратитесь к менеджеру Автотеки.
 */
    public ?array $newCarValuations = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\Autoteka\SpecificationResultAutoteka|null Schema field specification */
    public ?\and_y87\php_client_avito\Generated\Schema\Autoteka\SpecificationResultAutoteka $specification = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\Autoteka\AvitoPriceValuation|null Schema field valuation */
    public ?\and_y87\php_client_avito\Generated\Schema\Autoteka\AvitoPriceValuation $valuation = null;
}
