<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider\Tariff;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\GetTariffInfoPrompt;
use Andy87\ClientsAvito\Generated\Response\Tariff\Tariff\GetInfoResponse;

/**
 * Группа методов "tariff" раздела Avito API "Тарифы".
 */
class TariffProvider extends BaseAvitoProvider
{
    /**
     * Информация по тарифу
     * 
     * Получение информации по тарифу.
     * 
     * **Внимание:** информация доступна только для тарифов в категории "Транспорт". **Тариф должен быть не "СРА"**
     * 
     * OperationId: getTariffInfo.
     * HTTP: GET /tariff/info/1.
     *
     * @param GetTariffInfoPrompt $prompt DTO запроса.
     *
     * @return GetInfoResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getInfo(GetTariffInfoPrompt $prompt): GetInfoResponse
    {
        /** @var GetInfoResponse $response */
        $response = $this->request($prompt, GetInfoResponse::class);

        return $response;
    }
}
