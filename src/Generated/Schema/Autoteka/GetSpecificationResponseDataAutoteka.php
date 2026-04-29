<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoteka;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/GetSpecificationResponseDataAutoteka.
 */
class GetSpecificationResponseDataAutoteka extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['documents' => 'documents', 'newCarValuations' => 'newCarValuations', 'specification' => 'specification', 'valuation' => 'valuation'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['newCarValuations'];

    protected const CASTS = ['documents' => \Andy87\ClientsAvito\Generated\Schema\Autoteka\DocumentsResultAutoteka::class, 'newCarValuations' => [\Andy87\ClientsAvito\Generated\Schema\Autoteka\NewCarValuation::class], 'specification' => \Andy87\ClientsAvito\Generated\Schema\Autoteka\SpecificationResultAutoteka::class, 'valuation' => \Andy87\ClientsAvito\Generated\Schema\Autoteka\AvitoPriceValuation::class];

    /** @var \Andy87\ClientsAvito\Generated\Schema\Autoteka\DocumentsResultAutoteka|null Schema field documents */
    public ?\Andy87\ClientsAvito\Generated\Schema\Autoteka\DocumentsResultAutoteka $documents = null;

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\Autoteka\NewCarValuation>|null Массив оценок новых авто с аналогичной спецификацией.

Чтобы подключить эту возможность, обратитесь к менеджеру Автотеки.
 */
    public ?array $newCarValuations = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Autoteka\SpecificationResultAutoteka|null Schema field specification */
    public ?\Andy87\ClientsAvito\Generated\Schema\Autoteka\SpecificationResultAutoteka $specification = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Autoteka\AvitoPriceValuation|null Schema field valuation */
    public ?\Andy87\ClientsAvito\Generated\Schema\Autoteka\AvitoPriceValuation $valuation = null;
}
