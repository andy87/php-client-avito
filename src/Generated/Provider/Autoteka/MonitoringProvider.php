<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider\Autoteka;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\MonitoringBucketAddPrompt;
use Andy87\ClientsAvito\Generated\Prompt\MonitoringBucketDeletePrompt;
use Andy87\ClientsAvito\Generated\Prompt\MonitoringBucketRemovePrompt;
use Andy87\ClientsAvito\Generated\Prompt\MonitoringGetRegActionsPrompt;
use Andy87\ClientsAvito\Generated\Response\Autoteka\Monitoring\BucketAddResponse;
use Andy87\ClientsAvito\Generated\Response\Autoteka\Monitoring\BucketDeleteResponse;
use Andy87\ClientsAvito\Generated\Response\Autoteka\Monitoring\BucketRemoveResponse;
use Andy87\ClientsAvito\Generated\Response\Autoteka\Monitoring\GetRegActionsResponse;

/**
 * Группа методов "monitoring" раздела Avito API "Автотека".
 */
class MonitoringProvider extends BaseAvitoProvider
{
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
     * @return BucketAddResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function bucketAdd(MonitoringBucketAddPrompt $prompt): BucketAddResponse
    {
        /** @var BucketAddResponse $response */
        $response = $this->request($prompt, BucketAddResponse::class);

        return $response;
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
     * @return BucketDeleteResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function bucketDelete(MonitoringBucketDeletePrompt $prompt): BucketDeleteResponse
    {
        /** @var BucketDeleteResponse $response */
        $response = $this->request($prompt, BucketDeleteResponse::class);

        return $response;
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
     * @return BucketRemoveResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function bucketRemove(MonitoringBucketRemovePrompt $prompt): BucketRemoveResponse
    {
        /** @var BucketRemoveResponse $response */
        $response = $this->request($prompt, BucketRemoveResponse::class);

        return $response;
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
     * @return GetRegActionsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getRegActions(MonitoringGetRegActionsPrompt $prompt): GetRegActionsResponse
    {
        /** @var GetRegActionsResponse $response */
        $response = $this->request($prompt, GetRegActionsResponse::class);

        return $response;
    }
}
