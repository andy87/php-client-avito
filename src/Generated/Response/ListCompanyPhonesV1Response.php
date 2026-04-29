<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response;

use Andy87\ClientsBase\Response\AbstractResponse;

/**
 * Ответ Avito API [GET] /listCompanyPhonesV1.
 * 
 * @documentation https://developers.avito.ru/api-catalog/accounts-hierarchy/documentation#operation/listCompanyPhonesV1
 */
class ListCompanyPhonesV1Response extends AbstractResponse
{
    protected const FIELD_MAP = ['result' => 'result'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const MODEL = \Andy87\ClientsAvito\Generated\Schema\AccountsHierarchy\CompanyPhonesResult::class;

    /** @var array<string, mixed>|null Response field result */
    public ?array $result = null;
}
