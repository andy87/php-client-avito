<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * DTO запроса Avito API ChangeParcelResult.
 */
class ChangeParcelResultPrompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/delivery/order/changeParcelResult';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = false;

    protected const FIELD_MAP = ['id' => 'id', 'options' => 'options', 'reason' => 'reason', 'status' => 'status'];

    protected const REQUIRED_FIELDS = ['id', 'status'];

    protected const NULLABLE_FIELDS = ['options'];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const BODY_FIELDS = ['id', 'options', 'reason', 'status'];

    /** @var string Идентификатор заявки на изменение посылки */
    public string $id;

    /** @var array<string, mixed>|null Body field options */
    public ?array $options = null;

    /** @var string|null Причина отклонения заявки (заполняется в случае отклонения).
 */
    public ?string $reason = null;

    /** @var string Статус обработки заявки */
    public string $status;
}
