<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Provider\RealtyReports;

use and_y87\php_client_avito\BaseAvitoProvider;
use and_y87\php_client_avito\Generated\Prompt\CreateReportForClassifiedPrompt;
use and_y87\php_client_avito\Generated\Response\RealtyReports\Report\CreateForClassifiedResponse;

/**
 * Группа методов "report" раздела Avito API "Аналитика по недвижимости".
 */
class ReportProvider extends BaseAvitoProvider
{
    /**
     * Получение аналитического отчета по недвижимости
     *
     * Получение аналитического отчета по недвижимости
     *
     * **Данный метод доступен только пользователям с активной подпиской «Лидер» в категории «Недвижимость»**
     *
     * OperationId: CreateReportForClassified.
     * HTTP: POST /realty/v1/report/create/{itemId}.
     *
     * @param CreateReportForClassifiedPrompt $prompt DTO запроса.
     *
     * @return CreateForClassifiedResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function createForClassified(CreateReportForClassifiedPrompt $prompt): CreateForClassifiedResponse
    {
        /** @var CreateForClassifiedResponse $response */
        $response = $this->request($prompt, CreateForClassifiedResponse::class);

        return $response;
    }
}
