<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider\DeliverySandbox;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\AddSortingCenterPrompt;
use Andy87\ClientsAvito\Generated\Prompt\GetSortingCenterPrompt;
use Andy87\ClientsAvito\Generated\Response\DeliverySandbox\Sorting\AddCenterResponse;
use Andy87\ClientsAvito\Generated\Response\DeliverySandbox\Sorting\GetCenterResponse;

/**
 * Группа методов "sorting" раздела Avito API "Доставка".
 */
class SortingProvider extends BaseAvitoProvider
{
    /**
     * Загрузить сортировочные центры
     * 
     * Создание задачи на загрузку своих сортировочных центров и первичная валидация данных.  
     * После загрузки сортировочных центров им необходимо проставить тэги отдельным запросом  
     * 
     * Данные необходимо загружать по мере обновления данных о сортировочных центрах (как правило это 1-2 раза в сутки)
     * 
     * ### Описание ошибок
     * | http code |   error code                  |       error message                        |
     * |-----------|-------------------------------|--------------------------------------------|
     * |    200    | INVALID_ENTITY                | Failed to get sorting centers from request |
     * |    200    | INVALID_ENTITY                | Empty sorting centers list                 |
     * |    200    | INVALID_ENTITY                | Failed to convert sorting centers          |
     * |    500    | FAILED_TO_ADD_SORTING_CENTERS | Failed to add sorting centers              |
     * 
     * Итоговый результат операции необходимо проверять через:  
     * [метод получения результата выполнения задачи](#operation/GetTask)
     * 
     * OperationId: AddSortingCenter.
     * HTTP: POST /delivery-sandbox/tariffs/sorting-center.
     *
     * @param AddSortingCenterPrompt $prompt DTO запроса.
     *
     * @return AddCenterResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function addCenter(AddSortingCenterPrompt $prompt): AddCenterResponse
    {
        /** @var AddCenterResponse $response */
        $response = $this->request($prompt, AddCenterResponse::class);

        return $response;
    }

    /**
     * Получить список сортировочных центров
     * 
     * Возвращает сортировочные центы для переданных служб доставки
     * 
     * ### Справочник служб доставки
     * |    код    |    Название  |
     * |-----------|--------------|
     * |   pochta  | Почта России |
     * |   exmail  | ExMail       |
     * |     bb    | Boxberyy     |
     * |     pp    | PickPoint    |
     * |    dpd    | DPD          |
     * 
     * ### Описание ошибок
     * | http code |   error code                  |       error message                                      |
     * |-----------|-------------------------------|----------------------------------------------------------|
     * |    200    | INVALID_QUERY_PARAMETERS      | Failed to convert entities: {error description}          |
     * |    200    | INVALID_QUERY_PARAMETERS      | Failed to get entities from request: {error description} |
     * |    500    | FAILED_TO_GET_SORTING_CENTERS | Failed to get sorting centers                            |
     * 
     * OperationId: GetSortingCenter.
     * HTTP: GET /delivery-sandbox/sorting-center.
     *
     * @param GetSortingCenterPrompt $prompt DTO запроса.
     *
     * @return GetCenterResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getCenter(GetSortingCenterPrompt $prompt): GetCenterResponse
    {
        /** @var GetCenterResponse $response */
        $response = $this->request($prompt, GetCenterResponse::class);

        return $response;
    }
}
