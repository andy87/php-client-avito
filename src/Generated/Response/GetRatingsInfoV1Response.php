<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response;

use Andy87\ClientsBase\Response\AbstractResponse;

/**
 * Ответ Avito API [GET] /ratings/v1/info.
 * 
 * @documentation https://developers.avito.ru/api-catalog/ratings/documentation#operation/getRatingsInfoV1
 */
class GetRatingsInfoV1Response extends AbstractResponse
{
    protected const FIELD_MAP = ['isEnabled' => 'isEnabled', 'rating' => 'rating'];

    protected const REQUIRED_FIELDS = ['isEnabled'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['rating' => \Andy87\ClientsAvito\Generated\Schema\Ratings\Rating::class];

    protected const MODEL = \Andy87\ClientsAvito\Generated\Schema\Ratings\GetRatingInfoResponse::class;

    /** @var bool Включен ли рейтинг */
    public bool $isEnabled;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Ratings\Rating|null Response field rating */
    public ?\Andy87\ClientsAvito\Generated\Schema\Ratings\Rating $rating = null;
}
