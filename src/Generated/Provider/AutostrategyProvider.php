<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\CreateAutostrategyCampaignPrompt;
use Andy87\ClientsAvito\Generated\Prompt\EditAutostrategyCampaignPrompt;
use Andy87\ClientsAvito\Generated\Prompt\GetAutostrategyBudgetPrompt;
use Andy87\ClientsAvito\Generated\Prompt\GetAutostrategyCampaignInfoPrompt;
use Andy87\ClientsAvito\Generated\Prompt\GetAutostrategyCampaignsPrompt;
use Andy87\ClientsAvito\Generated\Prompt\GetAutostrategyStatPrompt;
use Andy87\ClientsAvito\Generated\Prompt\StopAutostrategyCampaignPrompt;
use Andy87\ClientsAvito\Generated\Response\CreateAutostrategyCampaignResponse;
use Andy87\ClientsAvito\Generated\Response\EditAutostrategyCampaignResponse;
use Andy87\ClientsAvito\Generated\Response\GetAutostrategyBudgetResponse;
use Andy87\ClientsAvito\Generated\Response\GetAutostrategyCampaignInfoResponse;
use Andy87\ClientsAvito\Generated\Response\GetAutostrategyCampaignsResponse;
use Andy87\ClientsAvito\Generated\Response\GetAutostrategyStatResponse;
use Andy87\ClientsAvito\Generated\Response\StopAutostrategyCampaignResponse;

/**
 * Provider раздела Avito API "Автостратегия".
 * @property-read Autostrategy\AutostrategyProvider $autostrategy
 *
 */
class AutostrategyProvider extends BaseAvitoProvider
{
    protected const OPERATION_GROUPS = [
        'autostrategy' => Autostrategy\AutostrategyProvider::class,
    ];

    /**
     * Создание новой кампании
     * 
     * OperationId: createAutostrategyCampaign.
     * HTTP: POST /autostrategy/v1/campaign/create.
     *
     * @param CreateAutostrategyCampaignPrompt $prompt DTO запроса.
     *
     * @return CreateAutostrategyCampaignResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function createAutostrategyCampaign(CreateAutostrategyCampaignPrompt $prompt): CreateAutostrategyCampaignResponse
    {
        /** @var Autostrategy\AutostrategyProvider $group */
        $group = $this->operationGroup('autostrategy');

        return $group->createCampaign($prompt);
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
     * @return EditAutostrategyCampaignResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function editAutostrategyCampaign(EditAutostrategyCampaignPrompt $prompt): EditAutostrategyCampaignResponse
    {
        /** @var Autostrategy\AutostrategyProvider $group */
        $group = $this->operationGroup('autostrategy');

        return $group->editCampaign($prompt);
    }

    /**
     * Расчет бюджета кампании
     * 
     * OperationId: getAutostrategyBudget.
     * HTTP: POST /autostrategy/v1/budget.
     *
     * @param GetAutostrategyBudgetPrompt $prompt DTO запроса.
     *
     * @return GetAutostrategyBudgetResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getAutostrategyBudget(GetAutostrategyBudgetPrompt $prompt): GetAutostrategyBudgetResponse
    {
        /** @var Autostrategy\AutostrategyProvider $group */
        $group = $this->operationGroup('autostrategy');

        return $group->getBudget($prompt);
    }

    /**
     * Получение полной информации о кампании
     * 
     * OperationId: getAutostrategyCampaignInfo.
     * HTTP: POST /autostrategy/v1/campaign/info.
     *
     * @param GetAutostrategyCampaignInfoPrompt $prompt DTO запроса.
     *
     * @return GetAutostrategyCampaignInfoResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getAutostrategyCampaignInfo(GetAutostrategyCampaignInfoPrompt $prompt): GetAutostrategyCampaignInfoResponse
    {
        /** @var Autostrategy\AutostrategyProvider $group */
        $group = $this->operationGroup('autostrategy');

        return $group->getCampaignInfo($prompt);
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
     * @return GetAutostrategyCampaignsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getAutostrategyCampaigns(GetAutostrategyCampaignsPrompt $prompt): GetAutostrategyCampaignsResponse
    {
        /** @var Autostrategy\AutostrategyProvider $group */
        $group = $this->operationGroup('autostrategy');

        return $group->getCampaigns($prompt);
    }

    /**
     * Получение статистики по кампании
     * 
     * OperationId: getAutostrategyStat.
     * HTTP: POST /autostrategy/v1/stat.
     *
     * @param GetAutostrategyStatPrompt $prompt DTO запроса.
     *
     * @return GetAutostrategyStatResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getAutostrategyStat(GetAutostrategyStatPrompt $prompt): GetAutostrategyStatResponse
    {
        /** @var Autostrategy\AutostrategyProvider $group */
        $group = $this->operationGroup('autostrategy');

        return $group->getStat($prompt);
    }

    /**
     * Остановка кампании
     * 
     * OperationId: stopAutostrategyCampaign.
     * HTTP: POST /autostrategy/v1/campaign/stop.
     *
     * @param StopAutostrategyCampaignPrompt $prompt DTO запроса.
     *
     * @return StopAutostrategyCampaignResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function stopAutostrategyCampaign(StopAutostrategyCampaignPrompt $prompt): StopAutostrategyCampaignResponse
    {
        /** @var Autostrategy\AutostrategyProvider $group */
        $group = $this->operationGroup('autostrategy');

        return $group->stopCampaign($prompt);
    }
}
