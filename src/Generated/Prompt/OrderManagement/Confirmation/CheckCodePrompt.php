<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\OrderManagement\Confirmation;

use Andy87\ClientsAvito\Generated\Prompt\CheckConfirmationCodePrompt2 as BaseCheckConfirmationCodePrompt2;

/**
 * Класс данных запроса Avito API [POST] /order-management/1/order/checkConfirmationCode.
 * 
 * @documentation https://developers.avito.ru/api-catalog/order-management/documentation#operation/checkConfirmationCode
 * 
 * @property string $Authorization Токен для авторизации
 * @property string|null $confirmCode Код, который показал пользователь
 * @property string|null $parcelID ID посылки в Авито
 */
class CheckCodePrompt extends BaseCheckConfirmationCodePrompt2
{
}
