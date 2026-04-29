<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider\Autostrategy;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\CreateAutostrategyCampaignPrompt;
use Andy87\ClientsAvito\Generated\Prompt\EditAutostrategyCampaignPrompt;
use Andy87\ClientsAvito\Generated\Prompt\GetAutostrategyBudgetPrompt;
use Andy87\ClientsAvito\Generated\Prompt\GetAutostrategyCampaignInfoPrompt;
use Andy87\ClientsAvito\Generated\Prompt\GetAutostrategyCampaignsPrompt;
use Andy87\ClientsAvito\Generated\Prompt\GetAutostrategyStatPrompt;
use Andy87\ClientsAvito\Generated\Prompt\StopAutostrategyCampaignPrompt;
use Andy87\ClientsAvito\Generated\Response\Autostrategy\Autostrategy\CreateCampaignResponse;
use Andy87\ClientsAvito\Generated\Response\Autostrategy\Autostrategy\EditCampaignResponse;
use Andy87\ClientsAvito\Generated\Response\Autostrategy\Autostrategy\GetBudgetResponse;
use Andy87\ClientsAvito\Generated\Response\Autostrategy\Autostrategy\GetCampaignInfoResponse;
use Andy87\ClientsAvito\Generated\Response\Autostrategy\Autostrategy\GetCampaignsResponse;
use Andy87\ClientsAvito\Generated\Response\Autostrategy\Autostrategy\GetStatResponse;
use Andy87\ClientsAvito\Generated\Response\Autostrategy\Autostrategy\StopCampaignResponse;

/**
 * Группа методов "autostrategy" раздела Avito API "Автостратегия".
 */
class AutostrategyProvider extends BaseAvitoProvider
{
    /**
     * Создание новой кампании
     * 
     * OperationId: createAutostrategyCampaign.
     * HTTP: POST /autostrategy/v1/campaign/create.
     *
     * @param CreateAutostrategyCampaignPrompt $prompt DTO запроса.
     *
     * @return CreateCampaignResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function createCampaign(CreateAutostrategyCampaignPrompt $prompt): CreateCampaignResponse
    {
        /** @var CreateCampaignResponse $response */
        $response = $this->request($prompt, CreateCampaignResponse::class);

        return $response;
    }

    /**
     * Редактирование кампании
     * 
     * **Возможно редактирование лишь только кампаний, имеющих тип `AS`**
     * 
     * OperationId: editAutostrategyCampaign.
     * HTTP: POST /autostrategy/v1/campaign/edit.
     *
     * @param EditAutostrategyCampaignPrompt $prompt DTO запроса.
     *
     * @return EditCampaignResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function editCampaign(EditAutostrategyCampaignPrompt $prompt): EditCampaignResponse
    {
        /** @var EditCampaignResponse $response */
        $response = $this->request($prompt, EditCampaignResponse::class);

        return $response;
    }

    /**
     * Расчет бюджета кампании
     * 
     * OperationId: getAutostrategyBudget.
     * HTTP: POST /autostrategy/v1/budget.
     *
     * @param GetAutostrategyBudgetPrompt $prompt DTO запроса.
     *
     * @return GetBudgetResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getBudget(GetAutostrategyBudgetPrompt $prompt): GetBudgetResponse
    {
        /** @var GetBudgetResponse $response */
        $response = $this->request($prompt, GetBudgetResponse::class);

        return $response;
    }

    /**
     * Получение полной информации о кампании
     * 
     * OperationId: getAutostrategyCampaignInfo.
     * HTTP: POST /autostrategy/v1/campaign/info.
     *
     * @param GetAutostrategyCampaignInfoPrompt $prompt DTO запроса.
     *
     * @return GetCampaignInfoResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getCampaignInfo(GetAutostrategyCampaignInfoPrompt $prompt): GetCampaignInfoResponse
    {
        /** @var GetCampaignInfoResponse $response */
        $response = $this->request($prompt, GetCampaignInfoResponse::class);

        return $response;
    }

    /**
     * Получение списка кампаний
     * 
     * **Получение кампаний текущего пользователя с учетом фильтров**
     * 
     * OperationId: getAutostrategyCampaigns.
     * HTTP: POST /autostrategy/v1/campaigns.
     *
     * @param GetAutostrategyCampaignsPrompt $prompt DTO запроса.
     *
     * @return GetCampaignsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getCampaigns(GetAutostrategyCampaignsPrompt $prompt): GetCampaignsResponse
    {
        /** @var GetCampaignsResponse $response */
        $response = $this->request($prompt, GetCampaignsResponse::class);

        return $response;
    }

    /**
     * Получение статистики по кампании
     * 
     * OperationId: getAutostrategyStat.
     * HTTP: POST /autostrategy/v1/stat.
     *
     * @param GetAutostrategyStatPrompt $prompt DTO запроса.
     *
     * @return GetStatResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getStat(GetAutostrategyStatPrompt $prompt): GetStatResponse
    {
        /** @var GetStatResponse $response */
        $response = $this->request($prompt, GetStatResponse::class);

        return $response;
    }

    /**
     * Остановка кампании
     * 
     * OperationId: stopAutostrategyCampaign.
     * HTTP: POST /autostrategy/v1/campaign/stop.
     *
     * @param StopAutostrategyCampaignPrompt $prompt DTO запроса.
     *
     * @return StopCampaignResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function stopCampaign(StopAutostrategyCampaignPrompt $prompt): StopCampaignResponse
    {
        /** @var StopCampaignResponse $response */
        $response = $this->request($prompt, StopCampaignResponse::class);

        return $response;
    }
}
