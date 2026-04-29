<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/ChangeParcelResultRequest.
 */
class ChangeParcelResultRequest extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['id' => 'id', 'options' => 'options', 'reason' => 'reason', 'status' => 'status'];

    protected const REQUIRED_FIELDS = ['id', 'status'];

    protected const NULLABLE_FIELDS = ['options'];

    protected const CASTS = [];

    /** @var string Идентификатор заявки на изменение посылки */
    public string $id;

    /** @var array<string, mixed>|null Schema field options */
    public ?array $options = null;

    /** @var string|null Причина отклонения заявки (заполняется в случае отклонения).
 */
    public ?string $reason = null;

    /** @var string Статус обработки заявки */
    public string $status;
}
