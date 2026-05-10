<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt;

use Andy87\PhpClientSdk\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [GET] /auction/1/bids.
 *
 * @documentation https://developers.avito.ru/api-catalog/auction/documentation#operation/getUserBids
 */
class GetUserBidsPrompt extends AbstractPrompt
{
    protected const METHOD = 'GET';

    protected const ENDPOINT = '/auction/1/bids';

    protected const CONTENT_TYPE = null;

    protected const AUTHORIZATION_REQUIRED = true;

    protected const QUERY_PARAMETER_STYLES = ['fromItemID' => ['style' => 'form', 'explode' => true], 'batchSize' => ['style' => 'form', 'explode' => true]];

    protected const FIELD_MAP = ['fromItemID' => 'fromItemID', 'batchSize' => 'batchSize'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = ['fromItemID', 'batchSize'];

    protected const HEADER_FIELDS = [];

    protected const BODY_FIELDS = [];

    protected const BODY_ROOT_FIELD = null;

    /** @var int|null Идентификатор последнего объявления в предыдущей пачке (по умолчанию 0) */
    public ?int $fromItemID = null;

    /** @var int|null Кол-во объявлений в пачке (максимум 200) */
    public ?int $batchSize = null;
}
