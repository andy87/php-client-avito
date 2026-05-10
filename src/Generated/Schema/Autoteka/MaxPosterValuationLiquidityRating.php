<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\Autoteka;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/MaxPosterValuationLiquidityRating.
 */
class MaxPosterValuationLiquidityRating extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['attentionCode' => 'attentionCode', 'rating' => 'rating', 'ratingValue' => 'ratingValue'];

    protected const REQUIRED_FIELDS = ['rating', 'ratingValue', 'attentionCode'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Код уровня внимания */
    public string $attentionCode;

    /** @var string Рейтинг ликвидности */
    public string $rating;

    /** @var int Значение ликвидности (1-15) */
    public int $ratingValue;
}
