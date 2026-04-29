<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Ratings;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito ratings/GetRatingInfoResponse.
 */
class GetRatingInfoResponse extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['isEnabled' => 'isEnabled', 'rating' => 'rating'];

    protected const REQUIRED_FIELDS = ['isEnabled'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['rating' => \Andy87\ClientsAvito\Generated\Schema\Ratings\Rating::class];

    /** @var bool Включен ли рейтинг */
    public bool $isEnabled;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Ratings\Rating|null Schema field rating */
    public ?\Andy87\ClientsAvito\Generated\Schema\Ratings\Rating $rating = null;
}
