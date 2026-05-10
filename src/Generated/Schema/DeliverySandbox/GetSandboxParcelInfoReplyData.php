<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\DeliverySandbox;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/GetSandboxParcelInfoReplyData.
 */
class GetSandboxParcelInfoReplyData extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['dimensions' => 'dimensions', 'history' => 'history', 'receiver' => 'receiver', 'sender' => 'sender', 'status' => 'status'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['dimensions' => \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\GetSandboxParcelInfoDimensions::class, 'history' => [\and_y87\php_client_avito\Generated\Schema\DeliverySandbox\GetSandboxParcelInfoParcelHistory::class]];

    /** @var \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\GetSandboxParcelInfoDimensions|null Schema field dimensions */
    public ?\and_y87\php_client_avito\Generated\Schema\DeliverySandbox\GetSandboxParcelInfoDimensions $dimensions = null;

    /** @var array<int, \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\GetSandboxParcelInfoParcelHistory>|null Schema field history */
    public ?array $history = null;

    /** @var array<string, mixed>|null Schema field receiver */
    public ?array $receiver = null;

    /** @var array<string, mixed>|null Schema field sender */
    public ?array $sender = null;

    /** @var string|null Schema field status */
    public ?string $status = null;
}
