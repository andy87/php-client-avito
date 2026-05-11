<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Response;

use and_y87\PhpClientSdk\Response\Model\AbstractResponse;

/**
 * Ответ Avito API [GET] /core/v1/items.
 *
 * @documentation https://developers.avito.ru/api-catalog/item/documentation#operation/getItemsInfo
 */
class GetItemsInfoResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['meta' => 'meta', 'resources' => 'resources'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const MODEL = \and_y87\php_client_avito\Generated\Schema\Item\ItemsInfoWithCategoryAvito::class;

    /** @var array<string, mixed>|null Response field meta */
    public ?array $meta = null;

    /** @var array<int, array<string, mixed>>|null Response field resources */
    public ?array $resources = null;
}
