<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [POST] /job/v1/vacancies/{vacancy_id}/prolongate.
 *
 * @documentation https://developers.avito.ru/api-catalog/job/documentation#operation/vacancyProlongate
 */
class VacancyProlongatePrompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/job/v1/vacancies/{vacancy_id}/prolongate';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const QUERY_PARAMETER_STYLES = [];

    protected const FIELD_MAP = ['vacancy_id' => 'vacancy_id', 'X_Is_Employee' => 'X-Is-Employee', 'billing_type' => 'billing_type', 'employee_id' => 'employee_id'];

    protected const REQUIRED_FIELDS = ['vacancy_id', 'billing_type'];

    protected const NULLABLE_FIELDS = ['X_Is_Employee'];

    protected const CASTS = [];

    protected const PATH_FIELDS = ['vacancy_id'];

    protected const QUERY_FIELDS = [];

    protected const HEADER_FIELDS = ['X_Is_Employee'];

    protected const BODY_FIELDS = ['billing_type', 'employee_id'];

    protected const BODY_ROOT_FIELD = null;

    /** @var int Идентификатор вакансии на сайте */
    public int $vacancy_id;

    /** @var bool|null Сотрудник компании может реактивировать только свою вакансию */
    public ?bool $X_Is_Employee = null;

    /** @var string Вариант платного размещения

Возможные значения:
  - "package" - размещение объявления осуществляется только при наличии подходящего пакета размещения
  - "packageOrSingle" - при наличии подходящего пакета оплата размещения объявления произойдет с него; если нет подходящего пакета, но достаточно денег на кошельке Авито, то произойдет разовое размещение
  - "single" - только разовое размещение, произойдет при наличии достаточной суммы на кошельке Авито; если есть подходящий пакет размещения, он будет проигнорирован
 */
    public string $billing_type;

    /** @var int|null employee_id - Идентификатор сотрудника на Авито. Если этот параметр указан, то с баланса сотрудника в Avito Pro будет списано размещение.
Использовать параметр можно только с billing_type равным package.
Сотрудник должен быть в активен.
 */
    public ?int $employee_id = null;
}
