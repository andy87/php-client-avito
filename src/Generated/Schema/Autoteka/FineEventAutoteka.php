<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoteka;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/FineEventAutoteka.
 */
class FineEventAutoteka extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['createdAt' => 'createdAt', 'dateIncident' => 'dateIncident', 'koapCode' => 'koapCode', 'koapText' => 'koapText', 'numPost' => 'numPost', 'status' => 'status', 'sum' => 'sum'];

    protected const REQUIRED_FIELDS = ['koapCode', 'koapText', 'status', 'sum', 'createdAt', 'numPost', 'dateIncident'];

    protected const NULLABLE_FIELDS = ['dateIncident', 'numPost'];

    protected const CASTS = [];

    /** @var int Дата постановления */
    public int $createdAt;

    /** @var int|null Дата правонарушения */
    public ?int $dateIncident;

    /** @var string Статья КАОП */
    public string $koapCode;

    /** @var string Текст статьи КОАП */
    public string $koapText;

    /** @var string|null Номер постановления (УИН) */
    public ?string $numPost;

    /** @var string Неоплачен/Передан ФССП */
    public string $status;

    /** @var int Сумма штрафа без скидки */
    public int $sum;
}
