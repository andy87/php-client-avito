<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Messenger;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito messenger/sendImageMessageRequestBody.
 */
class SendImageMessageRequestBody extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['image_id' => 'image_id'];

    protected const REQUIRED_FIELDS = ['image_id'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Идентификатор загруженного изображения */
    public string $image_id;
}
