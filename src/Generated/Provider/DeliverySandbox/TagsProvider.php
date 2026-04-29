<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider\DeliverySandbox;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\AddTagsToSortingCenterPrompt;
use Andy87\ClientsAvito\Generated\Response\DeliverySandbox\Tags\AddToSortingCenterResponse;

/**
 * Группа методов "tags" раздела Avito API "Доставка".
 */
class TagsProvider extends BaseAvitoProvider
{
    /**
     * Установка тэгов своим и/или чужим сортировочным центрам
     * 
     * Создание задачи на установку тэгов из своего тарифа своим и/или чужим сортировочным центрам.  
     * В рамках одного тарифа одному сортировочному центру может соответствовать только один тэг.  
     * Перепривязка сортировочного центра к тэгу в рамках одного тарифа невозможна, в случае ошибочной привязки необходимо сообщить об этом своему менеджеру по логистике.   
     * 
     * ### Описание ошибок
     * | http code |   error code                          |           error message                                      |
     * |-----------|---------------------------------------|--------------------------------------------------------------|
     * |    200    | INVALID_ENTITY                        | Failed to get tags from request                              |
     * |    200    | INVALID_ENTITY                        | Empty tags list                                              |
     * |    200    | INVALID_ENTITY                        | Failed to get tariff from path                               |
     * |    200    | INVALID_ENTITY                        | Zero tariff_if in path                                       |
     * |    200    | INVALID_ENTITY                        | Failed to convert tags                                       |
     * |    500    | FAILED_TO_ADD_TAGS_TO_SORTING_CENTERS | Failed to add tags to sorting centers                        |
     * 
     * 
     * Итоговый результат операции необходимо проверять через:  
     * [метод получения результата выполнения задачи](#operation/GetTask)
     * 
     * OperationId: AddTagsToSortingCenter.
     * HTTP: POST /delivery-sandbox/tariffs/{tariff_id}/tagged-sorting-centers.
     *
     * @param AddTagsToSortingCenterPrompt $prompt DTO запроса.
     *
     * @return AddToSortingCenterResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function addToSortingCenter(AddTagsToSortingCenterPrompt $prompt): AddToSortingCenterResponse
    {
        /** @var AddToSortingCenterResponse $response */
        $response = $this->request($prompt, AddToSortingCenterResponse::class);

        return $response;
    }
}
