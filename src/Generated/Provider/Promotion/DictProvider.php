<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider\Promotion;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\GetDictOfServicesV1Prompt;
use Andy87\ClientsAvito\Generated\Response\Promotion\Dict\GetOfServicesV1Response;

/**
 * Группа методов "dict" раздела Avito API "Продвижение".
 */
class DictProvider extends BaseAvitoProvider
{
    /**
     * Словарь типов услуг продвижения
     * 
     * Получение словаря типов услуг продвижения
     * 
     * **Rate limit:** 100 RPM
     * 
     * OperationId: get_dict_of_services_v1.
     * HTTP: POST /promotion/v1/items/services/dict.
     *
     * @param GetDictOfServicesV1Prompt $prompt DTO запроса.
     *
     * @return GetOfServicesV1Response DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getOfServicesV1(GetDictOfServicesV1Prompt $prompt): GetOfServicesV1Response
    {
        /** @var GetOfServicesV1Response $response */
        $response = $this->request($prompt, GetOfServicesV1Response::class);

        return $response;
    }
}
