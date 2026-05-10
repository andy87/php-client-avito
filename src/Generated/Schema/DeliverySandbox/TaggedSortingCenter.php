<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\DeliverySandbox;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/TaggedSortingCenter.
 */
class TaggedSortingCenter extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['deliveryProviderId' => 'deliveryProviderId', 'directionTag' => 'directionTag'];

    protected const REQUIRED_FIELDS = ['deliveryProviderId', 'directionTag'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['deliveryProviderId' => \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\SortingCenterID::class, 'directionTag' => \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\DeliveryDirectionTag::class];

    /** @var \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\SortingCenterID Schema field deliveryProviderId */
    public \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\SortingCenterID $deliveryProviderId;

    /** @var \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\DeliveryDirectionTag Schema field directionTag */
    public \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\DeliveryDirectionTag $directionTag;
}
