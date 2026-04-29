<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response;

use Andy87\ClientsBase\Response\AbstractResponse;

/**
 * DTO ответа Avito API get_services_by_items_v1.
 */
class GetServicesByItemsV1Response extends AbstractResponse
{
    protected const FIELD_MAP = ['errors' => 'errors', 'items' => 'items'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['errors' => [\Andy87\ClientsAvito\Generated\Schema\Promotion\ErrorByItemV1::class], 'items' => [\Andy87\ClientsAvito\Generated\Schema\Promotion\ServicesByItemV1::class]];

    protected const MODEL = \Andy87\ClientsAvito\Generated\Schema\Promotion\GetServicesByItemsV1Resp::class;

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\Promotion\ErrorByItemV1>|null Информация об ошибках получения варианта бюджета */
    public ?array $errors = null;

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\Promotion\ServicesByItemV1>|null Информация об услугах продвижения по объявлениям */
    public ?array $items = null;
}
