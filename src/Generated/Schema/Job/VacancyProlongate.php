<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Job;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito job/VacancyProlongate.
 */
class VacancyProlongate extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['billing_type' => 'billing_type', 'employee_id' => 'employee_id'];

    protected const REQUIRED_FIELDS = ['billing_type'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

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
