<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response\Autoload\Report;

use Andy87\ClientsAvito\Generated\Response\GetReportByIdV2Response as BaseGetReportByIdV2Response;

/**
 * Ответ Avito API [GET] /autoload/v2/reports/{report_id}.
 * 
 * @documentation https://developers.avito.ru/api-catalog/autoload/documentation#operation/getReportByIdV2
 * 
 * @property array<int, array<string, mixed>> $events Ошибки и предупреждения, которые относятся ко всей выгрузке
 * @property string $feed_url Ссылка на копию файла с объявлениями в момент начала загрузки
 * @property string $finished_at Дата и время закрытия отчёта (окончания выгрузки)
 * @property array<string, mixed>|null $listing_fees Статистика по списаниям за размещения объявлений, которые произошли в результате выгрузки
 * @property int $report_id Идентификатор отчёта (ID)
 * @property array<string, mixed> $section_stats Разделы отчёта с количеством объявлений в каждом
 * @property string $source Источник загрузки - email – Загрузка файла по почте - url – Загрузка файла по ссылке - web – Загрузка файла вручную в профиле Авито - openapi – Загрузка по API с помощью метода Загрузка файла по ссылке
 * @property string $started_at Дата и время создания отчёта (начала выгрузки)
 * @property string $status Статус отчёта - processing – Отчёт в процессе, загрузка ещё не завершена - success – Загрузка прошла без ошибок - success_warning – В части объявлений есть ошибки - error – Загрузка не удалась
 */
class GetByIdV2Response extends BaseGetReportByIdV2Response
{
}
