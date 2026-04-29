<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Cpa;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito cpa/CallV2.
 */
class CallV2 extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['buyerPhone' => 'buyerPhone', 'createTime' => 'createTime', 'duration' => 'duration', 'groupTitle' => 'groupTitle', 'id' => 'id', 'isArbitrageAvailable' => 'isArbitrageAvailable', 'itemId' => 'itemId', 'price' => 'price', 'recordUrl' => 'recordUrl', 'sellerPhone' => 'sellerPhone', 'startTime' => 'startTime', 'statusId' => 'statusId', 'virtualPhone' => 'virtualPhone', 'waitingDuration' => 'waitingDuration'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string|null Телефонный номер покупателя */
    public ?string $buyerPhone = null;

    /** @var string|null Время поступления звонка (строка в формате RFC3339) */
    public ?string $createTime = null;

    /** @var int|null Время разговора в секундах */
    public ?int $duration = null;

    /** @var string|null Название группы */
    public ?string $groupTitle = null;

    /** @var int|null Идентификатор звонка */
    public ?int $id = null;

    /** @var bool|null Флаг, указывающий на то, доступен ли арбитраж по звонку */
    public ?bool $isArbitrageAvailable = null;

    /** @var int|null Идентификатор объявления */
    public ?int $itemId = null;

    /** @var int|null Цена звонка CPA в копейках */
    public ?int $price = null;

    /** @var string|null Ссылка на запись звонка */
    public ?string $recordUrl = null;

    /** @var string|null Реальный телефонный номер продавца */
    public ?string $sellerPhone = null;

    /** @var string|null Время начала разговора (строка в формате RFC3339) */
    public ?string $startTime = null;

    /** @var int|null Статус звонка (0 - целевой, 1 - на модерации, 2 - помечен как целевой после модерации,
3 - помечен как нецелевой после модерации)
 */
    public ?int $statusId = null;

    /** @var string|null Виртуальный телефонный номер продавца */
    public ?string $virtualPhone = null;

    /** @var float|null Время ожидания в секундах */
    public ?float $waitingDuration = null;
}
