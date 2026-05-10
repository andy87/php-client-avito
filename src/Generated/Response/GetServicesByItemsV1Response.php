<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Response;

use Andy87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ Avito API [POST] /promotion/v1/items/services/get.
 *
 * @documentation https://developers.avito.ru/api-catalog/promotion/documentation#operation/get_services_by_items_v1
 */
class GetServicesByItemsV1Response extends AbstractResponse
{
    protected const FIELD_MAP = ['errors' => 'errors', 'items' => 'items'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['errors' => [\php_client_avito\Generated\Schema\Promotion\ErrorByItemV1::class], 'items' => [\php_client_avito\Generated\Schema\Promotion\ServicesByItemV1::class]];

    protected const MODEL = \php_client_avito\Generated\Schema\Promotion\GetServicesByItemsV1Resp::class;

    /** @var array<int, \php_client_avito\Generated\Schema\Promotion\ErrorByItemV1>|null Информация об ошибках получения варианта бюджета */
    public ?array $errors = null;

    /** @var array<int, \php_client_avito\Generated\Schema\Promotion\ServicesByItemV1>|null Информация об услугах продвижения по объявлениям */
    public ?array $items = null;
}
