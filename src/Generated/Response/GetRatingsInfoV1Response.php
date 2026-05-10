<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Response;

use Andy87\PhpClientSdk\Response\AbstractResponse;

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

    protected const CASTS = ['rating' => \php_client_avito\Generated\Schema\Ratings\Rating::class];

    protected const MODEL = \php_client_avito\Generated\Schema\Ratings\GetRatingInfoResponse::class;

    /** @var bool Включен ли рейтинг */
    public bool $isEnabled;

    /** @var \php_client_avito\Generated\Schema\Ratings\Rating|null Response field rating */
    public ?\php_client_avito\Generated\Schema\Ratings\Rating $rating = null;
}
