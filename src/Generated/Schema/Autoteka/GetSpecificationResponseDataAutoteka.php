<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\Autoteka;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/GetSpecificationResponseDataAutoteka.
 */
class GetSpecificationResponseDataAutoteka extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['documents' => 'documents', 'newCarValuations' => 'newCarValuations', 'specification' => 'specification', 'valuation' => 'valuation'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['newCarValuations'];

    protected const CASTS = ['documents' => \php_client_avito\Generated\Schema\Autoteka\DocumentsResultAutoteka::class, 'newCarValuations' => [\php_client_avito\Generated\Schema\Autoteka\NewCarValuation::class], 'specification' => \php_client_avito\Generated\Schema\Autoteka\SpecificationResultAutoteka::class, 'valuation' => \php_client_avito\Generated\Schema\Autoteka\AvitoPriceValuation::class];

    /** @var \php_client_avito\Generated\Schema\Autoteka\DocumentsResultAutoteka|null Schema field documents */
    public ?\php_client_avito\Generated\Schema\Autoteka\DocumentsResultAutoteka $documents = null;

    /** @var array<int, \php_client_avito\Generated\Schema\Autoteka\NewCarValuation>|null Массив оценок новых авто с аналогичной спецификацией.

Чтобы подключить эту возможность, обратитесь к менеджеру Автотеки.
 */
    public ?array $newCarValuations = null;

    /** @var \php_client_avito\Generated\Schema\Autoteka\SpecificationResultAutoteka|null Schema field specification */
    public ?\php_client_avito\Generated\Schema\Autoteka\SpecificationResultAutoteka $specification = null;

    /** @var \php_client_avito\Generated\Schema\Autoteka\AvitoPriceValuation|null Schema field valuation */
    public ?\php_client_avito\Generated\Schema\Autoteka\AvitoPriceValuation $valuation = null;
}
