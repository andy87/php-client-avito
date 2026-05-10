<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\DeliverySandbox;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/AreasTaskResult.
 */
class AreasTaskResult extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['edited' => 'edited', 'incoming' => 'incoming'];

    protected const REQUIRED_FIELDS = ['edited', 'incoming'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Schema field edited */
    public string $edited;

    /** @var string Schema field incoming */
    public string $incoming;
}
