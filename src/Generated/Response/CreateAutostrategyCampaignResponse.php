<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response;

use Andy87\ClientsBase\Response\AbstractResponse;

/**
 * DTO ответа Avito API createAutostrategyCampaign.
 */
class CreateAutostrategyCampaignResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['campaign' => 'campaign'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['campaign' => \Andy87\ClientsAvito\Generated\Schema\Autostrategy\Campaign::class];

    protected const MODEL = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Autostrategy\Campaign|null Response field campaign */
    public ?\Andy87\ClientsAvito\Generated\Schema\Autostrategy\Campaign $campaign = null;
}
