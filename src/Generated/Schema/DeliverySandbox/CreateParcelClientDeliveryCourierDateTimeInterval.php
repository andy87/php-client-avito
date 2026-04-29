<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/CreateParcelClientDeliveryCourierDateTimeInterval.
 */
class CreateParcelClientDeliveryCourierDateTimeInterval extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['end' => 'end', 'start' => 'start'];

    protected const REQUIRED_FIELDS = ['start', 'end'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Дата и время окончания интервала в RFC3339. */
    public string $end;

    /** @var string Дата и время начала интервала в RFC3339. */
    public string $start;
}
