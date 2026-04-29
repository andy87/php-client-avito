<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/CreateSandboxParcelItem.
 */
class CreateSandboxParcelItem extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['breadcrumbs' => 'breadcrumbs', 'cost' => 'cost', 'description' => 'description', 'dimensions' => 'dimensions', 'quantity' => 'quantity', 'tags' => 'tags', 'title' => 'title', 'weight' => 'weight'];

    protected const REQUIRED_FIELDS = ['quantity'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['breadcrumbs' => [\Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelItemBreadcrumb::class]];

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelItemBreadcrumb>|null Schema field breadcrumbs */
    public ?array $breadcrumbs = null;

    /** @var int|null Schema field cost */
    public ?int $cost = null;

    /** @var string|null Schema field description */
    public ?string $description = null;

    /** @var array<string, mixed>|null Габариты товара в сантиметрах. Порядок [ширина, высота, длина]. Например, [15, 25, 35].
 */
    public ?array $dimensions = null;

    /** @var int Schema field quantity */
    public int $quantity;

    /** @var array<int, mixed>|null Дополнительные признаки товара. Признаки товара могут определять дополнительные услуги, оказываемые 
при приеме или выдаче посылки. На текущий момент поддерживается только один признак - `TRY_ON`, 
который означает,что возможна примерка в ПВЗ.

На определенные значения в тегах можно завязывать логику. 

Список может постоянно пополняться.
 */
    public ?array $tags = null;

    /** @var string|null Schema field title */
    public ?string $title = null;

    /** @var array<string, mixed>|null Schema field weight */
    public ?array $weight = null;
}
