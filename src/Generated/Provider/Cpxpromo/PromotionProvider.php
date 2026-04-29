<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider\Cpxpromo;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\RemovePromotionPrompt;
use Andy87\ClientsAvito\Generated\Response\Cpxpromo\Promotion\RemoveResponse;

/**
 * Группа методов "promotion" раздела Avito API "Настройка цены целевого действия".
 */
class PromotionProvider extends BaseAvitoProvider
{
    /**
     * Остановка продвижения
     * 
     * Метод позволяет остановить продвижение и переключиться на цены из прайс-листа. 
     * Максимальное количество запросов в минуту - 300
     * 
     * OperationId: removePromotion.
     * HTTP: POST /cpxpromo/1/remove.
     *
     * @param RemovePromotionPrompt $prompt DTO запроса.
     *
     * @return RemoveResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function remove(RemovePromotionPrompt $prompt): RemoveResponse
    {
        /** @var RemoveResponse $response */
        $response = $this->request($prompt, RemoveResponse::class);

        return $response;
    }
}
