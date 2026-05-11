<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt;

use and_y87\PhpClientSdk\Request\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [POST] /delivery-sandbox/tariffs/{tariff_id}/terminals.
 *
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/AddTerminalsSandbox
 */
class AddTerminalsSandboxPrompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/delivery-sandbox/tariffs/{tariff_id}/terminals';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const QUERY_PARAMETER_STYLES = [];

    protected const FIELD_MAP = ['tariff_id' => 'tariff_id', 'body' => 'body'];

    protected const REQUIRED_FIELDS = ['tariff_id', 'body'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['body' => \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\AddTerminalsRequest::class];

    protected const PATH_FIELDS = ['tariff_id'];

    protected const QUERY_FIELDS = [];

    protected const HEADER_FIELDS = [];

    protected const BODY_FIELDS = [];

    protected const BODY_ROOT_FIELD = 'body';

    /** @var int id тарифа, к которому должны быть прикреплены добавляемые терминалы */
    public int $tariff_id;

    /** @var \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\AddTerminalsRequest Request body */
    public \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\AddTerminalsRequest $body;
}
