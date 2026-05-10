<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt;

use Andy87\PhpClientSdk\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [POST] /order-management/1/order/checkConfirmationCode.
 *
 * @documentation https://developers.avito.ru/api-catalog/order-management/documentation#operation/checkConfirmationCode
 */
class CheckConfirmationCodePrompt2 extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/order-management/1/order/checkConfirmationCode';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const QUERY_PARAMETER_STYLES = [];

    protected const FIELD_MAP = ['confirmCode' => 'confirmCode', 'parcelID' => 'parcelID'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const HEADER_FIELDS = [];

    protected const BODY_FIELDS = ['confirmCode', 'parcelID'];

    protected const BODY_ROOT_FIELD = null;

    /** @var string|null Код, который показал пользователь */
    public ?string $confirmCode = null;

    /** @var string|null ID посылки в Авито */
    public ?string $parcelID = null;
}
