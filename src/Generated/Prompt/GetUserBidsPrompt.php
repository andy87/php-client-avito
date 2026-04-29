<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

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

    protected const FIELD_MAP = ['Authorization' => 'Authorization', 'fromItemID' => 'fromItemID', 'batchSize' => 'batchSize'];

    protected const REQUIRED_FIELDS = ['Authorization'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = ['fromItemID', 'batchSize'];

    protected const BODY_FIELDS = [];

    /** @var string Токен для авторизации */
    public string $Authorization;

    /** @var int|null Идентификатор последнего объявления в предыдущей пачке (по умолчанию 0) */
    public ?int $fromItemID = null;

    /** @var int|null Кол-во объявлений в пачке (максимум 200) */
    public ?int $batchSize = null;
}
