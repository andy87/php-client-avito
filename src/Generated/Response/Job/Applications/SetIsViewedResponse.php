<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response\Job\Applications;

use Andy87\ClientsAvito\Generated\Response\ApplicationsSetIsViewedResponse as BaseApplicationsSetIsViewedResponse;

/**
 * Ответ Avito API [POST] /job/v1/applications/set_is_viewed.
 * 
 * @documentation https://developers.avito.ru/api-catalog/job/documentation#operation/applicationsSetIsViewed
 * 
 * @property array<int, array<string, mixed>>|null $applies Список идентификаторов откликов и статусов их просмотренности после обновления
 */
class SetIsViewedResponse extends BaseApplicationsSetIsViewedResponse
{
}
