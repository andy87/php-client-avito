<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider\Autoload;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\GetLastCompletedReportPrompt;
use Andy87\ClientsAvito\Generated\Prompt\GetLastCompletedReportV3Prompt;
use Andy87\ClientsAvito\Generated\Response\Autoload\Last\GetCompletedReportResponse;
use Andy87\ClientsAvito\Generated\Response\Autoload\Last\GetCompletedReportV3Response;

/**
 * Группа методов "last" раздела Avito API "Автозагрузка".
 */
class LastProvider extends BaseAvitoProvider
{
    /**
     * Статистика по последней выгрузке (deprecated)
     * 
     * Метод возвращает сводную статистику с результатами последней завершённой выгрузки.
     * Например, сколько объявлений было в файле и сколько из них было опубликовано с ошибками или без.
     * 
     * 📝 [Напишите нам](https://docs.google.com/forms/d/e/1FAIpQLSdfTHlP6PKtOb08fxD7BaJ0VjtkaLXoRAswhF9gnKvrEyY16g/viewform?usp=sf_link),
     * если в методе вам не хватает каких-либо данных.
     * 
     * С 23.12.2024 вместо поля feed_url используйте поле feeds_urls. В нём содержится название файла и ссылка на него. [Новая версия](https://developers.avito.ru/api-catalog/autoload/documentation#operation/getLastCompletedReportV3)
     * 
     * OperationId: getLastCompletedReport.
     * HTTP: GET /autoload/v2/reports/last_completed_report.
     *
     * @param GetLastCompletedReportPrompt $prompt DTO запроса.
     *
     * @return GetCompletedReportResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getCompletedReport(GetLastCompletedReportPrompt $prompt): GetCompletedReportResponse
    {
        /** @var GetCompletedReportResponse $response */
        $response = $this->request($prompt, GetCompletedReportResponse::class);

        return $response;
    }

    /**
     * Статистика по последней выгрузке
     * 
     * Метод возвращает сводную статистику с результатами последней завершённой выгрузки.
     * Например, сколько объявлений было в файле и сколько из них было опубликовано с ошибками или без.
     * 
     * 📝 [Напишите нам](https://docs.google.com/forms/d/e/1FAIpQLSdfTHlP6PKtOb08fxD7BaJ0VjtkaLXoRAswhF9gnKvrEyY16g/viewform?usp=sf_link),
     * если в методе вам не хватает каких-либо данных.
     * 
     * С 23.12.2024 вместо поля feed_url используйте поле feeds_urls. В нём содержится название файла и ссылка на него.
     * 
     * OperationId: getLastCompletedReportV3.
     * HTTP: GET /autoload/v3/reports/last_completed_report.
     *
     * @param GetLastCompletedReportV3Prompt $prompt DTO запроса.
     *
     * @return GetCompletedReportV3Response DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getCompletedReportV3(GetLastCompletedReportV3Prompt $prompt): GetCompletedReportV3Response
    {
        /** @var GetCompletedReportV3Response $response */
        $response = $this->request($prompt, GetCompletedReportV3Response::class);

        return $response;
    }
}
