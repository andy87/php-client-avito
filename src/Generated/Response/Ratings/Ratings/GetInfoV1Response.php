<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response\Ratings\Ratings;

use Andy87\ClientsAvito\Generated\Response\GetRatingsInfoV1Response as BaseGetRatingsInfoV1Response;

/**
 * Ответ Avito API [GET] /ratings/v1/info.
 * 
 * @documentation https://developers.avito.ru/api-catalog/ratings/documentation#operation/getRatingsInfoV1
 * 
 * @property bool $isEnabled Включен ли рейтинг
 * @property \Andy87\ClientsAvito\Generated\Schema\Ratings\Rating|null $rating Response field rating
 */
class GetInfoV1Response extends BaseGetRatingsInfoV1Response
{
}
