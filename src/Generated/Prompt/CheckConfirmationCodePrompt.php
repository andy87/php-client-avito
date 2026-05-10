<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Prompt;

use Andy87\PhpClientSdk\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [POST] /delivery-sandbox/order/checkConfirmationCode.
 *
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/checkConfirmationCode
 */
class CheckConfirmationCodePrompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/delivery-sandbox/order/checkConfirmationCode';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const QUERY_PARAMETER_STYLES = [];

    protected const FIELD_MAP = ['confirmCode' => 'confirmCode', 'parcelID' => 'parcelID'];

    protected const REQUIRED_FIELDS = ['confirmCode', 'parcelID'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const HEADER_FIELDS = [];

    protected const BODY_FIELDS = ['confirmCode', 'parcelID'];

    protected const BODY_ROOT_FIELD = null;

    /** @var string Body field confirmCode */
    public string $confirmCode;

    /** @var string Body field parcelID */
    public string $parcelID;
}
