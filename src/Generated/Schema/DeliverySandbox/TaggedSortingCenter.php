<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/TaggedSortingCenter.
 */
class TaggedSortingCenter extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['deliveryProviderId' => 'deliveryProviderId', 'directionTag' => 'directionTag'];

    protected const REQUIRED_FIELDS = ['deliveryProviderId', 'directionTag'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['deliveryProviderId' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\SortingCenterID::class, 'directionTag' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryDirectionTag::class];

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\SortingCenterID Schema field deliveryProviderId */
    public \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\SortingCenterID $deliveryProviderId;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryDirectionTag Schema field directionTag */
    public \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryDirectionTag $directionTag;
}
