<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\Item;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito item/vasIdRequestBody.
 */
class VasIdRequestBody extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['vas_id' => 'vas_id'];

    protected const REQUIRED_FIELDS = ['vas_id'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Идентификатор услуги, возможные его варианты значения:
- `highlight` — [выделение объявления](https://support.avito.ru/articles/200026858)
- `xl` – [XL-объявление](https://support.avito.ru/articles/685)
 */
    public string $vas_id;
}
