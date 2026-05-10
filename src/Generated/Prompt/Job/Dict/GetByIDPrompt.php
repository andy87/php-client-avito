<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Prompt\Job\Dict;

use php_client_avito\Generated\Prompt\GetDictByIDPrompt as BaseGetDictByIDPrompt;

/**
 * Класс данных запроса Avito API [GET] /job/v2/vacancy/dict/{dictionary_id}.
 *
 * @documentation https://developers.avito.ru/api-catalog/job/documentation#operation/getDictByID
 *
 * @property string $dictionary_id Идентификатор словаря
 * @property bool|null $X_Is_Employee Включает привилегии компании для сотрудника
 */
class GetByIDPrompt extends BaseGetDictByIDPrompt
{
}
