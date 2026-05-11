<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Response;

use and_y87\PhpClientSdk\Response\Model\AbstractResponse;

/**
 * Ответ Avito API [POST] /listItemsByEmployeeIdV1.
 *
 * @documentation https://developers.avito.ru/api-catalog/accounts-hierarchy/documentation#operation/listItemsByEmployeeIdV1
 */
class ListItemsByEmployeeIdV1Response extends AbstractResponse
{
    protected const FIELD_MAP = ['hasNext' => 'hasNext', 'items' => 'items'];

    protected const REQUIRED_FIELDS = ['hasNext', 'items'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const MODEL = \and_y87\php_client_avito\Generated\Schema\AccountsHierarchy\ListItemsByEmployeeIdResult::class;

    /** @var bool Можно пагинировать дальше по списку */
    public bool $hasNext;

    /** @var array<int, int> Список идентификаторов объявлений */
    public array $items;
}
