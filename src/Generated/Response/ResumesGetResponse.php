<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response;

use Andy87\ClientsBase\Response\AbstractResponse;

/**
 * DTO ответа Avito API resumesGet.
 */
class ResumesGetResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['meta' => 'meta', 'resumes' => 'resumes'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['meta' => \Andy87\ClientsAvito\Generated\Schema\Job\ResumeSearchMeta::class, 'resumes' => [\Andy87\ClientsAvito\Generated\Schema\Job\SimplifiedResume::class]];

    protected const MODEL = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Job\ResumeSearchMeta|null Response field meta */
    public ?\Andy87\ClientsAvito\Generated\Schema\Job\ResumeSearchMeta $meta = null;

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\Job\SimplifiedResume>|null Response field resumes */
    public ?array $resumes = null;
}
