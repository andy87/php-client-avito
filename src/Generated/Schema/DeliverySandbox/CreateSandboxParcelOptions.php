<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/CreateSandboxParcelOptions.
 */
class CreateSandboxParcelOptions extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['isMultiItems' => 'isMultiItems', 'registrationUrl' => 'registrationUrl', 'xDelivery' => 'xDelivery'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['isMultiItems', 'xDelivery'];

    protected const CASTS = [];

    /** @var bool|null Schema field isMultiItems */
    public ?bool $isMultiItems = null;

    /** @var string|null На заданный URL будет отправлен запрос на регистрацию посылки
 */
    public ?string $registrationUrl = null;

    /** @var array<string, mixed>|null Если объект задан, будет создана кросс-доставочная посылка
 */
    public ?array $xDelivery = null;
}
