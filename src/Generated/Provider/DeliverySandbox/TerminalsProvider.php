<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider\DeliverySandbox;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\AddTerminalsSandboxPrompt;
use Andy87\ClientsAvito\Generated\Response\DeliverySandbox\Terminals\AddSandboxResponse;

/**
 * Группа методов "terminals" раздела Avito API "Доставка".
 */
class TerminalsProvider extends BaseAvitoProvider
{
    /**
     * Загрузить терминалы
     * 
     * Загрузить новые терминалы
     * 
     * Данные необходимо загружать по мере обновления данных о ПВЗ (как правило это 1-2 раза в сутки)
     * 
     * ### Система апрува терминалов
     * 
     * При загрузке терминалов система автоматически сравнивает новые данные с текущими в базе.
     * Если процент критичных изменений превышает заданный порог — задача переходит в статус `pending_approval`
     * и требует ручного одобрения.
     * 
     * **Критичные изменения** (хотя бы одно из):
     * - Добавление нового терминала
     * - Удаление терминала
     * - Изменение сервисов (приём/выдача/возврат)
     * - Изменение ограничений (вес/размеры/стоимость)
     * - Изменение расписания
     * - Изменение тега (направления)
     * - Сдвиг координат более чем на 100 метров
     * 
     * Формула: `критичных / (существующих + добавленных) * 100% > порог`
     * 
     * При срабатывании апрува задача переходит в статус `pending_approval`, а в результате задачи
     * возвращаются поля с информацией об изменениях (`diff_added`, `diff_deleted`, `diff_modified`, `diff_critical`, `diff_total`).
     * 
     * > Система апрува не затрагивает ABD-терминалы.
     * 
     * ### Описание ошибок
     * | http code |   error code      |       error message                                       |
     * |-----------|-------------------|-----------------------------------------------------------|
     * |    200    | URL_PATH_INVALID  | Tariff id must be int url path                            |
     * |    200    | TERMINALS_INVALID | Failed to convert terminals: {error description}          |
     * |    200    | TERMINALS_INVALID | Failed to get terminals from request: {error decsription} |
     * 
     * OperationId: AddTerminalsSandbox.
     * HTTP: POST /delivery-sandbox/tariffs/{tariff_id}/terminals.
     *
     * @param AddTerminalsSandboxPrompt $prompt DTO запроса.
     *
     * @return AddSandboxResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function addSandbox(AddTerminalsSandboxPrompt $prompt): AddSandboxResponse
    {
        /** @var AddSandboxResponse $response */
        $response = $this->request($prompt, AddSandboxResponse::class);

        return $response;
    }
}
