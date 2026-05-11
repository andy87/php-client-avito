<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Response;

use and_y87\PhpClientSdk\Response\Model\AbstractResponse;

/**
 * Ответ Avito API [POST] /special-offers/v1/multiCreate.
 *
 * @documentation https://developers.avito.ru/api-catalog/sbc-gateway/documentation#operation/openApiMultiCreate
 */
class OpenApiMultiCreateResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['common' => 'common', 'dispatches' => 'dispatches'];

    protected const REQUIRED_FIELDS = ['common', 'dispatches'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const MODEL = \and_y87\php_client_avito\Generated\Schema\SbcGateway\OpenApiMultiCreateResponseBody::class;

    /** @var array<string, mixed> Общие данные для всех объявлений */
    public array $common;

    /** @var array<int, array<string, mixed>> Список созданных рассылок */
    public array $dispatches;
}
