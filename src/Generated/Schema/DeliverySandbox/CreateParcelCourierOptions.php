<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/CreateParcelCourierOptions.
 */
class CreateParcelCourierOptions extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['comment' => 'comment', 'elevatorAvailable' => 'elevatorAvailable'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string|null Комментарий для курьера, оставленный пользователем. */
    public ?string $comment = null;

    /** @var bool|null Наличие лифта в доме, способного поднять посылку. */
    public ?bool $elevatorAvailable = null;
}
