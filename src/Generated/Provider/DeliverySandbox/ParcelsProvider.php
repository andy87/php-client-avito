<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Provider\DeliverySandbox;

use and_y87\php_client_avito\BaseAvitoProvider;
use and_y87\php_client_avito\Generated\Prompt\ChangeParcelsPrompt;
use and_y87\php_client_avito\Generated\Response\DeliverySandbox\Parcels\ChangeResponse;

/**
 * Группа методов "parcels" раздела Avito API "Доставка".
 */
class ParcelsProvider extends BaseAvitoProvider
{
    /**
     * Обновление свойств посылок
     *
     * Описание механики изменения посылок [здесь](https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#info/izmenenie_svoystv_posylok).
     *
     * Метод реализуется на стороне службы доставки. Предназначен для обновления различных свойств посылок по инициативе Avito.
     *
     * OperationId: ChangeParcels.
     * HTTP: POST /sandbox/changeParcels.
     *
     * @param ChangeParcelsPrompt $prompt DTO запроса.
     *
     * @return ChangeResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function change(ChangeParcelsPrompt $prompt): ChangeResponse
    {
        /** @var ChangeResponse $response */
        $response = $this->request($prompt, ChangeResponse::class);

        return $response;
    }
}
