<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Response;

use and_y87\PhpClientSdk\Response\Model\AbstractResponse;

/**
 * Ответ Avito API [PUT] /core/v1/accounts/{user_id}/items/{item_id}/vas.
 *
 * @documentation https://developers.avito.ru/api-catalog/item/documentation#operation/putItemVas
 */
class PutItemVasResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['amount' => 'amount', 'vas' => 'vas'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['vas' => \and_y87\php_client_avito\Generated\Schema\Item\InfoVas::class];

    protected const MODEL = \and_y87\php_client_avito\Generated\Schema\Item\VasApplyAvito::class;

    /** @var float|null Сумма списания за применение услуги */
    public ?float $amount = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\Item\InfoVas|null Response field vas */
    public ?\and_y87\php_client_avito\Generated\Schema\Item\InfoVas $vas = null;
}
