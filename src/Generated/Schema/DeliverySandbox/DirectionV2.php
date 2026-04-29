<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/DirectionV2.
 */
class DirectionV2 extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['providerDirectionId' => 'providerDirectionId', 'tagFrom' => 'tagFrom', 'tagTo' => 'tagTo', 'zones' => 'zones'];

    protected const REQUIRED_FIELDS = ['providerDirectionId', 'tagFrom', 'tagTo', 'zones'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['zones' => [\Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\Zone::class]];

    /** @var string Идентификатор или человекопонятное название направления доставки на стороне службы доставки */
    public string $providerDirectionId;

    /** @var string Тэг направления адресных объектов (ПВЗ) из которых доступна доставка на условиях приведенных в данном направление */
    public string $tagFrom;

    /** @var string Тэг направления адресных объектов (ПВЗ) в которые доступна доставка на условиях приведенных в данном направление */
    public string $tagTo;

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\Zone> Schema field zones */
    public array $zones;
}
