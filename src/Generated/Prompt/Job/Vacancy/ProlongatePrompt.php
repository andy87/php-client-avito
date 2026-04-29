<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\Job\Vacancy;

use Andy87\ClientsAvito\Generated\Prompt\VacancyProlongatePrompt as BaseVacancyProlongatePrompt;

/**
 * Класс данных запроса Avito API [POST] /job/v1/vacancies/{vacancy_id}/prolongate.
 * 
 * @documentation https://developers.avito.ru/api-catalog/job/documentation#operation/vacancyProlongate
 * 
 * @property string $billing_type Вариант платного размещения Возможные значения: - "package" - размещение объявления осуществляется только при наличии подходящего пакета размещения - "packageOrSingle" - при наличии подходящего пакета оплата размещения объявления произойдет с него; если нет подходящего пакета, но достаточно денег на кошельке Авито, то произойдет разовое размещение - "single" - только разовое размещение, произойдет при наличии достаточной суммы на кошельке Авито; если есть подходящий пакет размещения, он будет проигнорирован
 * @property int|null $employee_id employee_id - Идентификатор сотрудника на Авито. Если этот параметр указан, то с баланса сотрудника в Avito Pro будет списано размещение. Использовать параметр можно только с billing_type равным package. Сотрудник должен быть в активен.
 */
class ProlongatePrompt extends BaseVacancyProlongatePrompt
{
}
