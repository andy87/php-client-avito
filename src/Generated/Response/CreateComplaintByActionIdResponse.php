<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response;

use Andy87\ClientsBase\Response\AbstractResponse;

/**
 * DTO ответа Avito API createComplaintByActionId.
 */
class CreateComplaintByActionIdResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['errorData' => 'error', 'success' => 'success'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['errorData' => \Andy87\ClientsAvito\Generated\Schema\Cpa\CpaError::class];

    protected const MODEL = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Cpa\CpaError|null Response field error */
    public ?\Andy87\ClientsAvito\Generated\Schema\Cpa\CpaError $errorData = null;

    /** @var bool|null Response field success */
    public ?bool $success = null;
}
