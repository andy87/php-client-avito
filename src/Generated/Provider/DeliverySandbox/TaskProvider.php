<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider\DeliverySandbox;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\GetTaskPrompt;
use Andy87\ClientsAvito\Generated\Response\DeliverySandbox\Task\GetResponse;

/**
 * Группа методов "task" раздела Avito API "Доставка".
 */
class TaskProvider extends BaseAvitoProvider
{
    /**
     * Получение информации по задаче
     * 
     * Получить информацию о задаче
     * 
     * Примерное время выполнения задачи от 5 до 20 минут
     * 
     * ### Возможные статусы задачи
     *  Задача может быть в одном из следующих статусов:
     *   * `processing` - задача ждёт очередь на выполнение или уже выполняется
     *   * `success` - задача успешно выполнена
     *   * `failed` - задача завершилась с ошибкой или не смогла завершиться по техническим причинам
     *   * `pending_approval` - загрузка терминалов приостановлена, процент критичных изменений превысил допустимый порог и требуется ручное одобрение
     *   * `declined` - загрузка терминалов отклонена
     * 
     * ### Описание ошибок
     * | http code |   error code       |       error message          |
     * |-----------|--------------------|------------------------------|
     * |    200    | URL_PATH_INVALID   | Task id must be int url path |
     * |    200    | INVALID_ENTITY     | Empty provider               |
     * |    500    | FAILED_TO_GET_TASK | Failed to get task           |
     * 
     * OperationId: GetTask.
     * HTTP: GET /delivery-sandbox/tasks/{task_id}.
     *
     * @param GetTaskPrompt $prompt DTO запроса.
     *
     * @return GetResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function get(GetTaskPrompt $prompt): GetResponse
    {
        /** @var GetResponse $response */
        $response = $this->request($prompt, GetResponse::class);

        return $response;
    }
}
