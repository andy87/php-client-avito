<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Calltracking;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito calltracking/Call.
 */
class Call extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['buyerPhone' => 'buyerPhone', 'callId' => 'callId', 'callTime' => 'callTime', 'itemId' => 'itemId', 'sellerPhone' => 'sellerPhone', 'talkDuration' => 'talkDuration', 'virtualPhone' => 'virtualPhone', 'waitingDuration' => 'waitingDuration'];

    protected const REQUIRED_FIELDS = ['callId', 'callTime', 'talkDuration', 'waitingDuration', 'buyerPhone', 'sellerPhone', 'virtualPhone'];

    protected const NULLABLE_FIELDS = ['itemId'];

    protected const CASTS = [];

    /** @var string Номер телефона покупателя */
    public string $buyerPhone;

    /** @var int ID звонка */
    public int $callId;

    /** @var string Время, когда звонок был совершен */
    public string $callTime;

    /** @var int|null ID объявления, по которому совершался звонок. Проставляется только если звонок был на номера Динамического КТ. */
    public ?int $itemId = null;

    /** @var string Номер телефона продавца */
    public string $sellerPhone;

    /** @var int Длительность разговора */
    public int $talkDuration;

    /** @var string Защитный номер, через который шел звонок */
    public string $virtualPhone;

    /** @var float Длительность ожидания */
    public float $waitingDuration;
}
