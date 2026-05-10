<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Response\Autoteka\Teaser;

use php_client_avito\Generated\Response\GetTeaserResponse as BaseGetTeaserResponse;

/**
 * Ответ Avito API [GET] /autoteka/v1/teasers/{teaser_id}.
 *
 * @documentation https://developers.avito.ru/api-catalog/autoteka/documentation#operation/getTeaser
 *
 * @property \php_client_avito\Generated\Schema\Autoteka\Teaser $data Response field data
 * @property string $status Статус готовности
 * @property int $teaserId Идентификатор тизера
 */
class GetResponse extends BaseGetTeaserResponse
{
}
