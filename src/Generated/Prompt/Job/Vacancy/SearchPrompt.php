<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\Job\Vacancy;

use Andy87\ClientsAvito\Generated\Prompt\SearchVacancyPrompt as BaseSearchVacancyPrompt;

/**
 * Класс данных запроса Avito API [GET] /job/v2/vacancies.
 * 
 * @documentation https://developers.avito.ru/api-catalog/job/documentation#operation/searchVacancy
 * 
 * @property string $Authorization Токен для авторизации
 * @property int|null $per_page Количество записей на странице (положительное число от 10 до 100)
 * @property int|null $page Номер страницы (положительное число больше 0, произведение page на per_page не должно превышать 5000)
 * @property int|null $location Идентификатор региона поиска (можно указать несколько значений через запятую) <br> Метод принимает идентификаторы сущностей Region и City из [справочника](https://autoload.avito.ru/format/Locations.xml).
 * @property int|null $business_area Идентификатор сферы деятельности <br> Получить актуальный список доступных значений можно из справочника `business_area` через метод [getDictByID](/api-catalog/job/documentation#operation/getDictByID). <br> Статичный [справочник](https://www.avito.st/s/openapi/catalog-business-area.xml) объявлен устаревшим и более не будет использоваться. <br>
 * @property string|null $work_format Формат работы (можно указать несколько значений через запятую) <br> Получить актуальный список доступных значений можно из справочника `work_format` через метод [getDictByID](/api-catalog/job/documentation#operation/getDictByID). <br>
 * @property string|null $schedule Режим работы (можно указать несколько значений через запятую) <br> Получить актуальный список доступных значений можно из справочника `schedules` через метод [getDictByID](/api-catalog/job/documentation#operation/getDictByID). <br>
 */
class SearchPrompt extends BaseSearchVacancyPrompt
{
}
