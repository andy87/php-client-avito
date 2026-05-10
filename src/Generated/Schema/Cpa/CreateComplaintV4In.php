<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\Cpa;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito cpa/CreateComplaintV4In.
 */
class CreateComplaintV4In extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['actionId' => 'actionId', 'message' => 'message'];

    protected const REQUIRED_FIELDS = ['actionId', 'message'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var int ID действия (action), по которому подаётся жалоба */
    public int $actionId;

    /** @var string Сообщение, прикрепленное к жалобе */
    public string $message;
}
