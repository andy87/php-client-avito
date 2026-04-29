<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/GetSandboxParcelInfoDimensions.
 */
class GetSandboxParcelInfoDimensions extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['realHeight' => 'realHeight', 'realLength' => 'realLength', 'realWeight' => 'realWeight', 'realWidth' => 'realWidth'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['realHeight', 'realLength', 'realWeight', 'realWidth'];

    protected const CASTS = [];

    /** @var int|null Schema field realHeight */
    public ?int $realHeight = null;

    /** @var int|null Schema field realLength */
    public ?int $realLength = null;

    /** @var int|null Schema field realWeight */
    public ?int $realWeight = null;

    /** @var int|null Schema field realWidth */
    public ?int $realWidth = null;
}
