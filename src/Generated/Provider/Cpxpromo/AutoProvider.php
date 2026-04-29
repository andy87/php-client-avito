<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider\Cpxpromo;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\SaveAutoBidPrompt;
use Andy87\ClientsAvito\Generated\Response\Cpxpromo\Auto\SaveBidResponse;

/**
 * Группа методов "auto" раздела Avito API "Настройка цены целевого действия".
 */
class AutoProvider extends BaseAvitoProvider
{
    /**
     * Применение автоматической настройки
     * 
     * Метод позволяет установить бюджет (в копейках) и срок, за который потратится этот бюджет ("1d" — сутки; "7d" — неделя; "30d" — месяц). Бюджет указывать необязательно.
     * 
     * Автоматическое продвижение пока что нельзя запустить в категории «Транспорт»
     * 
     * Максимальное количество запросов в минуту - 10.
     * 
     * OperationId: saveAutoBid.
     * HTTP: POST /cpxpromo/1/setAuto.
     *
     * @param SaveAutoBidPrompt $prompt DTO запроса.
     *
     * @return SaveBidResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function saveBid(SaveAutoBidPrompt $prompt): SaveBidResponse
    {
        /** @var SaveBidResponse $response */
        $response = $this->request($prompt, SaveBidResponse::class);

        return $response;
    }
}
