<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Response;

use Andy87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ Avito API [POST] /autostrategy/v1/campaign/create.
 *
 * @documentation https://developers.avito.ru/api-catalog/autostrategy/documentation#operation/createAutostrategyCampaign
 */
class CreateAutostrategyCampaignResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['campaign' => 'campaign'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['campaign' => \php_client_avito\Generated\Schema\Autostrategy\Campaign::class];

    protected const MODEL = null;

    /** @var \php_client_avito\Generated\Schema\Autostrategy\Campaign|null Response field campaign */
    public ?\php_client_avito\Generated\Schema\Autostrategy\Campaign $campaign = null;
}
