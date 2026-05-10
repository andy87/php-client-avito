<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Response\Job\Vacancy;

use and_y87\php_client_avito\Generated\Response\VacancyCreateResponse as BaseVacancyCreateResponse;

/**
 * Ответ Avito API [POST] /job/v1/vacancies.
 *
 * @documentation https://developers.avito.ru/api-catalog/job/documentation#operation/vacancyCreate
 *
 * @property string|null $id Идентификатор добавленной вакансии на сайте.
 * @property string|null $url URL добавленной вакансии.
 * @property string|null $uuid Идентификатор добавленной вакансии.
 */
class CreateResponse extends BaseVacancyCreateResponse
{
}
