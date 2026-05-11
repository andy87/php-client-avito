<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Response;

use and_y87\PhpClientSdk\Response\Model\AbstractResponse;

/**
 * Ответ Avito API [POST] /promotion/v1/items/services/bbip/suggests/get.
 *
 * @documentation https://developers.avito.ru/api-catalog/promotion/documentation#operation/get_bbip_suggests_by_items_v1
 */
class GetBbipSuggestsByItemsV1Response extends AbstractResponse
{
    protected const FIELD_MAP = ['errors' => 'errors', 'items' => 'items'];

    protected const REQUIRED_FIELDS = ['items', 'errors'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['errors' => [\and_y87\php_client_avito\Generated\Schema\Promotion\ErrorByItemV1::class], 'items' => [\and_y87\php_client_avito\Generated\Schema\Promotion\BbipSuggestByItemV1::class]];

    protected const MODEL = \and_y87\php_client_avito\Generated\Schema\Promotion\GetBbipSuggestsV1Resp::class;

    /** @var array<int, \and_y87\php_client_avito\Generated\Schema\Promotion\ErrorByItemV1> Информация об ошибках получения варианта бюджета */
    public array $errors;

    /** @var array<int, \and_y87\php_client_avito\Generated\Schema\Promotion\BbipSuggestByItemV1> Предлагаемые варианты бюджетов по каждому объявлению */
    public array $items;
}
