<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider\Cpxpromo;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\GetPromotionsByItemIdsPrompt;
use Andy87\ClientsAvito\Generated\Response\Cpxpromo\Promotions\GetByItemIdsResponse;

/**
 * Группа методов "promotions" раздела Avito API "Настройка цены целевого действия".
 */
class PromotionsProvider extends BaseAvitoProvider
{
    /**
     * Получение текущих цен за целевое действие и бюджетов по нескольким объявлениям
     * 
     * Метод позволяет получить текущие цены целевого действия (в копейках) и бюджеты (в копейках) по нескольким объявлениям.
     * Максимальное количество передаваемых объявлений - 200.
     * Максимальное количество запросов в минуту - 400.
     * 
     * OperationId: getPromotionsByItemIds.
     * HTTP: POST /cpxpromo/1/getPromotionsByItemIds.
     *
     * @param GetPromotionsByItemIdsPrompt $prompt DTO запроса.
     *
     * @return GetByItemIdsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getByItemIds(GetPromotionsByItemIdsPrompt $prompt): GetByItemIdsResponse
    {
        /** @var GetByItemIdsResponse $response */
        $response = $this->request($prompt, GetByItemIdsResponse::class);

        return $response;
    }
}
