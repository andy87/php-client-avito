<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\DeliverySandbox;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/CreateParcelClientDeliverySortingCenter.
 */
class CreateParcelClientDeliverySortingCenter extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['accuracy' => 'accuracy', 'id' => 'id', 'provider' => 'provider'];

    protected const REQUIRED_FIELDS = ['provider', 'id', 'accuracy'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['accuracy' => \php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelPropertyAccuracy::class];

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelPropertyAccuracy Schema field accuracy */
    public \php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelPropertyAccuracy $accuracy;

    /** @var string Идентификатор сортировочного центра по версии службы доставки владельца. */
    public string $id;

    /** @var string Идентификатор службы доставки владельца сортировочного центра. */
    public string $provider;
}
