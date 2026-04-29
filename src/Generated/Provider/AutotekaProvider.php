<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\CatalogsResolvePrompt;
use Andy87\ClientsAvito\Generated\Prompt\GetAccessTokenPrompt2;
use Andy87\ClientsAvito\Generated\Prompt\GetActivePackagePrompt;
use Andy87\ClientsAvito\Generated\Prompt\GetLeadsPrompt;
use Andy87\ClientsAvito\Generated\Prompt\GetPreviewPrompt;
use Andy87\ClientsAvito\Generated\Prompt\GetReportListPrompt;
use Andy87\ClientsAvito\Generated\Prompt\GetReportPrompt;
use Andy87\ClientsAvito\Generated\Prompt\GetTeaserPrompt;
use Andy87\ClientsAvito\Generated\Prompt\MonitoringBucketAddPrompt;
use Andy87\ClientsAvito\Generated\Prompt\MonitoringBucketDeletePrompt;
use Andy87\ClientsAvito\Generated\Prompt\MonitoringBucketRemovePrompt;
use Andy87\ClientsAvito\Generated\Prompt\MonitoringGetRegActionsPrompt;
use Andy87\ClientsAvito\Generated\Prompt\PostPreviewByExternalItemPrompt;
use Andy87\ClientsAvito\Generated\Prompt\PostPreviewByItemIdPrompt;
use Andy87\ClientsAvito\Generated\Prompt\PostPreviewByRegNumberPrompt;
use Andy87\ClientsAvito\Generated\Prompt\PostPreviewByVinPrompt;
use Andy87\ClientsAvito\Generated\Prompt\PostReportByVehicleIdPrompt;
use Andy87\ClientsAvito\Generated\Prompt\PostReportPrompt;
use Andy87\ClientsAvito\Generated\Prompt\PostSyncCreateReportByRegNumberPrompt;
use Andy87\ClientsAvito\Generated\Prompt\PostSyncCreateReportByVinPrompt;
use Andy87\ClientsAvito\Generated\Prompt\PostTeaserPrompt;
use Andy87\ClientsAvito\Generated\Prompt\ScoringByVehicleIdPrompt;
use Andy87\ClientsAvito\Generated\Prompt\ScoringGetByIdPrompt;
use Andy87\ClientsAvito\Generated\Prompt\SpecificationByPlateNumberPrompt;
use Andy87\ClientsAvito\Generated\Prompt\SpecificationByVehicleIdPrompt;
use Andy87\ClientsAvito\Generated\Prompt\SpecificationGetByIdPrompt;
use Andy87\ClientsAvito\Generated\Prompt\ValuationBySpecificationPrompt;
use Andy87\ClientsAvito\Generated\Response\CatalogsResolveResponse;
use Andy87\ClientsAvito\Generated\Response\GetAccessTokenResponse2;
use Andy87\ClientsAvito\Generated\Response\GetActivePackageResponse;
use Andy87\ClientsAvito\Generated\Response\GetLeadsResponse;
use Andy87\ClientsAvito\Generated\Response\GetPreviewResponse;
use Andy87\ClientsAvito\Generated\Response\GetReportListResponse;
use Andy87\ClientsAvito\Generated\Response\GetReportResponse;
use Andy87\ClientsAvito\Generated\Response\GetTeaserResponse;
use Andy87\ClientsAvito\Generated\Response\MonitoringBucketAddResponse;
use Andy87\ClientsAvito\Generated\Response\MonitoringBucketDeleteResponse;
use Andy87\ClientsAvito\Generated\Response\MonitoringBucketRemoveResponse;
use Andy87\ClientsAvito\Generated\Response\MonitoringGetRegActionsResponse;
use Andy87\ClientsAvito\Generated\Response\PostPreviewByExternalItemResponse;
use Andy87\ClientsAvito\Generated\Response\PostPreviewByItemIdResponse;
use Andy87\ClientsAvito\Generated\Response\PostPreviewByRegNumberResponse;
use Andy87\ClientsAvito\Generated\Response\PostPreviewByVinResponse;
use Andy87\ClientsAvito\Generated\Response\PostReportByVehicleIdResponse;
use Andy87\ClientsAvito\Generated\Response\PostReportResponse;
use Andy87\ClientsAvito\Generated\Response\PostSyncCreateReportByRegNumberResponse;
use Andy87\ClientsAvito\Generated\Response\PostSyncCreateReportByVinResponse;
use Andy87\ClientsAvito\Generated\Response\PostTeaserResponse;
use Andy87\ClientsAvito\Generated\Response\ScoringByVehicleIdResponse;
use Andy87\ClientsAvito\Generated\Response\ScoringGetByIdResponse;
use Andy87\ClientsAvito\Generated\Response\SpecificationByPlateNumberResponse;
use Andy87\ClientsAvito\Generated\Response\SpecificationByVehicleIdResponse;
use Andy87\ClientsAvito\Generated\Response\SpecificationGetByIdResponse;
use Andy87\ClientsAvito\Generated\Response\ValuationBySpecificationResponse;

/**
 * Provider раздела Avito API "Автотека".
 * @property-read Autoteka\AccessProvider $access
 * @property-read Autoteka\ActiveProvider $active
 * @property-read Autoteka\CatalogsProvider $catalogs
 * @property-read Autoteka\LeadsProvider $leads
 * @property-read Autoteka\MonitoringProvider $monitoring
 * @property-read Autoteka\PreviewProvider $preview
 * @property-read Autoteka\ReportProvider $report
 * @property-read Autoteka\ScoringProvider $scoring
 * @property-read Autoteka\SpecificationProvider $specification
 * @property-read Autoteka\SyncProvider $sync
 * @property-read Autoteka\TeaserProvider $teaser
 * @property-read Autoteka\ValuationProvider $valuation
 *
 */
class AutotekaProvider extends BaseAvitoProvider
{
    protected const OPERATION_GROUPS = [
        'access' => Autoteka\AccessProvider::class,
        'active' => Autoteka\ActiveProvider::class,
        'catalogs' => Autoteka\CatalogsProvider::class,
        'leads' => Autoteka\LeadsProvider::class,
        'monitoring' => Autoteka\MonitoringProvider::class,
        'preview' => Autoteka\PreviewProvider::class,
        'report' => Autoteka\ReportProvider::class,
        'scoring' => Autoteka\ScoringProvider::class,
        'specification' => Autoteka\SpecificationProvider::class,
        'sync' => Autoteka\SyncProvider::class,
        'teaser' => Autoteka\TeaserProvider::class,
        'valuation' => Autoteka\ValuationProvider::class,
    ];

    /**
     * Получение актуальных параметров Автокаталога
     * 
     * Метод для получения возможных параметров для заполнения пользователем.
     * Первый запрос можно сделать без параметров, получить данные и далее, передавая нужные id и valueId в повторном запросе, получить все параметры.
     * 
     * OperationId: catalogsResolve.
     * HTTP: POST /autoteka/v1/catalogs/resolve.
     *
     * @param CatalogsResolvePrompt $prompt DTO запроса.
     *
     * @return CatalogsResolveResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function catalogsResolve(CatalogsResolvePrompt $prompt): CatalogsResolveResponse
    {
        /** @var Autoteka\CatalogsProvider $group */
        $group = $this->operationGroup('catalogs');

        return $group->resolve($prompt);
    }

    /**
     * Получение access token
     * 
     * Получение временного ключа для авторизации, пример `curl -L -X POST 'https://pro.autoteka.ru/token/' -H 'Content-Type: application/x-www-form-urlencoded' --data-urlencode 'grant_type=client_credentials' --data-urlencode 'client_id=XXX' --data-urlencode 'client_secret=YYY'`
     * 
     * OperationId: getAccessToken.
     * HTTP: POST /token.
     *
     * @param GetAccessTokenPrompt2 $prompt DTO запроса.
     *
     * @return GetAccessTokenResponse2 DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getAccessToken(GetAccessTokenPrompt2 $prompt): GetAccessTokenResponse2
    {
        /** @var Autoteka\AccessProvider $group */
        $group = $this->operationGroup('access');

        return $group->getToken($prompt);
    }

    /**
     * Запрос остатка отчётов пользователя
     * 
     * Возвращает остаток отчётов в текущем пакете пользователя
     * 
     * OperationId: getActivePackage.
     * HTTP: GET /autoteka/v1/packages/active_package.
     *
     * @param GetActivePackagePrompt $prompt DTO запроса.
     *
     * @return GetActivePackageResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getActivePackage(GetActivePackagePrompt $prompt): GetActivePackageResponse
    {
        /** @var Autoteka\ActiveProvider $group */
        $group = $this->operationGroup('active');

        return $group->getPackage($prompt);
    }

    /**
     * Получение событий сервиса Сигнал
     * 
     * Метод получения событий сервиса Сигнал
     * 
     * OperationId: getLeads.
     * HTTP: POST /autoteka/v1/get-leads/.
     *
     * @param GetLeadsPrompt $prompt DTO запроса.
     *
     * @return GetLeadsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getLeads(GetLeadsPrompt $prompt): GetLeadsResponse
    {
        /** @var Autoteka\LeadsProvider $group */
        $group = $this->operationGroup('leads');

        return $group->get($prompt);
    }

    /**
     * Получение превью по его ID
     * 
     * Возвращает текущий статус сбора информации превью, и краткую инфо по запрашиваемому `VIN`
     * 
     * OperationId: getPreview.
     * HTTP: GET /autoteka/v1/previews/{previewId}.
     *
     * @param GetPreviewPrompt $prompt DTO запроса.
     *
     * @return GetPreviewResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getPreview(GetPreviewPrompt $prompt): GetPreviewResponse
    {
        /** @var Autoteka\PreviewProvider $group */
        $group = $this->operationGroup('preview');

        return $group->get($prompt);
    }

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
     * @return GetReportResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getReport(GetReportPrompt $prompt): GetReportResponse
    {
        /** @var Autoteka\ReportProvider $group */
        $group = $this->operationGroup('report');

        return $group->get($prompt);
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
     * @return GetReportListResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getReportList(GetReportListPrompt $prompt): GetReportListResponse
    {
        /** @var Autoteka\ReportProvider $group */
        $group = $this->operationGroup('report');

        return $group->getList($prompt);
    }

    /**
     * Получение тизера по ID тизера
     * 
     * Получение тизера по его идентификатору, полученному из [запроса на создание тизера](#operation/postTeaser).
     * 
     * Чтобы подключить эту возможность, обратитесь к менеджеру Автотеки. Обратите внимание, что для её подключения надо завести отдельную учётную запись Автотеки.
     * 
     * OperationId: getTeaser.
     * HTTP: GET /autoteka/v1/teasers/{teaser_id}.
     *
     * @param GetTeaserPrompt $prompt DTO запроса.
     *
     * @return GetTeaserResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getTeaser(GetTeaserPrompt $prompt): GetTeaserResponse
    {
        /** @var Autoteka\TeaserProvider $group */
        $group = $this->operationGroup('teaser');

        return $group->get($prompt);
    }

    /**
     * Добавить идентификаторы (vin/frame) на мониторинг
     * 
     * Метод для добавления идентификаторов (vin/frame) на мониторинг.
     * Чтобы подключить эту возможность, обратитесь к менеджеру Автотеки.
     * 
     * OperationId: monitoringBucketAdd.
     * HTTP: POST /autoteka/v1/monitoring/bucket/add.
     *
     * @param MonitoringBucketAddPrompt $prompt DTO запроса.
     *
     * @return MonitoringBucketAddResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function monitoringBucketAdd(MonitoringBucketAddPrompt $prompt): MonitoringBucketAddResponse
    {
        /** @var Autoteka\MonitoringProvider $group */
        $group = $this->operationGroup('monitoring');

        return $group->bucketAdd($prompt);
    }

    /**
     * Полная очистка списка мониторинга
     * 
     * Метод для очистки списка мониторинга
     * 
     * OperationId: monitoringBucketDelete.
     * HTTP: POST /autoteka/v1/monitoring/bucket/delete.
     *
     * @param MonitoringBucketDeletePrompt $prompt DTO запроса.
     *
     * @return MonitoringBucketDeleteResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function monitoringBucketDelete(MonitoringBucketDeletePrompt $prompt): MonitoringBucketDeleteResponse
    {
        /** @var Autoteka\MonitoringProvider $group */
        $group = $this->operationGroup('monitoring');

        return $group->bucketDelete($prompt);
    }

    /**
     * Удаление идентификаторов из мониторинга (vin/frame)
     * 
     * Метод удаления идентификаторов из мониторинга (vin/frame)
     * 
     * OperationId: monitoringBucketRemove.
     * HTTP: POST /autoteka/v1/monitoring/bucket/remove.
     *
     * @param MonitoringBucketRemovePrompt $prompt DTO запроса.
     *
     * @return MonitoringBucketRemoveResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function monitoringBucketRemove(MonitoringBucketRemovePrompt $prompt): MonitoringBucketRemoveResponse
    {
        /** @var Autoteka\MonitoringProvider $group */
        $group = $this->operationGroup('monitoring');

        return $group->bucketRemove($prompt);
    }

    /**
     * Получение событий мониторинга
     * 
     * Метод получение событий мониторинга
     * 
     * OperationId: monitoringGetRegActions.
     * HTTP: GET /autoteka/v1/monitoring/get-reg-actions/.
     *
     * @param MonitoringGetRegActionsPrompt $prompt DTO запроса.
     *
     * @return MonitoringGetRegActionsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function monitoringGetRegActions(MonitoringGetRegActionsPrompt $prompt): MonitoringGetRegActionsResponse
    {
        /** @var Autoteka\MonitoringProvider $group */
        $group = $this->operationGroup('monitoring');

        return $group->getRegActions($prompt);
    }

    /**
     * Превью по ID объявления другой площадки
     * 
     * Возвращает идентификатор `previewId`, по которому асинхронно с помощью [запроса на получение превью по ID](#operation/getPreview) можно получить результат
     * 
     * OperationId: postPreviewByExternalItem.
     * HTTP: POST /autoteka/v1/request-preview-by-external-item.
     *
     * @param PostPreviewByExternalItemPrompt $prompt DTO запроса.
     *
     * @return PostPreviewByExternalItemResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function postPreviewByExternalItem(PostPreviewByExternalItemPrompt $prompt): PostPreviewByExternalItemResponse
    {
        /** @var Autoteka\PreviewProvider $group */
        $group = $this->operationGroup('preview');

        return $group->postByExternalItem($prompt);
    }

    /**
     * Превью по ID объявления Авито
     * 
     * Возвращает идентификатор `previewId`, по которому асинхронно с помощью [запроса на получение превью по ID](#operation/getPreview) можно получить результат
     * 
     * OperationId: postPreviewByItemId.
     * HTTP: POST /autoteka/v1/request-preview-by-item-id.
     *
     * @param PostPreviewByItemIdPrompt $prompt DTO запроса.
     *
     * @return PostPreviewByItemIdResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function postPreviewByItemId(PostPreviewByItemIdPrompt $prompt): PostPreviewByItemIdResponse
    {
        /** @var Autoteka\PreviewProvider $group */
        $group = $this->operationGroup('preview');

        return $group->postByItemId($prompt);
    }

    /**
     * Превью по государственному номеру
     * 
     * Возвращает идентификатор `previewId`, по которому асинхронно с помощью [запроса на получение превью по ID](#operation/getPreview) можно получить результат
     * 
     * OperationId: postPreviewByRegNumber.
     * HTTP: POST /autoteka/v1/request-preview-by-regnumber.
     *
     * @param PostPreviewByRegNumberPrompt $prompt DTO запроса.
     *
     * @return PostPreviewByRegNumberResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function postPreviewByRegNumber(PostPreviewByRegNumberPrompt $prompt): PostPreviewByRegNumberResponse
    {
        /** @var Autoteka\PreviewProvider $group */
        $group = $this->operationGroup('preview');

        return $group->postByRegNumber($prompt);
    }

    /**
     * Превью по VIN или номеру кузова
     * 
     * Возвращает идентификатор `previewId`, по которому асинхронно с помощью [запроса на получение превью по ID](#operation/getPreview) можно получить результат
     * 
     * OperationId: postPreviewByVin.
     * HTTP: POST /autoteka/v1/previews.
     *
     * @param PostPreviewByVinPrompt $prompt DTO запроса.
     *
     * @return PostPreviewByVinResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function postPreviewByVin(PostPreviewByVinPrompt $prompt): PostPreviewByVinResponse
    {
        /** @var Autoteka\PreviewProvider $group */
        $group = $this->operationGroup('preview');

        return $group->postByVin($prompt);
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
     * @return PostReportResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function postReport(PostReportPrompt $prompt): PostReportResponse
    {
        /** @var Autoteka\ReportProvider $group */
        $group = $this->operationGroup('report');

        return $group->post($prompt);
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
     * @return PostReportByVehicleIdResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function postReportByVehicleId(PostReportByVehicleIdPrompt $prompt): PostReportByVehicleIdResponse
    {
        /** @var Autoteka\ReportProvider $group */
        $group = $this->operationGroup('report');

        return $group->postByVehicleId($prompt);
    }

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
     * @return PostSyncCreateReportByRegNumberResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function postSyncCreateReportByRegNumber(PostSyncCreateReportByRegNumberPrompt $prompt): PostSyncCreateReportByRegNumberResponse
    {
        /** @var Autoteka\SyncProvider $group */
        $group = $this->operationGroup('sync');

        return $group->postCreateReportByRegNumber($prompt);
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
     * @return PostSyncCreateReportByVinResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function postSyncCreateReportByVin(PostSyncCreateReportByVinPrompt $prompt): PostSyncCreateReportByVinResponse
    {
        /** @var Autoteka\SyncProvider $group */
        $group = $this->operationGroup('sync');

        return $group->postCreateReportByVin($prompt);
    }

    /**
     * Тизер по идентификатору авто (vin/frame)
     * 
     * Метод для создания тизера по идентификатору авто (vin/frame), возвращает идентификатор отчета, по которому сформированный тизер можно получить в [методе для получения тизера по идентификатору отчета](#operation/getTeaser). При запросе происходит списание доступных отчетов.
     * 
     * Чтобы подключить эту возможность, обратитесь к менеджеру Автотеки. Обратите внимание, что для её подключения надо завести отдельную учётную запись Автотеки.
     * 
     * OperationId: postTeaser.
     * HTTP: POST /autoteka/v1/teasers.
     *
     * @param PostTeaserPrompt $prompt DTO запроса.
     *
     * @return PostTeaserResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function postTeaser(PostTeaserPrompt $prompt): PostTeaserResponse
    {
        /** @var Autoteka\TeaserProvider $group */
        $group = $this->operationGroup('teaser');

        return $group->post($prompt);
    }

    /**
     * Скоринг рисков по идентификатору авто (vin/frame)
     * 
     * Метод для запроса скоринга рисков по идентификатору авто (vin/frame). Возвращает идентификатор, по которому скоринг можно получить в [методе для получения скоринга рисков по его идентификатору](#operation/scoringGetById). При запросе происходит списание доступных проверок.
     * 
     * Чтобы подключить эту возможность, обратитесь к менеджеру Автотеки. Обратите внимание, что для её подключения надо завести отдельную учётную запись Автотеки.
     * 
     * OperationId: scoringByVehicleId.
     * HTTP: POST /autoteka/v1/scoring/by-vehicle-id.
     *
     * @param ScoringByVehicleIdPrompt $prompt DTO запроса.
     *
     * @return ScoringByVehicleIdResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function scoringByVehicleId(ScoringByVehicleIdPrompt $prompt): ScoringByVehicleIdResponse
    {
        /** @var Autoteka\ScoringProvider $group */
        $group = $this->operationGroup('scoring');

        return $group->byVehicleId($prompt);
    }

    /**
     * Получение скоринга рисков по его ID
     * 
     * Получение скоринга рисков по его идентификатору, полученному из [запроса на создание скоринга](#operation/scoringByVehicleId).
     * 
     * Чтобы подключить эту возможность, обратитесь к менеджеру Автотеки. Обратите внимание, что для её подключения надо завести отдельную учётную запись Автотеки.
     * 
     * OperationId: scoringGetById.
     * HTTP: GET /autoteka/v1/scoring/{scoring_id}.
     *
     * @param ScoringGetByIdPrompt $prompt DTO запроса.
     *
     * @return ScoringGetByIdResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function scoringGetById(ScoringGetByIdPrompt $prompt): ScoringGetByIdResponse
    {
        /** @var Autoteka\ScoringProvider $group */
        $group = $this->operationGroup('scoring');

        return $group->getById($prompt);
    }

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
     * @return SpecificationByPlateNumberResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function specificationByPlateNumber(SpecificationByPlateNumberPrompt $prompt): SpecificationByPlateNumberResponse
    {
        /** @var Autoteka\SpecificationProvider $group */
        $group = $this->operationGroup('specification');

        return $group->byPlateNumber($prompt);
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
     * @return SpecificationByVehicleIdResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function specificationByVehicleId(SpecificationByVehicleIdPrompt $prompt): SpecificationByVehicleIdResponse
    {
        /** @var Autoteka\SpecificationProvider $group */
        $group = $this->operationGroup('specification');

        return $group->byVehicleId($prompt);
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
     * @return SpecificationGetByIdResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function specificationGetById(SpecificationGetByIdPrompt $prompt): SpecificationGetByIdResponse
    {
        /** @var Autoteka\SpecificationProvider $group */
        $group = $this->operationGroup('specification');

        return $group->getById($prompt);
    }

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
     * @return ValuationBySpecificationResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function valuationBySpecification(ValuationBySpecificationPrompt $prompt): ValuationBySpecificationResponse
    {
        /** @var Autoteka\ValuationProvider $group */
        $group = $this->operationGroup('valuation');

        return $group->bySpecification($prompt);
    }
}
