<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider\Autoteka;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\GetTeaserPrompt;
use Andy87\ClientsAvito\Generated\Prompt\PostTeaserPrompt;
use Andy87\ClientsAvito\Generated\Response\Autoteka\Teaser\GetResponse;
use Andy87\ClientsAvito\Generated\Response\Autoteka\Teaser\PostResponse;

/**
 * Группа методов "teaser" раздела Avito API "Автотека".
 */
class TeaserProvider extends BaseAvitoProvider
{
    /**
     * Получение тизера по ID тизера
     * 
     * Получение тизера по его идентификатору, полученному из [запроса на создание тизера](#operation/postTeaser).
     * 
     * Чтобы подключить эту возможность, обратитесь к менеджеру Автотеки. Обратите внимание, что для её подключения надо завести отдельную учётную запись Автотеки.
     * 
     * OperationId: getTeaser.
     * HTTP: GET /autoteka/v1/teasers/{teaser_id}.
     *
     * @param GetTeaserPrompt $prompt DTO запроса.
     *
     * @return GetResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function get(GetTeaserPrompt $prompt): GetResponse
    {
        /** @var GetResponse $response */
        $response = $this->request($prompt, GetResponse::class);

        return $response;
    }

    /**
     * Тизер по идентификатору авто (vin/frame)
     * 
     * Метод для создания тизера по идентификатору авто (vin/frame), возвращает идентификатор отчета, по которому сформированный тизер можно получить в [методе для получения тизера по идентификатору отчета](#operation/getTeaser). При запросе происходит списание доступных отчетов.
     * 
     * Чтобы подключить эту возможность, обратитесь к менеджеру Автотеки. Обратите внимание, что для её подключения надо завести отдельную учётную запись Автотеки.
     * 
     * OperationId: postTeaser.
     * HTTP: POST /autoteka/v1/teasers.
     *
     * @param PostTeaserPrompt $prompt DTO запроса.
     *
     * @return PostResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function post(PostTeaserPrompt $prompt): PostResponse
    {
        /** @var PostResponse $response */
        $response = $this->request($prompt, PostResponse::class);

        return $response;
    }
}
