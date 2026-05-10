<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\DeliverySandbox;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/Delivery-date-interval.
 */
class DeliveryDateInterval extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['dateFrom' => 'dateFrom', 'dateTo' => 'dateTo'];

    protected const REQUIRED_FIELDS = ['dateFrom', 'dateTo'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string дата и время начала события */
    public string $dateFrom;

    /** @var string дата и время окончания события */
    public string $dateTo;
}
