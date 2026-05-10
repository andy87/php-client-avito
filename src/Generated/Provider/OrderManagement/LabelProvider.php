<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Provider\OrderManagement;

use php_client_avito\BaseAvitoProvider;
use php_client_avito\Generated\Prompt\DownloadLabelPrompt;
use php_client_avito\Generated\Response\OrderManagement\Label\DownloadResponse;

/**
 * Группа методов "label" раздела Avito API "Управление заказами".
 */
class LabelProvider extends BaseAvitoProvider
{
    /**
     * Скачать сгенерированный PDF-файл (этикетку).
     *
     * Скачивание сгенерированного PDF-файла с этикетками по идентификатору задачи.  Файл доступен после успешного завершения генерации.
     * Максимальное количество запросов в минуту - 1000.
     *
     * OperationId: downloadLabel.
     * HTTP: GET /order-management/1/orders/labels/{taskID}/download.
     *
     * @param DownloadLabelPrompt $prompt DTO запроса.
     *
     * @return DownloadResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function download(DownloadLabelPrompt $prompt): DownloadResponse
    {
        /** @var DownloadResponse $response */
        $response = $this->request($prompt, DownloadResponse::class);

        return $response;
    }
}
