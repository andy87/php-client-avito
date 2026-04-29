<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\Job\Applications;

use Andy87\ClientsAvito\Generated\Prompt\ApplicationsGetIdsPrompt as BaseApplicationsGetIdsPrompt;

/**
 * Класс данных запроса Avito API [GET] /job/v1/applications/get_ids.
 * 
 * @documentation https://developers.avito.ru/api-catalog/job/documentation#operation/applicationsGetIds
 * 
 * @property string $Authorization Токен для авторизации
 * @property string $updatedAtFrom Возвращать отклики с датой обновления от указанной даты
 * @property string|null $cursor <p>Идентификатор последнего отклика из предыдущего запроса</p> <p>Пример использования параметра:</p> <p>Получение первой страницы откликов, с датой обновления от 12 июня 2022 года:</p> <p><code>GET /job/v1/applications/get_ids?updatedAtFrom=2022-06-12</code></p> <p><code>[<br> &nbsp{"id": "62e3e7e542c3d9af3d85205e",<...>},<br> &nbsp<...>,<br> &nbsp{"id": "<strong>623850d1d3819d935dd02702</strong>",<...>}<br> ]</code></p> <p>Получение следующей страницы откликов:</p> <p><code>GET /job/v1/applications/get_ids?updatedAtFrom=2022-06-12&cursor=<strong>623850d1d3819d935dd02702</strong></code></p>
 * @property string|null $vacancyIds Идентификаторы вакансий. Опциональный фильтр (можно указать одно или несколько значений через запятую)
 * @property bool|null $is_viewed Отклик просмотрен
 * @property string|null $state Статус отклика. Опциональный фильтр по текущему статусу отклика
 */
class GetIdsPrompt extends BaseApplicationsGetIdsPrompt
{
}
