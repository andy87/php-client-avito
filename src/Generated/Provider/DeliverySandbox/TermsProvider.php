<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider\DeliverySandbox;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\UpdateTermsPrompt;
use Andy87\ClientsAvito\Generated\Response\DeliverySandbox\Terms\UpdateResponse;

/**
 * Группа методов "terms" раздела Avito API "Доставка".
 */
class TermsProvider extends BaseAvitoProvider
{
    /**
     * Обновить сроки по тарифу
     * 
     * Создание задачи на обновление сроков в тарифе. Подробнее про сроки можно почитать в разделе загрузки тарифа https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/AddTariffSandboxV2.  
     * 
     * Важно ! Список новых сроков должен полностью соответствовать по deliveryProviderZoneId и name списку сроков, переданному при создании тарифа.
     * Т.е. необходимо перечислить все те же deliveryProviderZoneId и name, но можете поменять сроки (maxTerm и/или minTerm).
     * Если в какой-то зоне сроки не меняются, то необходимо все равно передать ее в исходном виде (без изменения в maxTerm и minTerm.
     * При загрузке неполного списка обновление сроков упадет с ошибкой (об этом узнать можно будет через [метод получения результата выполнения задачи](#operation/GetTask))
     * 
     * ### Описание ошибок
     * | http code |   error code                  |       error message                                                   |
     * |-----------|-------------------------------|-----------------------------------------------------------------------|
     * |    200    | INVALID_ENTITY                | Не удалось декодировать тело запрос, проверьте структуру              |
     * |    200    | INVALID_ENTITY                | Передан пустой список                                                 |
     * |    200    | INVALID_ENTITY                | Не указан или указан невалидный tariff_id, должно быть передано число |
     * |    200    | INVALID_ENTITY                | Передан tariff_id равный 0                                            |
     * |    500    | FAILED_TO_UPDATE_TERMS        | Ошибка обработки сроков                                               |
     * 
     * Итоговый результат операции необходимо проверять через:  
     * [метод получения результата выполнения задачи](#operation/GetTask)
     * 
     * OperationId: UpdateTerms.
     * HTTP: POST /delivery-sandbox/tariffs/{tariff_id}/terms.
     *
     * @param UpdateTermsPrompt $prompt DTO запроса.
     *
     * @return UpdateResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function update(UpdateTermsPrompt $prompt): UpdateResponse
    {
        /** @var UpdateResponse $response */
        $response = $this->request($prompt, UpdateResponse::class);

        return $response;
    }
}
