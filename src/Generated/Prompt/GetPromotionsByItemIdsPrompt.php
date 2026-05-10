<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt;

use Andy87\PhpClientSdk\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [POST] /cpxpromo/1/getPromotionsByItemIds.
 *
 * @documentation https://developers.avito.ru/api-catalog/cpxpromo/documentation#operation/getPromotionsByItemIds
 */
class GetPromotionsByItemIdsPrompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/cpxpromo/1/getPromotionsByItemIds';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const QUERY_PARAMETER_STYLES = [];

    protected const FIELD_MAP = ['itemIDs' => 'itemIDs'];

    protected const REQUIRED_FIELDS = ['itemIDs'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const HEADER_FIELDS = [];

    protected const BODY_FIELDS = ['itemIDs'];

    protected const BODY_ROOT_FIELD = null;

    /** @var array<int, int> Body field itemIDs */
    public array $itemIDs;
}
