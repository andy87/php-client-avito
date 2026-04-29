<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider\DeliverySandbox;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\CheckConfirmationCodePrompt;
use Andy87\ClientsAvito\Generated\Response\DeliverySandbox\Confirmation\CheckCodeResponse;

/**
 * Группа методов "confirmation" раздела Avito API "Доставка".
 */
class ConfirmationProvider extends BaseAvitoProvider
{
    /**
     * Проверка кода подтверждения
     * 
     * Метод для проверки службой доставки кода подтверждения, который пользователь показал на пункте выдачи заказа.<br />
     * 
     * ### Статус проверки кода
     * | status      |       Значение                                |
     * |-------------|-----------------------------------------------|
     * |   success   | Код верный.                                   |
     * |   fail      | Код неверный.                                 |
     * |   expired   | Код подтверждения устарел.                    |
     * |   attempts  | Превышено максимальное количество попыток.    |
     * 
     * OperationId: checkConfirmationCode.
     * HTTP: POST /delivery-sandbox/order/checkConfirmationCode.
     *
     * @param CheckConfirmationCodePrompt $prompt DTO запроса.
     *
     * @return CheckCodeResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function checkCode(CheckConfirmationCodePrompt $prompt): CheckCodeResponse
    {
        /** @var CheckCodeResponse $response */
        $response = $this->request($prompt, CheckCodeResponse::class);

        return $response;
    }
}
