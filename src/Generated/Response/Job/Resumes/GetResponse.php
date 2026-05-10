<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Response\Job\Resumes;

use php_client_avito\Generated\Response\ResumesGetResponse as BaseResumesGetResponse;

/**
 * Ответ Avito API [GET] /job/v1/resumes/.
 *
 * @documentation https://developers.avito.ru/api-catalog/job/documentation#operation/resumesGet
 *
 * @property \php_client_avito\Generated\Schema\Job\ResumeSearchMeta|null $meta Response field meta
 * @property array<int, \php_client_avito\Generated\Schema\Job\SimplifiedResume>|null $resumes Response field resumes
 */
class GetResponse extends BaseResumesGetResponse
{
}
