<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\PhpClientSdk\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [POST] /cpa/v2/balanceInfo.
 *
 * @documentation https://developers.avito.ru/api-catalog/cpa/documentation#operation/balanceInfoV2
 */
class BalanceInfoV2Prompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/cpa/v2/balanceInfo';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const QUERY_PARAMETER_STYLES = [];

    protected const FIELD_MAP = ['X_Source' => 'X-Source', 'body' => 'body'];

    protected const REQUIRED_FIELDS = ['X_Source'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const HEADER_FIELDS = ['X_Source'];

    protected const BODY_FIELDS = [];

    protected const BODY_ROOT_FIELD = 'body';

    /** @var string Имя сервиса, отправляющего запрос */
    public string $X_Source;

    /** @var string|null Request body */
    public ?string $body = null;
}
