<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoload;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoload/ReportAutoload.
 */
class ReportAutoload extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['ads' => 'ads', 'customer_name' => 'customer_name', 'finished_at' => 'finished_at', 'generated_at' => 'generated_at', 'listing_fee' => 'listing_fee', 'started_at' => 'started_at', 'status' => 'status', 'vas' => 'vas', 'version' => 'version'];

    protected const REQUIRED_FIELDS = ['id', 'ads', 'finished_at', 'started_at', 'status', 'customer_name', 'generated_at', 'version'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var array<int, array<string, mixed>> Список объявлений */
    public array $ads;

    /** @var string Название организации */
    public string $customer_name;

    /** @var string Время окончания выгрузки объявлений на сайт */
    public string $finished_at;

    /** @var string Время генерации данного отчета */
    public string $generated_at;

    /** @var array<int, array<string, mixed>>|null Использованные при публикации пакеты размещения */
    public ?array $listing_fee = null;

    /** @var string Время создания отчета */
    public string $started_at;

    /** @var string Общий статус выгрузки */
    public string $status;

    /** @var array<int, array<string, mixed>>|null Какие были применены услуги при данной выгрузке */
    public ?array $vas = null;

    /** @var string Версия формата отчета */
    public string $version;
}
