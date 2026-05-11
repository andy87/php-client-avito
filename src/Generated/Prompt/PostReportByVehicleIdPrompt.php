<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt;

use and_y87\PhpClientSdk\Request\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [POST] /autoteka/v1/reports-by-vehicle-id.
 *
 * @documentation https://developers.avito.ru/api-catalog/autoteka/documentation#operation/postReportByVehicleId
 */
class PostReportByVehicleIdPrompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/autoteka/v1/reports-by-vehicle-id';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const QUERY_PARAMETER_STYLES = [];

    protected const FIELD_MAP = ['vehicleId' => 'vehicleId'];

    protected const REQUIRED_FIELDS = ['vehicleId'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const HEADER_FIELDS = [];

    protected const BODY_FIELDS = ['vehicleId'];

    protected const BODY_ROOT_FIELD = null;

    /** @var string Идентификатор запрашиваемого авто (vin/frame). */
    public string $vehicleId;
}
