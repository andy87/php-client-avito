<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\User;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito user/ResponseOperationsHistoryItem.
 */
class ResponseOperationsHistoryItem extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['amountBonus' => 'amountBonus', 'amountRub' => 'amountRub', 'amountTotal' => 'amountTotal', 'itemId' => 'itemId', 'operationName' => 'operationName', 'operationType' => 'operationType', 'paidAt' => 'paidAt', 'serviceId' => 'serviceId', 'serviceName' => 'serviceName', 'serviceType' => 'serviceType', 'updatedAt' => 'updatedAt'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var float|null Сумма бонусов */
    public ?float $amountBonus = null;

    /** @var float|null Сумма реальных денег */
    public ?float $amountRub = null;

    /** @var float|null Сумма операции всего */
    public ?float $amountTotal = null;

    /** @var int|null ID объявления */
    public ?int $itemId = null;

    /** @var string|null Название операции */
    public ?string $operationName = null;

    /** @var string|null Тип операции */
    public ?string $operationType = null;

    /** @var string|null Дата/время оплаты операции */
    public ?string $paidAt = null;

    /** @var int|null Код типа услуги */
    public ?int $serviceId = null;

    /** @var string|null Название конкретного типа услуги */
    public ?string $serviceName = null;

    /** @var string|null Тип услуги */
    public ?string $serviceType = null;

    /** @var string|null Дата/время совершения операции */
    public ?string $updatedAt = null;
}
