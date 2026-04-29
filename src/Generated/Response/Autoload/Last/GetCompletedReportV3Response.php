<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response\Autoload\Last;

use Andy87\ClientsAvito\Generated\Response\GetLastCompletedReportV3Response as BaseGetLastCompletedReportV3Response;

/**
 * Ответ Avito API [GET] /autoload/v3/reports/last_completed_report.
 * 
 * @documentation https://developers.avito.ru/api-catalog/autoload/documentation#operation/getLastCompletedReportV3
 * 
 * @property array<int, array<string, mixed>> $events Ошибки и предупреждения, которые относятся ко всей выгрузке
 * @property array<int, array<string, mixed>>|null $feeds_urls Response field feeds_urls
 * @property string $finished_at Дата и время закрытия отчёта (окончания выгрузки)
 * @property array<string, mixed>|null $listing_fees Статистика по списаниям за размещения объявлений, которые произошли в результате выгрузки
 * @property int $report_id Идентификатор отчёта (ID)
 * @property array<string, mixed> $section_stats Разделы отчёта с количеством объявлений в каждом
 * @property string $source Источник загрузки - email – Загрузка файла по почте - url – Загрузка файла по ссылке - web – Загрузка файла вручную в профиле Авито - openapi – Загрузка по API с помощью метода Загрузка файла по ссылке
 * @property string $started_at Дата и время создания отчёта (начала выгрузки)
 * @property string $status Статус отчёта - processing – Отчёт в процессе, загрузка ещё не завершена - success – Загрузка прошла без ошибок - success_warning – В части объявлений есть ошибки - error – Загрузка не удалась
 */
class GetCompletedReportV3Response extends BaseGetLastCompletedReportV3Response
{
}
