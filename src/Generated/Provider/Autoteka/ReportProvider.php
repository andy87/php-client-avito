<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider\Autoteka;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\GetReportListPrompt;
use Andy87\ClientsAvito\Generated\Prompt\GetReportPrompt;
use Andy87\ClientsAvito\Generated\Prompt\PostReportByVehicleIdPrompt;
use Andy87\ClientsAvito\Generated\Prompt\PostReportPrompt;
use Andy87\ClientsAvito\Generated\Response\Autoteka\Report\GetListResponse;
use Andy87\ClientsAvito\Generated\Response\Autoteka\Report\GetResponse;
use Andy87\ClientsAvito\Generated\Response\Autoteka\Report\PostByVehicleIdResponse;
use Andy87\ClientsAvito\Generated\Response\Autoteka\Report\PostResponse;

/**
 * Группа методов "report" раздела Avito API "Автотека".
 */
class ReportProvider extends BaseAvitoProvider
{
    /**
     * Получение отчета по его ID
     * 
     * Получение подробного отчета по его идентификатору, полученному из [запроса на создание отчета](#operation/postReport)
     * 
     * OperationId: getReport.
     * HTTP: GET /autoteka/v1/reports/{report_id}.
     *
     * @param GetReportPrompt $prompt DTO запроса.
     *
     * @return GetResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function get(GetReportPrompt $prompt): GetResponse
    {
        /** @var GetResponse $response */
        $response = $this->request($prompt, GetResponse::class);

        return $response;
    }

    /**
     * Получение списка отчётов
     * 
     * Получение списка запрошенных ранее отчетов [запроса на создание отчета](#operation/postReport)
     * 
     * OperationId: getReportList.
     * HTTP: GET /autoteka/v1/reports/list/.
     *
     * @param GetReportListPrompt $prompt DTO запроса.
     *
     * @return GetListResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getList(GetReportListPrompt $prompt): GetListResponse
    {
        /** @var GetListResponse $response */
        $response = $this->request($prompt, GetListResponse::class);

        return $response;
    }

    /**
     * Отчет по превью
     * 
     * Метод для запроса отчета по `previewId`, возвращает идентификатор отчета по которому сформированный отчет можно получить в [методе для получения отчета по его идентификатору](#operation/getReport). При запросе происходит списание доступных отчетов
     * 
     * OperationId: postReport.
     * HTTP: POST /autoteka/v1/reports.
     *
     * @param PostReportPrompt $prompt DTO запроса.
     *
     * @return PostResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function post(PostReportPrompt $prompt): PostResponse
    {
        /** @var PostResponse $response */
        $response = $this->request($prompt, PostResponse::class);

        return $response;
    }

    /**
     * Отчет по идентификатору авто (vin/frame)
     * 
     * Метод для запроса отчета по идентификатору авто (vin/frame), возвращает идентификатор отчета по которому сформированный отчет можно получить в [методе для получения отчета по его идентификатору](#operation/getReport). При запросе происходит списание доступных отчетов
     * 
     * OperationId: postReportByVehicleId.
     * HTTP: POST /autoteka/v1/reports-by-vehicle-id.
     *
     * @param PostReportByVehicleIdPrompt $prompt DTO запроса.
     *
     * @return PostByVehicleIdResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function postByVehicleId(PostReportByVehicleIdPrompt $prompt): PostByVehicleIdResponse
    {
        /** @var PostByVehicleIdResponse $response */
        $response = $this->request($prompt, PostByVehicleIdResponse::class);

        return $response;
    }
}
