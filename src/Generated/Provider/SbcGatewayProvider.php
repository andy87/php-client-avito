<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Provider;

use php_client_avito\BaseAvitoProvider;
use php_client_avito\Generated\Prompt\OpenApiAvailablePrompt;
use php_client_avito\Generated\Prompt\OpenApiMultiConfirmPrompt;
use php_client_avito\Generated\Prompt\OpenApiMultiCreatePrompt;
use php_client_avito\Generated\Prompt\OpenApiStatsPrompt;
use php_client_avito\Generated\Prompt\OpenApiTariffInfoPrompt;
use php_client_avito\Generated\Response\OpenApiAvailableResponse;
use php_client_avito\Generated\Response\OpenApiMultiConfirmResponse;
use php_client_avito\Generated\Response\OpenApiMultiCreateResponse;
use php_client_avito\Generated\Response\OpenApiStatsResponse;
use php_client_avito\Generated\Response\OpenApiTariffInfoResponse;

/**
 * Provider раздела Avito API "Рассылка скидок и спецпредложений в мессенджере (beta-version)".
 * @property-read SbcGateway\OpenProvider $open
 *
 */
class SbcGatewayProvider extends BaseAvitoProvider
{
    protected const OPERATION_GROUPS = [
        'open' => SbcGateway\OpenProvider::class,
    ];

    /**
     * Получение информации об объявлениях
     *
     * Позволяет проверить доступность услуги по каждому из переданных объявлений
     *
     * OperationId: openApiAvailable.
     * HTTP: POST /special-offers/v1/available.
     *
     * @param OpenApiAvailablePrompt $prompt DTO запроса.
     *
     * @return OpenApiAvailableResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function openApiAvailable(OpenApiAvailablePrompt $prompt): OpenApiAvailableResponse
    {
        /** @var SbcGateway\OpenProvider $group */
        $group = $this->operationGroup('open');

        return $group->apiAvailable($prompt);
    }

    /**
     * Отправка и оплата рассылки
     *
     * Подтверждение отправки рассылки и ее оплата (из кошелька Авито)
     *
     * OperationId: openApiMultiConfirm.
     * HTTP: POST /special-offers/v1/multiConfirm.
     *
     * @param OpenApiMultiConfirmPrompt $prompt DTO запроса.
     *
     * @return OpenApiMultiConfirmResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function openApiMultiConfirm(OpenApiMultiConfirmPrompt $prompt): OpenApiMultiConfirmResponse
    {
        /** @var SbcGateway\OpenProvider $group */
        $group = $this->operationGroup('open');

        return $group->apiMultiConfirm($prompt);
    }

    /**
     * Создание рассылки
     *
     * Создание рассылки по нескольким объявлениям, c фиксацией аудитории для рассылки
     *
     * OperationId: openApiMultiCreate.
     * HTTP: POST /special-offers/v1/multiCreate.
     *
     * @param OpenApiMultiCreatePrompt $prompt DTO запроса.
     *
     * @return OpenApiMultiCreateResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function openApiMultiCreate(OpenApiMultiCreatePrompt $prompt): OpenApiMultiCreateResponse
    {
        /** @var SbcGateway\OpenProvider $group */
        $group = $this->operationGroup('open');

        return $group->apiMultiCreate($prompt);
    }

    /**
     * Получение статистики
     *
     * Статистика по отправленным рассылкам за период
     *
     * OperationId: openApiStats.
     * HTTP: POST /special-offers/v1/stats.
     *
     * @param OpenApiStatsPrompt $prompt DTO запроса.
     *
     * @return OpenApiStatsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function openApiStats(OpenApiStatsPrompt $prompt): OpenApiStatsResponse
    {
        /** @var SbcGateway\OpenProvider $group */
        $group = $this->operationGroup('open');

        return $group->apiStats($prompt);
    }

    /**
     * Получение информации о тарифе
     *
     * Узнать сколько осталось рассылок в тарифе (если активного тарифа нет, придет пустой ответ)
     *
     * OperationId: openApiTariffInfo.
     * HTTP: POST /special-offers/v1/tariffInfo.
     *
     * @param OpenApiTariffInfoPrompt $prompt DTO запроса.
     *
     * @return OpenApiTariffInfoResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function openApiTariffInfo(OpenApiTariffInfoPrompt $prompt): OpenApiTariffInfoResponse
    {
        /** @var SbcGateway\OpenProvider $group */
        $group = $this->operationGroup('open');

        return $group->apiTariffInfo($prompt);
    }
}
