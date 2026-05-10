<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Response;

use Andy87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ Avito API [POST] /promotion/v1/items/services/dict.
 *
 * @documentation https://developers.avito.ru/api-catalog/promotion/documentation#operation/get_dict_of_services_v1
 */
class GetDictOfServicesV1Response extends AbstractResponse
{
    protected const FIELD_MAP = [];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const MODEL = \php_client_avito\Generated\Schema\Promotion\GetDictOfServicesV1Resp::class;
}
