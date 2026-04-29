<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider\Str;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\PostBaseParamsPrompt;
use Andy87\ClientsAvito\Generated\Response\Str\Base\PostParamsResponse;

/**
 * Группа методов "base" раздела Avito API "Краткосрочная аренда".
 */
class BaseProvider extends BaseAvitoProvider
{
    /**
     * Установка базовых параметров
     * 
     * Обновляет базовые параметры: цена за ночь, минимальное количество ночей, доплата за гостя,  количество гостей больше которых активируется опция доплаты за гостя, период бесплатной отмены, параметры мгновенного бронирования (активность, максимальное/минимальное количество дней до заселения), скидки на бронирование.
     * 
     * OperationId: postBaseParams.
     * HTTP: POST /realty/v1/items/{item_id}/base.
     *
     * @param PostBaseParamsPrompt $prompt DTO запроса.
     *
     * @return PostParamsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function postParams(PostBaseParamsPrompt $prompt): PostParamsResponse
    {
        /** @var PostParamsResponse $response */
        $response = $this->request($prompt, PostParamsResponse::class);

        return $response;
    }
}
