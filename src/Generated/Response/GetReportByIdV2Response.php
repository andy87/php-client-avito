<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response;

use Andy87\ClientsBase\Response\AbstractResponse;

/**
 * DTO ответа Avito API getReportByIdV2.
 */
class GetReportByIdV2Response extends AbstractResponse
{
    protected const FIELD_MAP = ['events' => 'events', 'feed_url' => 'feed_url', 'finished_at' => 'finished_at', 'listing_fees' => 'listing_fees', 'report_id' => 'report_id', 'section_stats' => 'section_stats', 'source' => 'source', 'started_at' => 'started_at', 'status' => 'status'];

    protected const REQUIRED_FIELDS = ['report_id', 'started_at', 'finished_at', 'status', 'section_stats', 'feed_url', 'source', 'events'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const MODEL = \Andy87\ClientsAvito\Generated\Schema\Autoload\ReportAutoloadV2::class;

    /** @var array<int, array<string, mixed>> Ошибки и предупреждения, которые относятся ко всей выгрузке */
    public array $events;

    /** @var string Ссылка на копию файла с объявлениями в момент начала загрузки */
    public string $feed_url;

    /** @var string Дата и время закрытия отчёта (окончания выгрузки) */
    public string $finished_at;

    /** @var array<string, mixed>|null Статистика по списаниям за размещения объявлений, которые произошли в результате выгрузки */
    public ?array $listing_fees = null;

    /** @var int Идентификатор отчёта (ID) */
    public int $report_id;

    /** @var array<string, mixed> Разделы отчёта с количеством объявлений в каждом */
    public array $section_stats;

    /** @var string Источник загрузки
 - email – Загрузка файла по почте
 - url – Загрузка файла по ссылке
 - web – Загрузка файла вручную в профиле Авито
 - openapi – Загрузка по API с помощью метода Загрузка файла по ссылке
 */
    public string $source;

    /** @var string Дата и время создания отчёта (начала выгрузки) */
    public string $started_at;

    /** @var string Статус отчёта
- processing – Отчёт в процессе, загрузка ещё не завершена
- success – Загрузка прошла без ошибок
- success_warning – В части объявлений есть ошибки
- error – Загрузка не удалась
 */
    public string $status;
}
