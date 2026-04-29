<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoteka;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/InsurancePaymentsItem.
 */
class InsurancePaymentsItem extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['companyName' => 'companyName', 'isCourtPayment' => 'isCourtPayment', 'isForVictim' => 'isForVictim', 'month' => 'month', 'paymentAmount' => 'paymentAmount', 'year' => 'year'];

    protected const REQUIRED_FIELDS = ['paymentAmount', 'year', 'companyName', 'isForVictim'];

    protected const NULLABLE_FIELDS = ['companyName', 'isCourtPayment', 'month'];

    protected const CASTS = [];

    /** @var string|null Компания */
    public ?string $companyName;

    /** @var bool|null Cудебная выплата */
    public ?bool $isCourtPayment = null;

    /** @var bool Флаг, что владелец авто получил этот платеж (для виновника будет false) */
    public bool $isForVictim;

    /** @var int|null Месяц */
    public ?int $month = null;

    /** @var float Сумма выплаты */
    public float $paymentAmount;

    /** @var int Год выплаты */
    public int $year;
}
