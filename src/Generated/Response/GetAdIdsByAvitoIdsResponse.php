<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Response;

use and_y87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ Avito API [GET] /autoload/v2/items/ad_ids.
 *
 * @documentation https://developers.avito.ru/api-catalog/autoload/documentation#operation/getAdIdsByAvitoIds
 */
class GetAdIdsByAvitoIdsResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['items' => 'items'];

    protected const REQUIRED_FIELDS = ['items'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const MODEL = null;

    /** @var array<int, array<string, mixed>> Список связанных идентификаторов (ID) объявлений из файла с идентификаторами (ID) на Авито */
    public array $items;
}
