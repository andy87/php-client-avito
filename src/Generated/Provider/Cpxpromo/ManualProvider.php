<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Provider\Cpxpromo;

use and_y87\php_client_avito\BaseAvitoProvider;
use and_y87\php_client_avito\Generated\Prompt\SaveManualBidPrompt;
use and_y87\php_client_avito\Generated\Response\Cpxpromo\Manual\SaveBidResponse;

/**
 * Группа методов "manual" раздела Avito API "Настройка цены целевого действия".
 */
class ManualProvider extends BaseAvitoProvider
{
    /**
     * Применение ручной настройки
     *
     * Метод позволяет установить цену за целевое действие и лимит трат (обе суммы нужно указать в копейках).
     *
     * Цена целевого действия должна быть больше минимальной цены (посмотреть минимальную цену можно в ручке получения получения детализированной информации о действующих и доступных ценах за целевые действия и бюджетах). Лимит трат указывать необязательно.
     *
     * Максимальное количество запросов в минуту - 20.
     *
     * OperationId: saveManualBid.
     * HTTP: POST /cpxpromo/1/setManual.
     *
     * @param SaveManualBidPrompt $prompt DTO запроса.
     *
     * @return SaveBidResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function saveBid(SaveManualBidPrompt $prompt): SaveBidResponse
    {
        /** @var SaveBidResponse $response */
        $response = $this->request($prompt, SaveBidResponse::class);

        return $response;
    }
}
