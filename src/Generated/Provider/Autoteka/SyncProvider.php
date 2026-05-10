<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Provider\Autoteka;

use and_y87\php_client_avito\BaseAvitoProvider;
use and_y87\php_client_avito\Generated\Prompt\PostSyncCreateReportByRegNumberPrompt;
use and_y87\php_client_avito\Generated\Prompt\PostSyncCreateReportByVinPrompt;
use and_y87\php_client_avito\Generated\Response\Autoteka\Sync\PostCreateReportByRegNumberResponse;
use and_y87\php_client_avito\Generated\Response\Autoteka\Sync\PostCreateReportByVinResponse;

/**
 * Группа методов "sync" раздела Avito API "Автотека".
 */
class SyncProvider extends BaseAvitoProvider
{
    /**
     * Синхронное создание отчета по ГРЗ
     *
     * Метод для создания отчета по государственному регистрационному номеру в синхронном режиме без превью. Возвращает отчет. Таймаут - 30 секунд. Списывает проверку. Если в течение 30 секунд отчет не был сформирован, повторный запрос в течение часа не спишет дополнительных проверок.
     * Чтобы подключить эту возможность, обратитесь к менеджеру Автотеки.
     *
     * OperationId: postSyncCreateReportByRegNumber.
     * HTTP: POST /autoteka/v1/sync/create-by-regnumber.
     *
     * @param PostSyncCreateReportByRegNumberPrompt $prompt DTO запроса.
     *
     * @return PostCreateReportByRegNumberResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function postCreateReportByRegNumber(PostSyncCreateReportByRegNumberPrompt $prompt): PostCreateReportByRegNumberResponse
    {
        /** @var PostCreateReportByRegNumberResponse $response */
        $response = $this->request($prompt, PostCreateReportByRegNumberResponse::class);

        return $response;
    }

    /**
     * Синхронное создание отчёта по VIN или номеру кузова
     *
     * Метод для создания отчета по VIN или номеру кузова в синхронном режиме без превью. Возвращает отчет. Таймаут - 30 секунд. Списывает проверку. Если в течение 30 секунд отчет не был сформирован, повторный запрос в течение часа не спишет дополнительных проверок.
     * Чтобы подключить эту возможность, обратитесь к менеджеру Автотеки.
     *
     * OperationId: postSyncCreateReportByVin.
     * HTTP: POST /autoteka/v1/sync/create-by-vin.
     *
     * @param PostSyncCreateReportByVinPrompt $prompt DTO запроса.
     *
     * @return PostCreateReportByVinResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function postCreateReportByVin(PostSyncCreateReportByVinPrompt $prompt): PostCreateReportByVinResponse
    {
        /** @var PostCreateReportByVinResponse $response */
        $response = $this->request($prompt, PostCreateReportByVinResponse::class);

        return $response;
    }
}
