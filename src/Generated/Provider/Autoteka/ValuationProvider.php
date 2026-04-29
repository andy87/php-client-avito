<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider\Autoteka;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\ValuationBySpecificationPrompt;
use Andy87\ClientsAvito\Generated\Response\Autoteka\Valuation\BySpecificationResponse;

/**
 * Группа методов "valuation" раздела Avito API "Автотека".
 */
class ValuationProvider extends BaseAvitoProvider
{
    /**
     * Получение оценки по параметрам
     * 
     * Метод для получения оценки по параметрам, полученным из методов [получения спецификации по ее идентификатору](#operation/specificationID) и [получения параметров автокаталога Авито](#operation/catalogsResolve)
     * 
     * Чтобы подключить эту возможность, обратитесь к менеджеру Автотеки. Обратите внимание, что для её подключения надо завести отдельную учётную запись Автотеки.
     * 
     * OperationId: valuationBySpecification.
     * HTTP: POST /autoteka/v1/valuation/by-specification.
     *
     * @param ValuationBySpecificationPrompt $prompt DTO запроса.
     *
     * @return BySpecificationResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function bySpecification(ValuationBySpecificationPrompt $prompt): BySpecificationResponse
    {
        /** @var BySpecificationResponse $response */
        $response = $this->request($prompt, BySpecificationResponse::class);

        return $response;
    }
}
