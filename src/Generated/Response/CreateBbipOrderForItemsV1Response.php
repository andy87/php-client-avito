<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response;

use Andy87\ClientsBase\Response\AbstractResponse;

/**
 * Ответ Avito API [PUT] /promotion/v1/items/services/bbip/orders/create.
 * 
 * @documentation https://developers.avito.ru/api-catalog/promotion/documentation#operation/create_bbip_order_for_items_v1
 */
class CreateBbipOrderForItemsV1Response extends AbstractResponse
{
    protected const FIELD_MAP = ['errors' => 'errors', 'orderId' => 'orderId'];

    protected const REQUIRED_FIELDS = ['errors'];

    protected const NULLABLE_FIELDS = ['orderId'];

    protected const CASTS = ['errors' => [\Andy87\ClientsAvito\Generated\Schema\Promotion\ErrorByItemV1::class]];

    protected const MODEL = \Andy87\ClientsAvito\Generated\Schema\Promotion\OrderBbipForItemsV1Resp::class;

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\Promotion\ErrorByItemV1> Информация об ошибках по объявлениям */
    public array $errors;

    /** @var string|null Идентификатор созданной заявки на подключение услуг продвижения */
    public ?string $orderId = null;
}
