<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/CreateParcelItem.
 */
class CreateParcelItem extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['breadcrumbs' => 'breadcrumbs', 'cost' => 'cost', 'description' => 'description', 'dimensions' => 'dimensions', 'id' => 'id', 'imagesUrls' => 'imagesUrls', 'quantity' => 'quantity', 'tags' => 'tags', 'title' => 'title', 'weight' => 'weight'];

    protected const REQUIRED_FIELDS = ['id', 'title', 'cost', 'quantity'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['breadcrumbs' => [\Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelItemBreadcrumb::class], 'dimensions' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelItemDimensions::class, 'imagesUrls' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelItemImagesUrls::class, 'weight' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelItemWeight::class];

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelItemBreadcrumb>|null Дерево категорий как на сайте Avito.
 */
    public ?array $breadcrumbs = null;

    /** @var int Объявленная стоимость в копейках. */
    public int $cost;

    /** @var string|null Описание. */
    public ?string $description = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelItemDimensions|null Schema field dimensions */
    public ?\Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelItemDimensions $dimensions = null;

    /** @var int Идентификатор товара Avito. */
    public int $id;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelItemImagesUrls|null Schema field imagesUrls */
    public ?\Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelItemImagesUrls $imagesUrls = null;

    /** @var int Количество единиц товара. */
    public int $quantity;

    /** @var array<int, mixed>|null Дополнительные признаки товара. Признаки товара могут определять дополнительные услуги, оказываемые 
при приеме или выдаче посылки. На текущий момент поддерживается только один признак - `TRY_ON`, 
который означает,что возможна примерка в ПВЗ.

На определенные значения в тегах можно завязывать логику. 

Список может постоянно пополняться.
 */
    public ?array $tags = null;

    /** @var string Название. */
    public string $title;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelItemWeight|null Schema field weight */
    public ?\Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelItemWeight $weight = null;
}
