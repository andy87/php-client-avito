<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Response\Ratings\Ratings;

use php_client_avito\Generated\Response\GetRatingsInfoV1Response as BaseGetRatingsInfoV1Response;

/**
 * Ответ Avito API [GET] /ratings/v1/info.
 *
 * @documentation https://developers.avito.ru/api-catalog/ratings/documentation#operation/getRatingsInfoV1
 *
 * @property bool $isEnabled Включен ли рейтинг
 * @property \php_client_avito\Generated\Schema\Ratings\Rating|null $rating Response field rating
 */
class GetInfoV1Response extends BaseGetRatingsInfoV1Response
{
}
