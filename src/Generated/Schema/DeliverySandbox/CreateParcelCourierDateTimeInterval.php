<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\DeliverySandbox;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/CreateParcelCourierDateTimeInterval.
 */
class CreateParcelCourierDateTimeInterval extends AbstractSchemaModel
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
