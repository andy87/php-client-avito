<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Response;

use and_y87\PhpClientSdk\Response\AbstractResponse;

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

    protected const CASTS = ['rating' => \and_y87\php_client_avito\Generated\Schema\Ratings\Rating::class];

    protected const MODEL = \and_y87\php_client_avito\Generated\Schema\Ratings\GetRatingInfoResponse::class;

    /** @var bool Включен ли рейтинг */
    public bool $isEnabled;

    /** @var \and_y87\php_client_avito\Generated\Schema\Ratings\Rating|null Response field rating */
    public ?\and_y87\php_client_avito\Generated\Schema\Ratings\Rating $rating = null;
}
