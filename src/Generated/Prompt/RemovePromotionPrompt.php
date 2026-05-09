<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [POST] /cpxpromo/1/remove.
 *
 * @documentation https://developers.avito.ru/api-catalog/cpxpromo/documentation#operation/removePromotion
 */
class RemovePromotionPrompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/cpxpromo/1/remove';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const QUERY_PARAMETER_STYLES = [];

    protected const FIELD_MAP = ['itemID' => 'itemID'];

    protected const REQUIRED_FIELDS = ['itemID'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const HEADER_FIELDS = [];

    protected const BODY_FIELDS = ['itemID'];

    protected const BODY_ROOT_FIELD = null;

    /** @var int Идентификатор объявления */
    public int $itemID;
}
