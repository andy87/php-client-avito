<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Response;

use and_y87\PhpClientSdk\Response\Model\AbstractResponse;

/**
 * Ответ Avito API [POST] /cpa/v1/createComplaintByActionId.
 *
 * @documentation https://developers.avito.ru/api-catalog/cpa/documentation#operation/createComplaintByActionId
 */
class CreateComplaintByActionIdResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['errorData' => 'error', 'success' => 'success'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['errorData' => \and_y87\php_client_avito\Generated\Schema\Cpa\CpaError::class];

    protected const MODEL = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\Cpa\CpaError|null Response field error */
    public ?\and_y87\php_client_avito\Generated\Schema\Cpa\CpaError $errorData = null;

    /** @var bool|null Response field success */
    public ?bool $success = null;
}
