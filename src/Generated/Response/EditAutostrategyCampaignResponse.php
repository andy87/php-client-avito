<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Response;

use and_y87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ Avito API [POST] /autostrategy/v1/campaign/edit.
 *
 * @documentation https://developers.avito.ru/api-catalog/autostrategy/documentation#operation/editAutostrategyCampaign
 */
class EditAutostrategyCampaignResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['campaign' => 'campaign'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['campaign' => \and_y87\php_client_avito\Generated\Schema\Autostrategy\Campaign::class];

    protected const MODEL = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\Autostrategy\Campaign|null Response field campaign */
    public ?\and_y87\php_client_avito\Generated\Schema\Autostrategy\Campaign $campaign = null;
}
