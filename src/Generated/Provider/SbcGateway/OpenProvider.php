<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider\SbcGateway;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\OpenApiAvailablePrompt;
use Andy87\ClientsAvito\Generated\Prompt\OpenApiMultiConfirmPrompt;
use Andy87\ClientsAvito\Generated\Prompt\OpenApiMultiCreatePrompt;
use Andy87\ClientsAvito\Generated\Prompt\OpenApiStatsPrompt;
use Andy87\ClientsAvito\Generated\Prompt\OpenApiTariffInfoPrompt;
use Andy87\ClientsAvito\Generated\Response\SbcGateway\Open\ApiAvailableResponse;
use Andy87\ClientsAvito\Generated\Response\SbcGateway\Open\ApiMultiConfirmResponse;
use Andy87\ClientsAvito\Generated\Response\SbcGateway\Open\ApiMultiCreateResponse;
use Andy87\ClientsAvito\Generated\Response\SbcGateway\Open\ApiStatsResponse;
use Andy87\ClientsAvito\Generated\Response\SbcGateway\Open\ApiTariffInfoResponse;

/**
 * Группа методов "open" раздела Avito API "Рассылка скидок и спецпредложений в мессенджере (beta-version)".
 */
class OpenProvider extends BaseAvitoProvider
{
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
     * @return ApiAvailableResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function apiAvailable(OpenApiAvailablePrompt $prompt): ApiAvailableResponse
    {
        /** @var ApiAvailableResponse $response */
        $response = $this->request($prompt, ApiAvailableResponse::class);

        return $response;
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
     * @return ApiMultiConfirmResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function apiMultiConfirm(OpenApiMultiConfirmPrompt $prompt): ApiMultiConfirmResponse
    {
        /** @var ApiMultiConfirmResponse $response */
        $response = $this->request($prompt, ApiMultiConfirmResponse::class);

        return $response;
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
     * @return ApiMultiCreateResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function apiMultiCreate(OpenApiMultiCreatePrompt $prompt): ApiMultiCreateResponse
    {
        /** @var ApiMultiCreateResponse $response */
        $response = $this->request($prompt, ApiMultiCreateResponse::class);

        return $response;
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
     * @return ApiStatsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function apiStats(OpenApiStatsPrompt $prompt): ApiStatsResponse
    {
        /** @var ApiStatsResponse $response */
        $response = $this->request($prompt, ApiStatsResponse::class);

        return $response;
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
     * @return ApiTariffInfoResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function apiTariffInfo(OpenApiTariffInfoPrompt $prompt): ApiTariffInfoResponse
    {
        /** @var ApiTariffInfoResponse $response */
        $response = $this->request($prompt, ApiTariffInfoResponse::class);

        return $response;
    }
}
