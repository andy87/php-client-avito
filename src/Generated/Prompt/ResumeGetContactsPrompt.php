<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [GET] /job/v1/resumes/{resume_id}/contacts/.
 * 
 * @documentation https://developers.avito.ru/api-catalog/job/documentation#operation/resumeGetContacts
 */
class ResumeGetContactsPrompt extends AbstractPrompt
{
    protected const METHOD = 'GET';

    protected const ENDPOINT = '/job/v1/resumes/{resume_id}/contacts/';

    protected const CONTENT_TYPE = null;

    protected const AUTHORIZATION_REQUIRED = true;

    protected const FIELD_MAP = ['resume_id' => 'resume_id'];

    protected const REQUIRED_FIELDS = ['resume_id'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = ['resume_id'];

    protected const QUERY_FIELDS = [];

    protected const BODY_FIELDS = [];
    /** @var string|int path-parameter resume_id */
    public string|int $resume_id;
}
