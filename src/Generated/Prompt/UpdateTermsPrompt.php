<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [POST] /delivery-sandbox/tariffs/{tariff_id}/terms.
 * 
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/UpdateTerms
 */
class UpdateTermsPrompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/delivery-sandbox/tariffs/{tariff_id}/terms';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const FIELD_MAP = ['tariff_id' => 'tariff_id'];

    protected const REQUIRED_FIELDS = ['tariff_id'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = ['tariff_id'];

    protected const QUERY_FIELDS = [];

    protected const BODY_FIELDS = [];
    /** @var string|int path-parameter tariff_id */
    public string|int $tariff_id;
}
