<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider;

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
use Andy87\ClientsAvito\Generated\Prompt\GetDictByIDPrompt;
use Andy87\ClientsAvito\Generated\Prompt\GetDictsPrompt;
use Andy87\ClientsAvito\Generated\Prompt\ResumeGetContactsPrompt;
use Andy87\ClientsAvito\Generated\Prompt\ResumeGetItemPrompt;
use Andy87\ClientsAvito\Generated\Prompt\ResumesGetPrompt;
use Andy87\ClientsAvito\Generated\Prompt\SearchVacancyPrompt;
use Andy87\ClientsAvito\Generated\Prompt\VacanciesGetByIdsPrompt;
use Andy87\ClientsAvito\Generated\Prompt\VacancyArchivePrompt;
use Andy87\ClientsAvito\Generated\Prompt\VacancyAutoRenewalPrompt;
use Andy87\ClientsAvito\Generated\Prompt\VacancyCreatePrompt;
use Andy87\ClientsAvito\Generated\Prompt\VacancyCreateV2Prompt;
use Andy87\ClientsAvito\Generated\Prompt\VacancyGetItemPrompt;
use Andy87\ClientsAvito\Generated\Prompt\VacancyGetStatusesPrompt;
use Andy87\ClientsAvito\Generated\Prompt\VacancyProlongatePrompt;
use Andy87\ClientsAvito\Generated\Prompt\VacancyUpdatePrompt;
use Andy87\ClientsAvito\Generated\Prompt\VacancyUpdateV2Prompt;
use Andy87\ClientsAvito\Generated\Response\ApplicationsApplyActionsResponse;
use Andy87\ClientsAvito\Generated\Response\ApplicationsGetByIdsResponse;
use Andy87\ClientsAvito\Generated\Response\ApplicationsGetIdsResponse;
use Andy87\ClientsAvito\Generated\Response\ApplicationsGetStatesResponse;
use Andy87\ClientsAvito\Generated\Response\ApplicationsSetIsViewedResponse;
use Andy87\ClientsAvito\Generated\Response\ApplicationsWebhookDeleteResponse;
use Andy87\ClientsAvito\Generated\Response\ApplicationsWebhookGetResponse;
use Andy87\ClientsAvito\Generated\Response\ApplicationsWebhookPutResponse;
use Andy87\ClientsAvito\Generated\Response\ApplicationsWebhooksGetResponse;
use Andy87\ClientsAvito\Generated\Response\GetDictByIDResponse;
use Andy87\ClientsAvito\Generated\Response\GetDictsResponse;
use Andy87\ClientsAvito\Generated\Response\ResumeGetContactsResponse;
use Andy87\ClientsAvito\Generated\Response\ResumeGetItemResponse;
use Andy87\ClientsAvito\Generated\Response\ResumesGetResponse;
use Andy87\ClientsAvito\Generated\Response\SearchVacancyResponse;
use Andy87\ClientsAvito\Generated\Response\VacanciesGetByIdsResponse;
use Andy87\ClientsAvito\Generated\Response\VacancyArchiveResponse;
use Andy87\ClientsAvito\Generated\Response\VacancyAutoRenewalResponse;
use Andy87\ClientsAvito\Generated\Response\VacancyCreateResponse;
use Andy87\ClientsAvito\Generated\Response\VacancyCreateV2Response;
use Andy87\ClientsAvito\Generated\Response\VacancyGetItemResponse;
use Andy87\ClientsAvito\Generated\Response\VacancyGetStatusesResponse;
use Andy87\ClientsAvito\Generated\Response\VacancyProlongateResponse;
use Andy87\ClientsAvito\Generated\Response\VacancyUpdateResponse;
use Andy87\ClientsAvito\Generated\Response\VacancyUpdateV2Response;

/**
 * Provider раздела Avito API "Авито.Работа".
 * @property-read Job\ApplicationsProvider $applications
 * @property-read Job\DictProvider $dict
 * @property-read Job\DictsProvider $dicts
 * @property-read Job\ResumeProvider $resume
 * @property-read Job\ResumesProvider $resumes
 * @property-read Job\VacanciesProvider $vacancies
 * @property-read Job\VacancyProvider $vacancy
 *
 */
class JobProvider extends BaseAvitoProvider
{
    protected const OPERATION_GROUPS = [
        'applications' => Job\ApplicationsProvider::class,
        'dict' => Job\DictProvider::class,
        'dicts' => Job\DictsProvider::class,
        'resume' => Job\ResumeProvider::class,
        'resumes' => Job\ResumesProvider::class,
        'vacancies' => Job\VacanciesProvider::class,
        'vacancy' => Job\VacancyProvider::class,
    ];

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
     * @return ApplicationsApplyActionsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function applicationsApplyActions(ApplicationsApplyActionsPrompt $prompt): ApplicationsApplyActionsResponse
    {
        /** @var Job\ApplicationsProvider $group */
        $group = $this->operationGroup('applications');

        return $group->applyActions($prompt);
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
     * @return ApplicationsGetByIdsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function applicationsGetByIds(ApplicationsGetByIdsPrompt $prompt): ApplicationsGetByIdsResponse
    {
        /** @var Job\ApplicationsProvider $group */
        $group = $this->operationGroup('applications');

        return $group->getByIds($prompt);
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
     * @return ApplicationsGetIdsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function applicationsGetIds(ApplicationsGetIdsPrompt $prompt): ApplicationsGetIdsResponse
    {
        /** @var Job\ApplicationsProvider $group */
        $group = $this->operationGroup('applications');

        return $group->getIds($prompt);
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
     * @return ApplicationsGetStatesResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function applicationsGetStates(ApplicationsGetStatesPrompt $prompt): ApplicationsGetStatesResponse
    {
        /** @var Job\ApplicationsProvider $group */
        $group = $this->operationGroup('applications');

        return $group->getStates($prompt);
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
     * @return ApplicationsSetIsViewedResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function applicationsSetIsViewed(ApplicationsSetIsViewedPrompt $prompt): ApplicationsSetIsViewedResponse
    {
        /** @var Job\ApplicationsProvider $group */
        $group = $this->operationGroup('applications');

        return $group->setIsViewed($prompt);
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
     * @return ApplicationsWebhookDeleteResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function applicationsWebhookDelete(ApplicationsWebhookDeletePrompt $prompt): ApplicationsWebhookDeleteResponse
    {
        /** @var Job\ApplicationsProvider $group */
        $group = $this->operationGroup('applications');

        return $group->webhookDelete($prompt);
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
     * @return ApplicationsWebhookGetResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function applicationsWebhookGet(ApplicationsWebhookGetPrompt $prompt): ApplicationsWebhookGetResponse
    {
        /** @var Job\ApplicationsProvider $group */
        $group = $this->operationGroup('applications');

        return $group->webhookGet($prompt);
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
     * @return ApplicationsWebhookPutResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function applicationsWebhookPut(ApplicationsWebhookPutPrompt $prompt): ApplicationsWebhookPutResponse
    {
        /** @var Job\ApplicationsProvider $group */
        $group = $this->operationGroup('applications');

        return $group->webhookPut($prompt);
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
     * @return ApplicationsWebhooksGetResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function applicationsWebhooksGet(ApplicationsWebhooksGetPrompt $prompt): ApplicationsWebhooksGetResponse
    {
        /** @var Job\ApplicationsProvider $group */
        $group = $this->operationGroup('applications');

        return $group->webhooksGet($prompt);
    }

    /**
     * Получение доступных значений списка по ID словаря
     * 
     * Возвращает доступные значения по имени справочника. Значения с признаком deprecated не могут использоваться при создании и обновлении вакансий.
     * 
     * OperationId: getDictByID.
     * HTTP: GET /job/v2/vacancy/dict/{dictionary_id}.
     *
     * @param GetDictByIDPrompt $prompt DTO запроса.
     *
     * @return GetDictByIDResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getDictByID(GetDictByIDPrompt $prompt): GetDictByIDResponse
    {
        /** @var Job\DictProvider $group */
        $group = $this->operationGroup('dict');

        return $group->getByID($prompt);
    }

    /**
     * Получение списка доступных словарей
     * 
     * Возвращает все доступные словари (Заменяет существующие списки)
     * 
     * OperationId: getDicts.
     * HTTP: GET /job/v2/vacancy/dict.
     *
     * @param GetDictsPrompt $prompt DTO запроса.
     *
     * @return GetDictsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getDicts(GetDictsPrompt $prompt): GetDictsResponse
    {
        /** @var Job\DictsProvider $group */
        $group = $this->operationGroup('dicts');

        return $group->get($prompt);
    }

    /**
     * Доступ к контактным данным соискателя
     * 
     * Для получения контактов пользователя необходимо приобрести пакет просмотров в [личном кабинете](https://www.avito.ru/paid-services/contact-packages/cvs). Если резюме было получено из отклика, контакты предоставляются без списания из пакета просмотров.
     * 
     * OperationId: resumeGetContacts.
     * HTTP: GET /job/v1/resumes/{resume_id}/contacts/.
     *
     * @param ResumeGetContactsPrompt $prompt DTO запроса.
     *
     * @return ResumeGetContactsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function resumeGetContacts(ResumeGetContactsPrompt $prompt): ResumeGetContactsResponse
    {
        /** @var Job\ResumeProvider $group */
        $group = $this->operationGroup('resume');

        return $group->getContacts($prompt);
    }

    /**
     * Просмотр данных резюме
     * 
     * По умолчанию fields и params выводятся все. Если указана только часть полей - остальные поля будут отсутствовать в ответе.
     * 
     * OperationId: resumeGetItem.
     * HTTP: GET /job/v2/resumes/{resume_id}.
     *
     * @param ResumeGetItemPrompt $prompt DTO запроса.
     *
     * @return ResumeGetItemResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function resumeGetItem(ResumeGetItemPrompt $prompt): ResumeGetItemResponse
    {
        /** @var Job\ResumeProvider $group */
        $group = $this->operationGroup('resume');

        return $group->getItem($prompt);
    }

    /**
     * Поиск резюме
     * 
     * OperationId: resumesGet.
     * HTTP: GET /job/v1/resumes/.
     *
     * @param ResumesGetPrompt $prompt DTO запроса.
     *
     * @return ResumesGetResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function resumesGet(ResumesGetPrompt $prompt): ResumesGetResponse
    {
        /** @var Job\ResumesProvider $group */
        $group = $this->operationGroup('resumes');

        return $group->get($prompt);
    }

    /**
     * Поиск вакансий
     * 
     * OperationId: searchVacancy.
     * HTTP: GET /job/v2/vacancies.
     *
     * @param SearchVacancyPrompt $prompt DTO запроса.
     *
     * @return SearchVacancyResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function searchVacancy(SearchVacancyPrompt $prompt): SearchVacancyResponse
    {
        /** @var Job\VacancyProvider $group */
        $group = $this->operationGroup('vacancy');

        return $group->search($prompt);
    }

    /**
     * Просмотр данных вакансий
     * 
     * По умолчанию fields и params выводятся все. Если указана только часть полей - остальные поля будут отсутствовать в ответе.
     * Для просмотра данных необходимо быть владельцем вакансии.
     * 
     * OperationId: vacanciesGetByIds.
     * HTTP: POST /job/v2/vacancies/batch.
     *
     * @param VacanciesGetByIdsPrompt $prompt DTO запроса.
     *
     * @return VacanciesGetByIdsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function vacanciesGetByIds(VacanciesGetByIdsPrompt $prompt): VacanciesGetByIdsResponse
    {
        /** @var Job\VacanciesProvider $group */
        $group = $this->operationGroup('vacancies');

        return $group->getByIds($prompt);
    }

    /**
     * Остановка публикации вакансии
     * 
     * Снимает с публикации объявление в категории Вакансии.
     * 
     * OperationId: vacancyArchive.
     * HTTP: PUT /job/v1/vacancies/archived/{vacancy_id}.
     *
     * @param VacancyArchivePrompt $prompt DTO запроса.
     *
     * @return VacancyArchiveResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function vacancyArchive(VacancyArchivePrompt $prompt): VacancyArchiveResponse
    {
        /** @var Job\VacancyProvider $group */
        $group = $this->operationGroup('vacancy');

        return $group->archive($prompt);
    }

    /**
     * Автопродление вакансии v2
     * 
     * Включает или выключает автопродление вакансии. Если вакансия в архиве, то при включении автопродления вакансия будет автоматически поднята из архива.
     * 
     * OperationId: vacancyAutoRenewal.
     * HTTP: PUT /job/v2/vacancies/{vacancy_uuid}/auto_renewal.
     *
     * @param VacancyAutoRenewalPrompt $prompt DTO запроса.
     *
     * @return VacancyAutoRenewalResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function vacancyAutoRenewal(VacancyAutoRenewalPrompt $prompt): VacancyAutoRenewalResponse
    {
        /** @var Job\VacancyProvider $group */
        $group = $this->operationGroup('vacancy');

        return $group->autoRenewal($prompt);
    }

    /**
     * Публикация вакансии
     * 
     * Для публикации вакансии необходимо приобрести тариф в [личном кабинете](https://www.avito.ru/paid-services/listing-fees).
     * 
     * OperationId: vacancyCreate.
     * HTTP: POST /job/v1/vacancies.
     *
     * @param VacancyCreatePrompt $prompt DTO запроса.
     *
     * @return VacancyCreateResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function vacancyCreate(VacancyCreatePrompt $prompt): VacancyCreateResponse
    {
        /** @var Job\VacancyProvider $group */
        $group = $this->operationGroup('vacancy');

        return $group->create($prompt);
    }

    /**
     * Публикация вакансии v2
     * 
     * Для публикации вакансии необходимо приобрести тариф в [личном кабинете](https://www.avito.ru/paid-services/listing-fees).
     * Для проверки статуса публикации используйте полученный идентификатор в [методе получения статуса](https://developers.avito.ru/api-catalog/job/documentation#operation/vacancyGetStatuses).
     * 
     * OperationId: vacancyCreateV2.
     * HTTP: POST /job/v2/vacancies.
     *
     * @param VacancyCreateV2Prompt $prompt DTO запроса.
     *
     * @return VacancyCreateV2Response DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function vacancyCreateV2(VacancyCreateV2Prompt $prompt): VacancyCreateV2Response
    {
        /** @var Job\VacancyProvider $group */
        $group = $this->operationGroup('vacancy');

        return $group->createV2($prompt);
    }

    /**
     * Просмотр данных вакансии
     * 
     * По умолчанию fields и params выводятся все. Если указана только часть полей - остальные поля будут отсутствовать в ответе.
     * Для просмотра данных необходимо быть владельцем вакансии.
     * 
     * OperationId: vacancyGetItem.
     * HTTP: GET /job/v2/vacancies/{vacancy_id}.
     *
     * @param VacancyGetItemPrompt $prompt DTO запроса.
     *
     * @return VacancyGetItemResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function vacancyGetItem(VacancyGetItemPrompt $prompt): VacancyGetItemResponse
    {
        /** @var Job\VacancyProvider $group */
        $group = $this->operationGroup('vacancy');

        return $group->getItem($prompt);
    }

    /**
     * Получение статуса публикации вакансий V2
     * 
     * Получение списка статусов процесса публикации и модерации вакансий.
     * В запросе используйте идентификатор, полученный [методе
     * публикации вакансии v2](https://developers.avito.ru/api-catalog/job/documentation#operation/vacancyCreateV2)
     * 
     * OperationId: vacancyGetStatuses.
     * HTTP: POST /job/v2/vacancies/statuses.
     *
     * @param VacancyGetStatusesPrompt $prompt DTO запроса.
     *
     * @return VacancyGetStatusesResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function vacancyGetStatuses(VacancyGetStatusesPrompt $prompt): VacancyGetStatusesResponse
    {
        /** @var Job\VacancyProvider $group */
        $group = $this->operationGroup('vacancy');

        return $group->getStatuses($prompt);
    }

    /**
     * Реактивация вакансии
     * 
     * Реактивирует объявление в категории Вакансии. Необходимо приобрести тариф в [личном кабинете](https://www.avito.ru/paid-services/listing-fees).
     * 
     * OperationId: vacancyProlongate.
     * HTTP: POST /job/v1/vacancies/{vacancy_id}/prolongate.
     *
     * @param VacancyProlongatePrompt $prompt DTO запроса.
     *
     * @return VacancyProlongateResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function vacancyProlongate(VacancyProlongatePrompt $prompt): VacancyProlongateResponse
    {
        /** @var Job\VacancyProvider $group */
        $group = $this->operationGroup('vacancy');

        return $group->prolongate($prompt);
    }

    /**
     * Редактирование вакансии
     * 
     * Редактирует объявление в категории Вакансии. Необходимо приобрести тариф в [личном кабинете](https://www.avito.ru/paid-services/listing-fees).
     * 
     * OperationId: vacancyUpdate.
     * HTTP: PUT /job/v1/vacancies/{vacancy_id}.
     *
     * @param VacancyUpdatePrompt $prompt DTO запроса.
     *
     * @return VacancyUpdateResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function vacancyUpdate(VacancyUpdatePrompt $prompt): VacancyUpdateResponse
    {
        /** @var Job\VacancyProvider $group */
        $group = $this->operationGroup('vacancy');

        return $group->update($prompt);
    }

    /**
     * Редактирование вакансии v2
     * 
     * Редактирует объявление в категории Вакансии. Необходимо приобрести тариф в [личном кабинете](https://www.avito.ru/paid-services/listing-fees).
     * 
     * OperationId: vacancyUpdateV2.
     * HTTP: POST /job/v2/vacancies/update/{vacancy_uuid}.
     *
     * @param VacancyUpdateV2Prompt $prompt DTO запроса.
     *
     * @return VacancyUpdateV2Response DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function vacancyUpdateV2(VacancyUpdateV2Prompt $prompt): VacancyUpdateV2Response
    {
        /** @var Job\VacancyProvider $group */
        $group = $this->operationGroup('vacancy');

        return $group->updateV2($prompt);
    }
}
