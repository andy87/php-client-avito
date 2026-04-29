<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/CreateSandboxV2Options.
 */
class CreateSandboxV2Options extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['registrationUrl' => 'registrationUrl'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string|null На заданный URL будет отправлен запрос на регистрацию посылки */
    public ?string $registrationUrl = null;
}
