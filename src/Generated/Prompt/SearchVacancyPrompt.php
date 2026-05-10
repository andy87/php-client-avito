<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt;

use Andy87\PhpClientSdk\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [GET] /job/v2/vacancies.
 *
 * @documentation https://developers.avito.ru/api-catalog/job/documentation#operation/searchVacancy
 */
class SearchVacancyPrompt extends AbstractPrompt
{
    protected const METHOD = 'GET';

    protected const ENDPOINT = '/job/v2/vacancies';

    protected const CONTENT_TYPE = null;

    protected const AUTHORIZATION_REQUIRED = true;

    protected const QUERY_PARAMETER_STYLES = ['per_page' => ['style' => 'form', 'explode' => true], 'page' => ['style' => 'form', 'explode' => true], 'location' => ['style' => 'form', 'explode' => true], 'business_area' => ['style' => 'form', 'explode' => true], 'work_format' => ['style' => 'form', 'explode' => true], 'schedule' => ['style' => 'form', 'explode' => true]];

    protected const FIELD_MAP = ['per_page' => 'per_page', 'page' => 'page', 'location' => 'location', 'business_area' => 'business_area', 'work_format' => 'work_format', 'schedule' => 'schedule'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = ['per_page', 'page', 'location', 'business_area', 'work_format', 'schedule'];

    protected const HEADER_FIELDS = [];

    protected const BODY_FIELDS = [];

    protected const BODY_ROOT_FIELD = null;

    /** @var int|null Количество записей на странице (положительное число от 10 до 100) */
    public ?int $per_page = null;

    /** @var int|null Номер страницы (положительное число больше 0, произведение page на per_page не должно превышать 5000) */
    public ?int $page = null;

    /** @var int|null Идентификатор региона поиска (можно указать несколько значений через запятую)
<br>
Метод принимает идентификаторы сущностей Region и City из [справочника](https://autoload.avito.ru/format/Locations.xml).
 */
    public ?int $location = null;

    /** @var int|null Идентификатор сферы деятельности  <br> Получить актуальный список доступных значений можно из справочника `business_area` через метод [getDictByID](/api-catalog/job/documentation#operation/getDictByID). <br> Статичный [справочник](https://www.avito.st/s/openapi/catalog-business-area.xml) объявлен устаревшим и более не будет использоваться.  <br>
 */
    public ?int $business_area = null;

    /** @var string|null Формат работы (можно указать несколько значений через запятую) <br> Получить актуальный список доступных значений можно из справочника `work_format` через метод [getDictByID](/api-catalog/job/documentation#operation/getDictByID). <br>
 */
    public ?string $work_format = null;

    /** @var string|null Режим работы (можно указать несколько значений через запятую) <br> Получить актуальный список доступных значений можно из справочника `schedules` через метод [getDictByID](/api-catalog/job/documentation#operation/getDictByID). <br>
 */
    public ?string $schedule = null;
}
