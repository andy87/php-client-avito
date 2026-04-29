<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * DTO запроса Avito API checkConfirmationCode.
 */
class CheckConfirmationCodePrompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/delivery-sandbox/order/checkConfirmationCode';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const FIELD_MAP = ['confirmCode' => 'confirmCode', 'parcelID' => 'parcelID'];

    protected const REQUIRED_FIELDS = ['confirmCode', 'parcelID'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const BODY_FIELDS = ['confirmCode', 'parcelID'];

    /** @var string Body field confirmCode */
    public string $confirmCode;

    /** @var string Body field parcelID */
    public string $parcelID;
}
