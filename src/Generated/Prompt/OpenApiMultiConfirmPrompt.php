<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [POST] /special-offers/v1/multiConfirm.
 * 
 * @documentation https://developers.avito.ru/api-catalog/sbc-gateway/documentation#operation/openApiMultiConfirm
 */
class OpenApiMultiConfirmPrompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/special-offers/v1/multiConfirm';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const FIELD_MAP = ['dispatches' => 'dispatches', 'expiresAt' => 'expiresAt'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['expiresAt'];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const BODY_FIELDS = ['dispatches', 'expiresAt'];

    /** @var array<int, array<string, mixed>>|null Body field dispatches */
    public ?array $dispatches = null;

    /** @var int|null Дата окончания предложения */
    public ?int $expiresAt = null;
}
