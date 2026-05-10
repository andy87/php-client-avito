<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Provider\Autoteka;

use php_client_avito\BaseAvitoProvider;
use php_client_avito\Generated\Prompt\SpecificationByPlateNumberPrompt;
use php_client_avito\Generated\Prompt\SpecificationByVehicleIdPrompt;
use php_client_avito\Generated\Prompt\SpecificationGetByIdPrompt;
use php_client_avito\Generated\Response\Autoteka\Specification\ByPlateNumberResponse;
use php_client_avito\Generated\Response\Autoteka\Specification\ByVehicleIdResponse;
use php_client_avito\Generated\Response\Autoteka\Specification\GetByIdResponse;

/**
 * Группа методов "specification" раздела Avito API "Автотека".
 */
class SpecificationProvider extends BaseAvitoProvider
{
    /**
     * Запрос характеристик по регистрационному номеру
     *
     * Метод для запроса на получение спецификации по регистрационному номеру, возвращает идентификатор спецификации, по которому можно получить спецификацию в [методе для получения спецификации](#operation/specificationGetById).
     *
     * Чтобы подключить эту возможность, обратитесь к менеджеру Автотеки. Обратите внимание, что для её подключения надо завести отдельную учётную запись Автотеки.
     *
     * OperationId: specificationByPlateNumber.
     * HTTP: POST /autoteka/v1/specifications/by-plate-number.
     *
     * @param SpecificationByPlateNumberPrompt $prompt DTO запроса.
     *
     * @return ByPlateNumberResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function byPlateNumber(SpecificationByPlateNumberPrompt $prompt): ByPlateNumberResponse
    {
        /** @var ByPlateNumberResponse $response */
        $response = $this->request($prompt, ByPlateNumberResponse::class);

        return $response;
    }

    /**
     * Запрос характеристик по идентификатору авто (vin/frame)
     *
     * Метод для запроса на получение спецификации по идентификатору авто (vin/frame), возвращает идентификатор спецификации, по которому можно получить спецификацию в [методе для получения спецификации](#operation/specificationGetById).
     *
     * Чтобы подключить эту возможность, обратитесь к менеджеру Автотеки. Обратите внимание, что для её подключения надо завести отдельную учётную запись Автотеки.
     *
     * OperationId: specificationByVehicleId.
     * HTTP: POST /autoteka/v1/specifications/by-vehicle-id.
     *
     * @param SpecificationByVehicleIdPrompt $prompt DTO запроса.
     *
     * @return ByVehicleIdResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function byVehicleId(SpecificationByVehicleIdPrompt $prompt): ByVehicleIdResponse
    {
        /** @var ByVehicleIdResponse $response */
        $response = $this->request($prompt, ByVehicleIdResponse::class);

        return $response;
    }

    /**
     * Получение характеристик по ID запроса
     *
     * Метод для получения спецификации по ее идентификатору.
     *
     * Чтобы подключить эту возможность, обратитесь к менеджеру Автотеки. Обратите внимание, что для её подключения надо завести отдельную учётную запись Автотеки.
     *
     * OperationId: specificationGetById.
     * HTTP: GET /autoteka/v1/specifications/specification/{specificationID}.
     *
     * @param SpecificationGetByIdPrompt $prompt DTO запроса.
     *
     * @return GetByIdResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getById(SpecificationGetByIdPrompt $prompt): GetByIdResponse
    {
        /** @var GetByIdResponse $response */
        $response = $this->request($prompt, GetByIdResponse::class);

        return $response;
    }
}
