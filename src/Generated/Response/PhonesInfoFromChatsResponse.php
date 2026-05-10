<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Response;

use Andy87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ Avito API [POST] /cpa/v1/phonesInfoFromChats.
 *
 * @documentation https://developers.avito.ru/api-catalog/cpa/documentation#operation/phonesInfoFromChats
 */
class PhonesInfoFromChatsResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['results' => 'results', 'total' => 'total'];

    protected const REQUIRED_FIELDS = ['total', 'results'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['results' => [\and_y87\php_client_avito\Generated\Schema\Cpa\OpenAPIPhonesInfoFromChatsOut::class]];

    protected const MODEL = null;

    /** @var array<int, \and_y87\php_client_avito\Generated\Schema\Cpa\OpenAPIPhonesInfoFromChatsOut> Response field results */
    public array $results;

    /** @var int Число найденных чатов */
    public int $total;
}
