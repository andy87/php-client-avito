<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoload;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoload/ItemInfoVas.
 */
class ItemInfoVas extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['price' => 'price', 'slug' => 'slug', 'title' => 'title'];

    protected const REQUIRED_FIELDS = ['slug', 'title', 'price'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var int Сумма средств, списанных из кошелька за эту услугу */
    public int $price;

    /** @var string ID услуги
- highlight – «Выделение цветом» (действует 7 дней)
- xl – «XL-объявление» (действует 7 дней)
- x2_1 – «До 2 раз больше просмотров на 1 день»
- x2_7 – «До 2 раз больше просмотров на 7 дней»
- x5_1 – «До 5 раз больше просмотров на 1 день»
- x5_7 – «До 5 раз больше просмотров на 7 дней»
- x10_1 – «До 10 раз больше просмотров на 1 день»
- x10_7 – «До 10 раз больше просмотров на 7 дней»
- x15_1 – «До 15 раз больше просмотров на 1 день»
- x15_7 – «До 15 раз больше просмотров на 7 дней»
- x20_1 – «До 20 раз больше просмотров на 1 день»
- x20_7 – «До 20 раз больше просмотров на 7 дней»
 */
    public string $slug;

    /** @var string Название услуги */
    public string $title;
}
