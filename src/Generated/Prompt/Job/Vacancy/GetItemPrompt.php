<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Prompt\Job\Vacancy;

use php_client_avito\Generated\Prompt\VacancyGetItemPrompt as BaseVacancyGetItemPrompt;

/**
 * Класс данных запроса Avito API [GET] /job/v2/vacancies/{vacancy_id}.
 *
 * @documentation https://developers.avito.ru/api-catalog/job/documentation#operation/vacancyGetItem
 *
 * @property bool|null $X_Is_Employee Сотрудник компании получает информацию по вакансии, которую он опубликовал для компании
 * @property int $vacancy_id Идентификатор вакансии
 * @property string|null $fields Поля основного тела ответа (можно указать несколько значений через запятую). По умолчанию отображаются все поля.
 * @property string|null $params Дополнительные поля, которые входят в params (можно указать несколько значений через запятую). Если значение не задано - возвращаются все поля. Устаревшие значения: * change (используйте shifts) * is_remote (используйте work_format) Удалённые значения (более недоступны): * manufacturing_type * industry_type * piecework_flag * programs * warehouse_functionality * where_to_work
 */
class GetItemPrompt extends BaseVacancyGetItemPrompt
{
}
