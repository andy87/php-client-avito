<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider\Job;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\SearchVacancyPrompt;
use Andy87\ClientsAvito\Generated\Prompt\VacancyArchivePrompt;
use Andy87\ClientsAvito\Generated\Prompt\VacancyAutoRenewalPrompt;
use Andy87\ClientsAvito\Generated\Prompt\VacancyCreatePrompt;
use Andy87\ClientsAvito\Generated\Prompt\VacancyCreateV2Prompt;
use Andy87\ClientsAvito\Generated\Prompt\VacancyGetItemPrompt;
use Andy87\ClientsAvito\Generated\Prompt\VacancyGetStatusesPrompt;
use Andy87\ClientsAvito\Generated\Prompt\VacancyProlongatePrompt;
use Andy87\ClientsAvito\Generated\Prompt\VacancyUpdatePrompt;
use Andy87\ClientsAvito\Generated\Prompt\VacancyUpdateV2Prompt;
use Andy87\ClientsAvito\Generated\Response\Job\Vacancy\ArchiveResponse;
use Andy87\ClientsAvito\Generated\Response\Job\Vacancy\AutoRenewalResponse;
use Andy87\ClientsAvito\Generated\Response\Job\Vacancy\CreateResponse;
use Andy87\ClientsAvito\Generated\Response\Job\Vacancy\CreateV2Response;
use Andy87\ClientsAvito\Generated\Response\Job\Vacancy\GetItemResponse;
use Andy87\ClientsAvito\Generated\Response\Job\Vacancy\GetStatusesResponse;
use Andy87\ClientsAvito\Generated\Response\Job\Vacancy\ProlongateResponse;
use Andy87\ClientsAvito\Generated\Response\Job\Vacancy\SearchResponse;
use Andy87\ClientsAvito\Generated\Response\Job\Vacancy\UpdateResponse;
use Andy87\ClientsAvito\Generated\Response\Job\Vacancy\UpdateV2Response;

/**
 * Группа методов "vacancy" раздела Avito API "Авито.Работа".
 */
class VacancyProvider extends BaseAvitoProvider
{
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
     * @return ArchiveResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function archive(VacancyArchivePrompt $prompt): ArchiveResponse
    {
        /** @var ArchiveResponse $response */
        $response = $this->request($prompt, ArchiveResponse::class);

        return $response;
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
     * @return AutoRenewalResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function autoRenewal(VacancyAutoRenewalPrompt $prompt): AutoRenewalResponse
    {
        /** @var AutoRenewalResponse $response */
        $response = $this->request($prompt, AutoRenewalResponse::class);

        return $response;
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
     * @return CreateResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function create(VacancyCreatePrompt $prompt): CreateResponse
    {
        /** @var CreateResponse $response */
        $response = $this->request($prompt, CreateResponse::class);

        return $response;
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
     * @return CreateV2Response DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function createV2(VacancyCreateV2Prompt $prompt): CreateV2Response
    {
        /** @var CreateV2Response $response */
        $response = $this->request($prompt, CreateV2Response::class);

        return $response;
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
     * @return GetItemResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getItem(VacancyGetItemPrompt $prompt): GetItemResponse
    {
        /** @var GetItemResponse $response */
        $response = $this->request($prompt, GetItemResponse::class);

        return $response;
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
     * @return GetStatusesResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getStatuses(VacancyGetStatusesPrompt $prompt): GetStatusesResponse
    {
        /** @var GetStatusesResponse $response */
        $response = $this->request($prompt, GetStatusesResponse::class);

        return $response;
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
     * @return ProlongateResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function prolongate(VacancyProlongatePrompt $prompt): ProlongateResponse
    {
        /** @var ProlongateResponse $response */
        $response = $this->request($prompt, ProlongateResponse::class);

        return $response;
    }

    /**
     * Поиск вакансий
     * 
     * OperationId: searchVacancy.
     * HTTP: GET /job/v2/vacancies.
     *
     * @param SearchVacancyPrompt $prompt DTO запроса.
     *
     * @return SearchResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function search(SearchVacancyPrompt $prompt): SearchResponse
    {
        /** @var SearchResponse $response */
        $response = $this->request($prompt, SearchResponse::class);

        return $response;
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
     * @return UpdateResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function update(VacancyUpdatePrompt $prompt): UpdateResponse
    {
        /** @var UpdateResponse $response */
        $response = $this->request($prompt, UpdateResponse::class);

        return $response;
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
     * @return UpdateV2Response DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function updateV2(VacancyUpdateV2Prompt $prompt): UpdateV2Response
    {
        /** @var UpdateV2Response $response */
        $response = $this->request($prompt, UpdateV2Response::class);

        return $response;
    }
}
