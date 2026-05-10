<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Response;

use Andy87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ Avito API [POST] /autostrategy/v1/budget.
 *
 * @documentation https://developers.avito.ru/api-catalog/autostrategy/documentation#operation/getAutostrategyBudget
 */
class GetAutostrategyBudgetResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['budget' => 'budget', 'calcId' => 'calcId'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['calcId'];

    protected const CASTS = ['budget' => \php_client_avito\Generated\Schema\Autostrategy\Budget::class];

    protected const MODEL = null;

    /** @var \php_client_avito\Generated\Schema\Autostrategy\Budget|null Response field budget */
    public ?\php_client_avito\Generated\Schema\Autostrategy\Budget $budget = null;

    /** @var int|null Id расчета бюджета */
    public ?int $calcId = null;
}
