<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/CheckConfirmationCodeRequest.
 */
class CheckConfirmationCodeRequest extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['confirmCode' => 'confirmCode', 'parcelID' => 'parcelID'];

    protected const REQUIRED_FIELDS = ['parcelID', 'confirmCode'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Schema field confirmCode */
    public string $confirmCode;

    /** @var string Schema field parcelID */
    public string $parcelID;
}
