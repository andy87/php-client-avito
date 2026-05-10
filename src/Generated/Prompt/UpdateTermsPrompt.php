<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Prompt;

use Andy87\PhpClientSdk\Prompt\AbstractPrompt;

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

    protected const QUERY_PARAMETER_STYLES = [];

    protected const FIELD_MAP = ['tariff_id' => 'tariff_id', 'body' => 'body'];

    protected const REQUIRED_FIELDS = ['tariff_id', 'body'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['body' => \php_client_avito\Generated\Schema\DeliverySandbox\UpdateTermsRequest::class];

    protected const PATH_FIELDS = ['tariff_id'];

    protected const QUERY_FIELDS = [];

    protected const HEADER_FIELDS = [];

    protected const BODY_FIELDS = [];

    protected const BODY_ROOT_FIELD = 'body';

    /** @var int id тарифа, к которому должны быть прикреплены добавляемые области */
    public int $tariff_id;

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\UpdateTermsRequest Request body */
    public \php_client_avito\Generated\Schema\DeliverySandbox\UpdateTermsRequest $body;
}
