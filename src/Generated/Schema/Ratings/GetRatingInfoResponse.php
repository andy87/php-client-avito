<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\Ratings;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito ratings/GetRatingInfoResponse.
 */
class GetRatingInfoResponse extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['isEnabled' => 'isEnabled', 'rating' => 'rating'];

    protected const REQUIRED_FIELDS = ['isEnabled'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['rating' => \and_y87\php_client_avito\Generated\Schema\Ratings\Rating::class];

    /** @var bool Включен ли рейтинг */
    public bool $isEnabled;

    /** @var \and_y87\php_client_avito\Generated\Schema\Ratings\Rating|null Schema field rating */
    public ?\and_y87\php_client_avito\Generated\Schema\Ratings\Rating $rating = null;
}
