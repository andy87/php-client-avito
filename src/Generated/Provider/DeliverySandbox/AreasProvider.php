<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider\DeliverySandbox;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\AddAreasSandboxPrompt;
use Andy87\ClientsAvito\Generated\Response\DeliverySandbox\Areas\AddSandboxResponse;

/**
 * Группа методов "areas" раздела Avito API "Доставка".
 */
class AreasProvider extends BaseAvitoProvider
{
    /**
     * Загрузить области доставки
     * 
     * Метод позволяет загрузить области, в которых возможна услуга курьерской доставки/забора
     * В качестве классификатора адресов используются индесы Почты России, то есть в 1 индекс включаются все адреса,
     * которые к нему относятся.
     * 
     * ### Описание ошибок
     * | http code |   error code      |       error message                                       |
     * |-----------|-------------------|-----------------------------------------------------------|
     * |    200    | URL_PATH_INVALID  | Tariff id must be int url path                            |
     * |    200    | TERMINALS_INVALID | Failed to convert areas: {error description}          |
     * |    200    | TERMINALS_INVALID | Failed to get terminals from request: {error description} |
     * 
     * OperationId: AddAreasSandbox.
     * HTTP: POST /delivery-sandbox/tariffs/{tariff_id}/areas.
     *
     * @param AddAreasSandboxPrompt $prompt DTO запроса.
     *
     * @return AddSandboxResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function addSandbox(AddAreasSandboxPrompt $prompt): AddSandboxResponse
    {
        /** @var AddSandboxResponse $response */
        $response = $this->request($prompt, AddSandboxResponse::class);

        return $response;
    }
}
