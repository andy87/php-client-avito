<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response\Job\Vacancy;

use Andy87\ClientsAvito\Generated\Response\VacancyGetItemResponse as BaseVacancyGetItemResponse;

/**
 * Ответ Avito API [GET] /job/v2/vacancies/{vacancy_id}.
 * 
 * @documentation https://developers.avito.ru/api-catalog/job/documentation#operation/vacancyGetItem
 * 
 * @property array<string, mixed>|null $addressDetails Детали адреса вакансии
 * @property bool|null $auto_renewal Вакансия на автопродлении
 * @property array<string, mixed>|null $contacts Информация о контактах в вакансии
 * @property string|null $description Описание вакансии
 * @property array<string, mixed>|null $hierarchy Информация об иерархии аккаунтов
 * @property int|null $id Идентификатор вакансии на сайте
 * @property bool|null $is_active Активность вакансии
 * @property array<string, mixed>|null $params Блок с параметрами вакансии. Все поля опциональны и выводятся при наличии
 * @property int|null $salary Зарплата (устарело). Используйте поле `salary` с диапазоном из блока `params`
 * @property string|null $start_time Дата публикации вакансии
 * @property string|null $title Наименование вакансии
 * @property string|null $update_time Дата последнего обновления вакансии
 * @property string|null $url URL вакансии на сайте
 * @property string|null $uuid Идентификатор вакансии
 */
class GetItemResponse extends BaseVacancyGetItemResponse
{
}
