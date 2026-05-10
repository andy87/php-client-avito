<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\Messenger;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

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
