<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt\DeliverySandbox\Confirmation;

use and_y87\php_client_avito\Generated\Prompt\CheckConfirmationCodePrompt as BaseCheckConfirmationCodePrompt;

/**
 * Класс данных запроса Avito API [POST] /delivery-sandbox/order/checkConfirmationCode.
 *
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/checkConfirmationCode
 *
 * @property string $confirmCode Body field confirmCode
 * @property string $parcelID Body field parcelID
 */
class CheckCodePrompt extends BaseCheckConfirmationCodePrompt
{
}
