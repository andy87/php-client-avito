<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\DeliverySandbox;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/TaggedSortingCenter.
 */
class TaggedSortingCenter extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['deliveryProviderId' => 'deliveryProviderId', 'directionTag' => 'directionTag'];

    protected const REQUIRED_FIELDS = ['deliveryProviderId', 'directionTag'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['deliveryProviderId' => \php_client_avito\Generated\Schema\DeliverySandbox\SortingCenterID::class, 'directionTag' => \php_client_avito\Generated\Schema\DeliverySandbox\DeliveryDirectionTag::class];

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\SortingCenterID Schema field deliveryProviderId */
    public \php_client_avito\Generated\Schema\DeliverySandbox\SortingCenterID $deliveryProviderId;

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\DeliveryDirectionTag Schema field directionTag */
    public \php_client_avito\Generated\Schema\DeliverySandbox\DeliveryDirectionTag $directionTag;
}
