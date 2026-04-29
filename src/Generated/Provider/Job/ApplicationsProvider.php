<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider\Job;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\ApplicationsApplyActionsPrompt;
use Andy87\ClientsAvito\Generated\Prompt\ApplicationsGetByIdsPrompt;
use Andy87\ClientsAvito\Generated\Prompt\ApplicationsGetIdsPrompt;
use Andy87\ClientsAvito\Generated\Prompt\ApplicationsGetStatesPrompt;
use Andy87\ClientsAvito\Generated\Prompt\ApplicationsSetIsViewedPrompt;
use Andy87\ClientsAvito\Generated\Prompt\ApplicationsWebhookDeletePrompt;
use Andy87\ClientsAvito\Generated\Prompt\ApplicationsWebhookGetPrompt;
use Andy87\ClientsAvito\Generated\Prompt\ApplicationsWebhookPutPrompt;
use Andy87\ClientsAvito\Generated\Prompt\ApplicationsWebhooksGetPrompt;
use Andy87\ClientsAvito\Generated\Response\Job\Applications\ApplyActionsResponse;
use Andy87\ClientsAvito\Generated\Response\Job\Applications\GetByIdsResponse;
use Andy87\ClientsAvito\Generated\Response\Job\Applications\GetIdsResponse;
use Andy87\ClientsAvito\Generated\Response\Job\Applications\GetStatesResponse;
use Andy87\ClientsAvito\Generated\Response\Job\Applications\SetIsViewedResponse;
use Andy87\ClientsAvito\Generated\Response\Job\Applications\WebhookDeleteResponse;
use Andy87\ClientsAvito\Generated\Response\Job\Applications\WebhookGetResponse;
use Andy87\ClientsAvito\Generated\Response\Job\Applications\WebhookPutResponse;
use Andy87\ClientsAvito\Generated\Response\Job\Applications\WebhooksGetResponse;

/**
 * Группа методов "applications" раздела Avito API "Авито.Работа".
 */
class ApplicationsProvider extends BaseAvitoProvider
{
    /**
     * Батчевая смена статуса откликов
     * 
     * Переводит сразу несколько откликов в новый статус одним запросом. В запросе нужно передать целевой статус, а также список идентификаторов откликов, к которым он должен быть применён
     * Максимальный размер батча — не более 100 идентификаторов откликов в одном запросе
     * 
     * OperationId: applicationsApplyActions.
     * HTTP: POST /job/v1/applications/apply_actions.
     *
     * @param ApplicationsApplyActionsPrompt $prompt DTO запроса.
     *
     * @return ApplyActionsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function applyActions(ApplicationsApplyActionsPrompt $prompt): ApplyActionsResponse
    {
        /** @var ApplyActionsResponse $response */
        $response = $this->request($prompt, ApplyActionsResponse::class);

        return $response;
    }

    /**
     * Получение списка откликов
     * 
     * Получение списка откликов по uuid, полученным по  [подписке на уведомления](https://developers.avito.ru/api-catalog/job/documentation#operation/applicationsWebhookPut) (webhook) и через метод  [получение идентификаторов откликов](https://developers.avito.ru/api-catalog/job/documentation#operation/applicationsGetIds) Максимальный лимит = 100
     * 
     * OperationId: applicationsGetByIds.
     * HTTP: POST /job/v1/applications/get_by_ids.
     *
     * @param ApplicationsGetByIdsPrompt $prompt DTO запроса.
     *
     * @return GetByIdsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getByIds(ApplicationsGetByIdsPrompt $prompt): GetByIdsResponse
    {
        /** @var GetByIdsResponse $response */
        $response = $this->request($prompt, GetByIdsResponse::class);

        return $response;
    }

    /**
     * Получение идентификаторов откликов
     * 
     * Возвращает лимитированное количество идентификаторов откликов отсортированных по дате создания  начиная с самых свежих, для последующего получения по ним расширенной информации через метод [получение списка откликов](https://developers.avito.ru/api-catalog/job/documentation#operation/applicationsGetByIds).
     * Максимальный лимит = 100
     * 
     * OperationId: applicationsGetIds.
     * HTTP: GET /job/v1/applications/get_ids.
     *
     * @param ApplicationsGetIdsPrompt $prompt DTO запроса.
     *
     * @return GetIdsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getIds(ApplicationsGetIdsPrompt $prompt): GetIdsResponse
    {
        /** @var GetIdsResponse $response */
        $response = $this->request($prompt, GetIdsResponse::class);

        return $response;
    }

    /**
     * Получение списка возможных статусов откликов
     * 
     * Возвращает список доступных статусов откликов и их описания
     * 
     * OperationId: applicationsGetStates.
     * HTTP: GET /job/v1/applications/get_states.
     *
     * @param ApplicationsGetStatesPrompt $prompt DTO запроса.
     *
     * @return GetStatesResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getStates(ApplicationsGetStatesPrompt $prompt): GetStatesResponse
    {
        /** @var GetStatesResponse $response */
        $response = $this->request($prompt, GetStatesResponse::class);

        return $response;
    }

    /**
     * Изменение статуса отклика
     * 
     * Возвращает информацию по откликам и статусу просмотренности отклика, при изменении статуса также статус изменится в Авито Pro.  Максимальный лимит = 100
     * 
     * OperationId: applicationsSetIsViewed.
     * HTTP: POST /job/v1/applications/set_is_viewed.
     *
     * @param ApplicationsSetIsViewedPrompt $prompt DTO запроса.
     *
     * @return SetIsViewedResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function setIsViewed(ApplicationsSetIsViewedPrompt $prompt): SetIsViewedResponse
    {
        /** @var SetIsViewedResponse $response */
        $response = $this->request($prompt, SetIsViewedResponse::class);

        return $response;
    }

    /**
     * Отключение уведомлений по откликам (webhook)
     * 
     * Отписка от уведомлений о создании и обновлении откликов на вакансии. Если авторизация происходит от имени приложения, отписка от вебхука будет для приложения
     * 
     * OperationId: applicationsWebhookDelete.
     * HTTP: DELETE /job/v1/applications/webhook.
     *
     * @param ApplicationsWebhookDeletePrompt $prompt DTO запроса.
     *
     * @return WebhookDeleteResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function webhookDelete(ApplicationsWebhookDeletePrompt $prompt): WebhookDeleteResponse
    {
        /** @var WebhookDeleteResponse $response */
        $response = $this->request($prompt, WebhookDeleteResponse::class);

        return $response;
    }

    /**
     * Получение информации о подписках (webhook)
     * 
     * Получение информации по существующим подпискам на создание и обновление откликов. Будет возвращен самый старый активный вебхук. Если авторизация происходит от имени приложения, будет возвращен вебхук приложения
     * 
     * OperationId: applicationsWebhookGet.
     * HTTP: GET /job/v1/applications/webhook.
     *
     * @param ApplicationsWebhookGetPrompt $prompt DTO запроса.
     *
     * @return WebhookGetResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function webhookGet(ApplicationsWebhookGetPrompt $prompt): WebhookGetResponse
    {
        /** @var WebhookGetResponse $response */
        $response = $this->request($prompt, WebhookGetResponse::class);

        return $response;
    }

    /**
     * Включение уведомлений по откликам (webhook)
     * 
     * Подписка на уведомления о создании и обновлении откликов на вакансии. Если авторизация происходит от имени приложения, вебхук будет привязан к приложению. Исключение:
     *   - изменение сотрудника относящегося к объявлению (employee_id)
     * 
     * Важно: 
     *   Проверьте доступность url, при его недоступности из контура Авито webhook не будет создан/перезаписан.
     *   Если url недоступен больше месяца, то он удаляется и на него не придут новые уведомления.
     *   Список адресов с которых идут запросы по url IP 185.89.12.0/22, 146.158.48.0/21, 185.79.237.224/28 и 87.245.204.32/28.
     * 
     * OperationId: applicationsWebhookPut.
     * HTTP: PUT /job/v1/applications/webhook.
     *
     * @param ApplicationsWebhookPutPrompt $prompt DTO запроса.
     *
     * @return WebhookPutResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function webhookPut(ApplicationsWebhookPutPrompt $prompt): WebhookPutResponse
    {
        /** @var WebhookPutResponse $response */
        $response = $this->request($prompt, WebhookPutResponse::class);

        return $response;
    }

    /**
     * Получение списка подписок (webhook)
     * 
     * Получение списка активных подписок на создание и обновление откликов в хронологическом порядке от самого старого к самому новому. Если авторизация происходит от имени приложения, будут возвращены вебхуки приложения
     * 
     * OperationId: applicationsWebhooksGet.
     * HTTP: GET /job/v1/applications/webhooks.
     *
     * @param ApplicationsWebhooksGetPrompt $prompt DTO запроса.
     *
     * @return WebhooksGetResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function webhooksGet(ApplicationsWebhooksGetPrompt $prompt): WebhooksGetResponse
    {
        /** @var WebhooksGetResponse $response */
        $response = $this->request($prompt, WebhooksGetResponse::class);

        return $response;
    }
}
