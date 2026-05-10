<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Response;

use Andy87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ Avito API [POST] /cpa/v1/createComplaint.
 *
 * @documentation https://developers.avito.ru/api-catalog/cpa/documentation#operation/postCreateComplaint
 */
class PostCreateComplaintResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['errorData' => 'error', 'success' => 'success'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['errorData' => \php_client_avito\Generated\Schema\Cpa\CpaError::class];

    protected const MODEL = null;

    /** @var \php_client_avito\Generated\Schema\Cpa\CpaError|null Response field error */
    public ?\php_client_avito\Generated\Schema\Cpa\CpaError $errorData = null;

    /** @var bool|null Response field success */
    public ?bool $success = null;
}
