<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [GET] /job/v2/resumes/{resume_id}.
 *
 * @documentation https://developers.avito.ru/api-catalog/job/documentation#operation/resumeGetItem
 */
class ResumeGetItemPrompt extends AbstractPrompt
{
    protected const METHOD = 'GET';

    protected const ENDPOINT = '/job/v2/resumes/{resume_id}';

    protected const CONTENT_TYPE = null;

    protected const AUTHORIZATION_REQUIRED = true;

    protected const QUERY_PARAMETER_STYLES = ['fields' => ['style' => 'form', 'explode' => true], 'params' => ['style' => 'form', 'explode' => true], 'photos' => ['style' => 'form', 'explode' => true]];

    protected const FIELD_MAP = ['X_Is_Employee' => 'X-Is-Employee', 'resume_id' => 'resume_id', 'fields' => 'fields', 'params' => 'params', 'photos' => 'photos'];

    protected const REQUIRED_FIELDS = ['resume_id'];

    protected const NULLABLE_FIELDS = ['X_Is_Employee'];

    protected const CASTS = [];

    protected const PATH_FIELDS = ['resume_id'];

    protected const QUERY_FIELDS = ['fields', 'params', 'photos'];

    protected const HEADER_FIELDS = ['X_Is_Employee'];

    protected const BODY_FIELDS = [];

    protected const BODY_ROOT_FIELD = null;

    /** @var bool|null Включает привилегии компании для сотрудника, получает доступ к резюме от имени компании */
    public ?bool $X_Is_Employee = null;

    /** @var int Идентификатор резюме */
    public int $resume_id;

    /** @var string|null Поля основного тела ответа (можно указать несколько значений через запятую). По умолчанию отображаются все поля. */
    public ?string $fields = null;

    /** @var string|null Дополнительные поля, которые входят в params (можно указать несколько значений через запятую). По умолчанию отображаются все поля. */
    public ?string $params = null;

    /** @var bool|null Признак того, нужно ли отдавать картинки, по умолчанию false */
    public ?bool $photos = null;
}
