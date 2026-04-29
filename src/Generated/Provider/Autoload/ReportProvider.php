<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider\Autoload;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\GetReportByIdV2Prompt;
use Andy87\ClientsAvito\Generated\Prompt\GetReportByIdV3Prompt;
use Andy87\ClientsAvito\Generated\Prompt\GetReportItemsByIdPrompt;
use Andy87\ClientsAvito\Generated\Prompt\GetReportItemsFeesByIdPrompt;
use Andy87\ClientsAvito\Generated\Response\Autoload\Report\GetByIdV2Response;
use Andy87\ClientsAvito\Generated\Response\Autoload\Report\GetByIdV3Response;
use Andy87\ClientsAvito\Generated\Response\Autoload\Report\GetItemsByIdResponse;
use Andy87\ClientsAvito\Generated\Response\Autoload\Report\GetItemsFeesByIdResponse;

/**
 * Группа методов "report" раздела Avito API "Автозагрузка".
 */
class ReportProvider extends BaseAvitoProvider
{
    /**
     * Статистика по конкретной выгрузке (deprecated)
     * 
     * Метод возвращает сводную статистику с результатами конкретной выгрузки — по ID отчёта.
     * Например, сколько объявлений было в файле и сколько из них было опубликовано с ошибками или без.
     * 
     * 📝 [Напишите нам](https://docs.google.com/forms/d/e/1FAIpQLSdfTHlP6PKtOb08fxD7BaJ0VjtkaLXoRAswhF9gnKvrEyY16g/viewform?usp=sf_link),
     * если в методе вам не хватает каких-либо данных.
     * 
     * С 23.12.2024 вместо поля feed_url используйте поле feeds_urls. В нём содержится название файла и ссылка на него. [Новая версия](https://developers.avito.ru/api-catalog/autoload/documentation#operation/getReportByIdV3)
     * 
     * OperationId: getReportByIdV2.
     * HTTP: GET /autoload/v2/reports/{report_id}.
     *
     * @param GetReportByIdV2Prompt $prompt DTO запроса.
     *
     * @return GetByIdV2Response DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getByIdV2(GetReportByIdV2Prompt $prompt): GetByIdV2Response
    {
        /** @var GetByIdV2Response $response */
        $response = $this->request($prompt, GetByIdV2Response::class);

        return $response;
    }

    /**
     * Статистика по конкретной выгрузке
     * 
     * Метод возвращает сводную статистику с результатами конкретной выгрузки — по ID отчёта.
     * Например, сколько объявлений было в файле и сколько из них было опубликовано с ошибками или без.
     * 
     * 📝 [Напишите нам](https://docs.google.com/forms/d/e/1FAIpQLSdfTHlP6PKtOb08fxD7BaJ0VjtkaLXoRAswhF9gnKvrEyY16g/viewform?usp=sf_link),
     * если в методе вам не хватает каких-либо данных.
     * 
     * С 23.12.2024 вместо поля feed_url используйте поле feeds_urls. В нём содержится название файла и ссылка на него.
     * 
     * OperationId: getReportByIdV3.
     * HTTP: GET /autoload/v3/reports/{report_id}.
     *
     * @param GetReportByIdV3Prompt $prompt DTO запроса.
     *
     * @return GetByIdV3Response DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getByIdV3(GetReportByIdV3Prompt $prompt): GetByIdV3Response
    {
        /** @var GetByIdV3Response $response */
        $response = $this->request($prompt, GetByIdV3Response::class);

        return $response;
    }

    /**
     * Все объявления из конкретной выгрузки
     * 
     * С помощью этого метода можно получить результаты обработки каждого объявления в конкретной выгрузке.
     * 
     * 📝 [Напишите нам](https://docs.google.com/forms/d/e/1FAIpQLSdfTHlP6PKtOb08fxD7BaJ0VjtkaLXoRAswhF9gnKvrEyY16g/viewform?usp=sf_link),
     * если в методе вам не хватает каких-либо данных.
     * 
     * С 23.12.2024 добавляется поле feed_name. В нём содержится название файла.
     * 
     * OperationId: getReportItemsById.
     * HTTP: GET /autoload/v2/reports/{report_id}/items.
     *
     * @param GetReportItemsByIdPrompt $prompt DTO запроса.
     *
     * @return GetItemsByIdResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getItemsById(GetReportItemsByIdPrompt $prompt): GetItemsByIdResponse
    {
        /** @var GetItemsByIdResponse $response */
        $response = $this->request($prompt, GetItemsByIdResponse::class);

        return $response;
    }

    /**
     * Списания за объявления в конкретной выгрузке
     * 
     * С помощью этого метода можно получить информацию о списаниях за размещение каждого объявления в конкретной выгрузке.
     * 
     * 📝 [Напишите нам](https://docs.google.com/forms/d/e/1FAIpQLSdfTHlP6PKtOb08fxD7BaJ0VjtkaLXoRAswhF9gnKvrEyY16g/viewform?usp=sf_link),
     * если в методе вам не хватает каких-либо данных.
     * 
     * OperationId: getReportItemsFeesById.
     * HTTP: GET /autoload/v2/reports/{report_id}/items/fees.
     *
     * @param GetReportItemsFeesByIdPrompt $prompt DTO запроса.
     *
     * @return GetItemsFeesByIdResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getItemsFeesById(GetReportItemsFeesByIdPrompt $prompt): GetItemsFeesByIdResponse
    {
        /** @var GetItemsFeesByIdResponse $response */
        $response = $this->request($prompt, GetItemsFeesByIdResponse::class);

        return $response;
    }
}
