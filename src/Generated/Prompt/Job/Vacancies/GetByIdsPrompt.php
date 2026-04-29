<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\Job\Vacancies;

use Andy87\ClientsAvito\Generated\Prompt\VacanciesGetByIdsPrompt as BaseVacanciesGetByIdsPrompt;

/**
 * Класс данных запроса Avito API [POST] /job/v2/vacancies/batch.
 * 
 * @documentation https://developers.avito.ru/api-catalog/job/documentation#operation/vacanciesGetByIds
 * 
 * @property array<int, string>|null $fields Поля для основного тела ответа
 * @property array<int, int> $ids Идентификаторы вакансий на сайте
 * @property array<int, string>|null $params Дополнительные поля, которые входят в params (можно указать несколько значений через запятую). Если значение не задано - возвращаются все поля. Устаревшие значения: * change (используйте shifts) * is_remote (используйте work_format) Удалённые значения (более недоступны): * manufacturing_type * industry_type * piecework_flag * programs * warehouse_functionality * where_to_work
 */
class GetByIdsPrompt extends BaseVacanciesGetByIdsPrompt
{
}
