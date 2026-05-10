<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\Item;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito item/ItemInfoAvito.
 */
class ItemInfoAvito extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['autoload_item_id' => 'autoload_item_id', 'finish_time' => 'finish_time', 'start_time' => 'start_time', 'status' => 'status', 'url' => 'url', 'vas' => 'vas'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['autoload_item_id', 'finish_time', 'start_time', 'url', 'vas'];

    protected const CASTS = ['vas' => [\and_y87\php_client_avito\Generated\Schema\Item\InfoVas::class]];

    /** @var string|null [Идентификатор объявления](https://autoload.avito.ru/format/realty/#Id) из файла автозагрузки */
    public ?string $autoload_item_id = null;

    /** @var string|null Дата завершения объявления */
    public ?string $finish_time = null;

    /** @var string|null Дата создания объявления */
    public ?string $start_time = null;

    /** @var string|null Статус объявления на сайте */
    public ?string $status = null;

    /** @var string|null URL-адрес объявления */
    public ?string $url = null;

    /** @var array<int, \and_y87\php_client_avito\Generated\Schema\Item\InfoVas>|null Список примененных платных услуг */
    public ?array $vas = null;
}
