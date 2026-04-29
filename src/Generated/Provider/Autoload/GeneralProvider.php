<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider\Autoload;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\UploadPrompt;
use Andy87\ClientsAvito\Generated\Response\Autoload\General\UploadResponse;

/**
 * Группа методов "general" раздела Avito API "Автозагрузка".
 */
class GeneralProvider extends BaseAvitoProvider
{
    /**
     * Загрузка файла по ссылке
     * 
     * Метод запускает процесс выгрузки объявлений из файла по ссылке, которая указана
     * [в настройках автозагрузки](https://www.avito.ru/autoload/settings) в профиле Авито.
     * В течение часа таким способом можно запустить только одну выгрузку.
     * 
     * **Важно**: на загрузки с помощью этого метода не распространяются лимиты на количество публикаций, которые указаны в настройках автозагрузки в профиле Авито.
     * Все объявления из файла, которые могут быть опубликованы или активированы, будут опубликованы или активированы.
     * 
     * 📝 [Напишите нам](https://docs.google.com/forms/d/e/1FAIpQLSdfTHlP6PKtOb08fxD7BaJ0VjtkaLXoRAswhF9gnKvrEyY16g/viewform?usp=sf_link),
     * если в методе вам не хватает каких-либо данных.
     * 
     * OperationId: upload.
     * HTTP: POST /autoload/v1/upload.
     *
     * @param UploadPrompt $prompt DTO запроса.
     *
     * @return UploadResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function upload(UploadPrompt $prompt): UploadResponse
    {
        /** @var UploadResponse $response */
        $response = $this->request($prompt, UploadResponse::class);

        return $response;
    }
}
