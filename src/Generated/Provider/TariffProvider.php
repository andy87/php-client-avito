<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\GetTariffInfoPrompt;
use Andy87\ClientsAvito\Generated\Response\GetTariffInfoResponse;

/**
 * Provider раздела Avito API "Тарифы".
 * @property-read Tariff\TariffProvider $tariff
 *
 */
class TariffProvider extends BaseAvitoProvider
{
    protected const OPERATION_GROUPS = [
        'tariff' => Tariff\TariffProvider::class,
    ];

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
     * @return GetTariffInfoResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getTariffInfo(GetTariffInfoPrompt $prompt): GetTariffInfoResponse
    {
        /** @var Tariff\TariffProvider $group */
        $group = $this->operationGroup('tariff');

        return $group->getInfo($prompt);
    }
}
