<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response\Job\Resumes;

use Andy87\ClientsAvito\Generated\Response\ResumesGetResponse as BaseResumesGetResponse;

/**
 * Ответ Avito API [GET] /job/v1/resumes/.
 * 
 * @documentation https://developers.avito.ru/api-catalog/job/documentation#operation/resumesGet
 * 
 * @property \Andy87\ClientsAvito\Generated\Schema\Job\ResumeSearchMeta|null $meta Response field meta
 * @property array<int, \Andy87\ClientsAvito\Generated\Schema\Job\SimplifiedResume>|null $resumes Response field resumes
 */
class GetResponse extends BaseResumesGetResponse
{
}
