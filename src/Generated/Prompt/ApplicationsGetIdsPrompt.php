<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt;

use Andy87\PhpClientSdk\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [GET] /job/v1/applications/get_ids.
 *
 * @documentation https://developers.avito.ru/api-catalog/job/documentation#operation/applicationsGetIds
 */
class ApplicationsGetIdsPrompt extends AbstractPrompt
{
    protected const METHOD = 'GET';

    protected const ENDPOINT = '/job/v1/applications/get_ids';

    protected const CONTENT_TYPE = null;

    protected const AUTHORIZATION_REQUIRED = true;

    protected const QUERY_PARAMETER_STYLES = ['updatedAtFrom' => ['style' => 'form', 'explode' => true], 'cursor' => ['style' => 'form', 'explode' => true], 'vacancyIds' => ['style' => 'form', 'explode' => true], 'is_viewed' => ['style' => 'form', 'explode' => true], 'state' => ['style' => 'form', 'explode' => true]];

    protected const FIELD_MAP = ['X_Is_Employee' => 'X-Is-Employee', 'updatedAtFrom' => 'updatedAtFrom', 'cursor' => 'cursor', 'vacancyIds' => 'vacancyIds', 'is_viewed' => 'is_viewed', 'state' => 'state'];

    protected const REQUIRED_FIELDS = ['updatedAtFrom'];

    protected const NULLABLE_FIELDS = ['X_Is_Employee'];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = ['updatedAtFrom', 'cursor', 'vacancyIds', 'is_viewed', 'state'];

    protected const HEADER_FIELDS = ['X_Is_Employee'];

    protected const BODY_FIELDS = [];

    protected const BODY_ROOT_FIELD = null;

    /** @var bool|null Сотрудник может получить список его откликов для вакансий которые он разместил в рамках компании */
    public ?bool $X_Is_Employee = null;

    /** @var string Возвращать отклики с датой обновления от указанной даты */
    public string $updatedAtFrom;

    /** @var string|null <p>Идентификатор последнего отклика из предыдущего запроса</p>

<p>Пример использования параметра:</p>

<p>Получение первой страницы откликов, с датой обновления от 12 июня 2022 года:</p>

<p><code>GET /job/v1/applications/get_ids?updatedAtFrom=2022-06-12</code></p>

<p><code>[<br>
  &nbsp{"id": "62e3e7e542c3d9af3d85205e",<...>},<br>
  &nbsp<...>,<br>
  &nbsp{"id": "<strong>623850d1d3819d935dd02702</strong>",<...>}<br>
]</code></p>

<p>Получение следующей страницы откликов:</p>

<p><code>GET /job/v1/applications/get_ids?updatedAtFrom=2022-06-12&cursor=<strong>623850d1d3819d935dd02702</strong></code></p>
 */
    public ?string $cursor = null;

    /** @var string|null Идентификаторы вакансий. Опциональный фильтр (можно указать одно или несколько значений через запятую) */
    public ?string $vacancyIds = null;

    /** @var bool|null Отклик просмотрен */
    public ?bool $is_viewed = null;

    /** @var string|null Статус отклика. Опциональный фильтр по текущему статусу отклика */
    public ?string $state = null;
}
