<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Provider\OrderManagement;

use and_y87\php_client_avito\BaseAvitoProvider;
use and_y87\php_client_avito\Generated\Prompt\CheckConfirmationCodePrompt2;
use and_y87\php_client_avito\Generated\Response\OrderManagement\Confirmation\CheckCodeResponse;

/**
 * Группа методов "confirmation" раздела Avito API "Управление заказами".
 */
class ConfirmationProvider extends BaseAvitoProvider
{
    /**
     * Метод для проверки кода подтверждения заказа.
     *
     * Данный метод используется для подтверждения личности для получения заказа в ПВЗ. Пользователь называет код  из приложения сотруднику СД. Далее через API служба доставки проверяет его валидность.
     * Максимальное количество запросов в минуту - 2000.
     *
     * OperationId: checkConfirmationCode.
     * HTTP: POST /order-management/1/order/checkConfirmationCode.
     *
     * @param CheckConfirmationCodePrompt2 $prompt DTO запроса.
     *
     * @return CheckCodeResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function checkCode(CheckConfirmationCodePrompt2 $prompt): CheckCodeResponse
    {
        /** @var CheckCodeResponse $response */
        $response = $this->request($prompt, CheckCodeResponse::class);

        return $response;
    }
}
