<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/GetSandboxParcelInfoReplyData.
 */
class GetSandboxParcelInfoReplyData extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['dimensions' => 'dimensions', 'history' => 'history', 'receiver' => 'receiver', 'sender' => 'sender', 'status' => 'status'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['dimensions' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\GetSandboxParcelInfoDimensions::class, 'history' => [\Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\GetSandboxParcelInfoParcelHistory::class]];

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\GetSandboxParcelInfoDimensions|null Schema field dimensions */
    public ?\Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\GetSandboxParcelInfoDimensions $dimensions = null;

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\GetSandboxParcelInfoParcelHistory>|null Schema field history */
    public ?array $history = null;

    /** @var array<string, mixed>|null Schema field receiver */
    public ?array $receiver = null;

    /** @var array<string, mixed>|null Schema field sender */
    public ?array $sender = null;

    /** @var string|null Schema field status */
    public ?string $status = null;
}
