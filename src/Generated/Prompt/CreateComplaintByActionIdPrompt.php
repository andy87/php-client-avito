<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * DTO запроса Avito API createComplaintByActionId.
 */
class CreateComplaintByActionIdPrompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/cpa/v1/createComplaintByActionId';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = false;

    protected const FIELD_MAP = ['actionId' => 'actionId', 'message' => 'message'];

    protected const REQUIRED_FIELDS = ['actionId', 'message'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const BODY_FIELDS = ['actionId', 'message'];

    /** @var int ID действия (action), по которому подаётся жалоба */
    public int $actionId;

    /** @var string Сообщение, прикрепленное к жалобе */
    public string $message;
}
