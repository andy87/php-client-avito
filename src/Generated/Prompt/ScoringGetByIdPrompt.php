<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Prompt;

use Andy87\PhpClientSdk\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [GET] /autoteka/v1/scoring/{scoring_id}.
 *
 * @documentation https://developers.avito.ru/api-catalog/autoteka/documentation#operation/scoringGetById
 */
class ScoringGetByIdPrompt extends AbstractPrompt
{
    protected const METHOD = 'GET';

    protected const ENDPOINT = '/autoteka/v1/scoring/{scoring_id}';

    protected const CONTENT_TYPE = null;

    protected const AUTHORIZATION_REQUIRED = true;

    protected const QUERY_PARAMETER_STYLES = [];

    protected const FIELD_MAP = ['scoring_id' => 'scoring_id'];

    protected const REQUIRED_FIELDS = ['scoring_id'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = ['scoring_id'];

    protected const QUERY_FIELDS = [];

    protected const HEADER_FIELDS = [];

    protected const BODY_FIELDS = [];

    protected const BODY_ROOT_FIELD = null;

    /** @var int Идентификатор скоринга. */
    public int $scoring_id;
}
