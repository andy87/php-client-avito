<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider\Messenger;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\GetVoiceFilesPrompt;
use Andy87\ClientsAvito\Generated\Response\Messenger\Voice\GetFilesResponse;

/**
 * Группа методов "voice" раздела Avito API "Мессенджер".
 */
class VoiceProvider extends BaseAvitoProvider
{
    /**
     * Получение голосовых сообщений
     * 
     * Метод используется для получения ссылки на файл с голосовым сообщением по идентификатору voice_id, получаемому из тела сообщения с типом voice.
     * 
     * Особенности работы с голосовыми сообщениями:
     * - Голосовые сообщения Авито используют кодек **[opus](https://ru.wikipedia.org/wiki/Opus_(%D0%BA%D0%BE%D0%B4%D0%B5%D0%BA))** внутри **.mp4** контейнера; 
     * - Ссылка на голосовое сообщение доступна в течение **одного часа** с момента запроса. Попытка получить файл по ссылке спустя это время приведёт к ошибке. Для восстановления доступа необходимо получить новую ссылку на файл;
     * - Как и с обычными сообщениями, получение ссылки на файл доступно только для пользователей, находящихся в беседе, где голосовое сообщение было отправлено;
     * 
     * OperationId: getVoiceFiles.
     * HTTP: GET /messenger/v1/accounts/{user_id}/getVoiceFiles.
     *
     * @param GetVoiceFilesPrompt $prompt DTO запроса.
     *
     * @return GetFilesResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getFiles(GetVoiceFilesPrompt $prompt): GetFilesResponse
    {
        /** @var GetFilesResponse $response */
        $response = $this->request($prompt, GetFilesResponse::class);

        return $response;
    }
}
