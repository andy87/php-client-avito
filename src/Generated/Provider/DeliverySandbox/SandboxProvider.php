<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider\DeliverySandbox;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\CreateSandboxParcelV2Prompt;
use Andy87\ClientsAvito\Generated\Response\DeliverySandbox\Sandbox\CreateParcelV2Response;

/**
 * Группа методов "sandbox" раздела Avito API "Доставка".
 */
class SandboxProvider extends BaseAvitoProvider
{
    /**
     * Создание тестовой посылки
     * 
     * Метод доступен только в Песочнице.
     * 
     * Метод запускает процесс создания тестовой посылки.
     * 
     * Описание механики работы и дополнительные требования см. [здесь](#info/sozdanie_testovyh_posylok).
     * 
     * ### Описание ошибок
     * | http code |   error code       |       error message          |
     * |-----------|--------------------|------------------------------|
     * |    200    | UNKNOWN_PROVIDER   | unknown provider             |
     * |    200    | VALIDATION_ERROR   | invalid request              |
     * |    200    | LIMIT_REACHED      | create parcels limit reached |
     * |    500    | INTERNAL_ERROR     | create parcel error          |
     * 
     * OperationId: CreateSandboxParcelV2.
     * HTTP: POST /delivery-sandbox/v2/createParcel.
     *
     * @param CreateSandboxParcelV2Prompt $prompt DTO запроса.
     *
     * @return CreateParcelV2Response DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function createParcelV2(CreateSandboxParcelV2Prompt $prompt): CreateParcelV2Response
    {
        /** @var CreateParcelV2Response $response */
        $response = $this->request($prompt, CreateParcelV2Response::class);

        return $response;
    }
}
