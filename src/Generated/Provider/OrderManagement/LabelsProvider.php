<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider\OrderManagement;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\GenerateLabelsExtendedPrompt;
use Andy87\ClientsAvito\Generated\Prompt\GenerateLabelsPrompt;
use Andy87\ClientsAvito\Generated\Response\OrderManagement\Labels\GenerateExtendedResponse;
use Andy87\ClientsAvito\Generated\Response\OrderManagement\Labels\GenerateResponse;

/**
 * Группа методов "labels" раздела Avito API "Управление заказами".
 */
class LabelsProvider extends BaseAvitoProvider
{
    /**
     * Создать задачу на генерацию этикеток (до 100).
     * 
     * Создаёт задачу на генерацию PDF-этикеток для заказов (до 100 штук).  Возвращает идентификатор задачи для последующей проверки статуса и скачивания результата. 
     * Максимальное количество запросов в минуту - 1000. Эта ручка доступна только для ПВЗ заказов.
     * 
     * OperationId: generateLabels.
     * HTTP: POST /order-management/1/orders/labels.
     *
     * @param GenerateLabelsPrompt $prompt DTO запроса.
     *
     * @return GenerateResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function generate(GenerateLabelsPrompt $prompt): GenerateResponse
    {
        /** @var GenerateResponse $response */
        $response = $this->request($prompt, GenerateResponse::class);

        return $response;
    }

    /**
     * Создать задачу на генерацию этикеток (до 1000).
     * 
     * Создаёт задачу на генерацию PDF-этикеток для заказов (до 1000 штук).  Возвращает идентификатор задачи для последующей проверки статуса и скачивания результата.
     * Максимальное количество запросов в минуту - 1. Эта ручка доступна только для ПВЗ заказов.
     * 
     * OperationId: generateLabelsExtended.
     * HTTP: POST /order-management/1/orders/labels/extended.
     *
     * @param GenerateLabelsExtendedPrompt $prompt DTO запроса.
     *
     * @return GenerateExtendedResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function generateExtended(GenerateLabelsExtendedPrompt $prompt): GenerateExtendedResponse
    {
        /** @var GenerateExtendedResponse $response */
        $response = $this->request($prompt, GenerateExtendedResponse::class);

        return $response;
    }
}
