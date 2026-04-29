<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider\Promotion;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\GetServicesByItemsV1Prompt;
use Andy87\ClientsAvito\Generated\Response\Promotion\Services\GetByItemsV1Response;

/**
 * Группа методов "services" раздела Avito API "Продвижение".
 */
class ServicesProvider extends BaseAvitoProvider
{
    /**
     * Список услуг продвижения
     * 
     * Получение списка активных услуг продвижения по объявлениям
     *  
     * **Rate limit:** 100 RPM
     * 
     * OperationId: get_services_by_items_v1.
     * HTTP: POST /promotion/v1/items/services/get.
     *
     * @param GetServicesByItemsV1Prompt $prompt DTO запроса.
     *
     * @return GetByItemsV1Response DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getByItemsV1(GetServicesByItemsV1Prompt $prompt): GetByItemsV1Response
    {
        /** @var GetByItemsV1Response $response */
        $response = $this->request($prompt, GetByItemsV1Response::class);

        return $response;
    }
}
