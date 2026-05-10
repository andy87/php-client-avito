<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Response;

use Andy87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ Avito API [GET] /job/v1/resumes/.
 *
 * @documentation https://developers.avito.ru/api-catalog/job/documentation#operation/resumesGet
 */
class ResumesGetResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['meta' => 'meta', 'resumes' => 'resumes'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['meta' => \php_client_avito\Generated\Schema\Job\ResumeSearchMeta::class, 'resumes' => [\php_client_avito\Generated\Schema\Job\SimplifiedResume::class]];

    protected const MODEL = null;

    /** @var \php_client_avito\Generated\Schema\Job\ResumeSearchMeta|null Response field meta */
    public ?\php_client_avito\Generated\Schema\Job\ResumeSearchMeta $meta = null;

    /** @var array<int, \php_client_avito\Generated\Schema\Job\SimplifiedResume>|null Response field resumes */
    public ?array $resumes = null;
}
