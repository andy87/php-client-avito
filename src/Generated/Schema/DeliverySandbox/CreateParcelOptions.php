<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/CreateParcelOptions.
 */
class CreateParcelOptions extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['returnValue' => 'return', 'tags' => 'tags'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var array<string, mixed>|null Опции возврата.

Опции определяют политику возвратов. Доступен ли возврат, или что делать в определенных случаях.
 */
    public ?array $returnValue = null;

    /** @var array<int, mixed>|null Список специфичных особенностей посылки.

На определенные значения в тегах можно завязывать логику. 
Те теги, которые вас, как службу доставки, не интересуют, игнорируйте.
Список может постоянно пополняться.
 */
    public ?array $tags = null;
}
