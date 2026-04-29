<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider\Autoteka;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\GetPreviewPrompt;
use Andy87\ClientsAvito\Generated\Prompt\PostPreviewByExternalItemPrompt;
use Andy87\ClientsAvito\Generated\Prompt\PostPreviewByItemIdPrompt;
use Andy87\ClientsAvito\Generated\Prompt\PostPreviewByRegNumberPrompt;
use Andy87\ClientsAvito\Generated\Prompt\PostPreviewByVinPrompt;
use Andy87\ClientsAvito\Generated\Response\Autoteka\Preview\GetResponse;
use Andy87\ClientsAvito\Generated\Response\Autoteka\Preview\PostByExternalItemResponse;
use Andy87\ClientsAvito\Generated\Response\Autoteka\Preview\PostByItemIdResponse;
use Andy87\ClientsAvito\Generated\Response\Autoteka\Preview\PostByRegNumberResponse;
use Andy87\ClientsAvito\Generated\Response\Autoteka\Preview\PostByVinResponse;

/**
 * Группа методов "preview" раздела Avito API "Автотека".
 */
class PreviewProvider extends BaseAvitoProvider
{
    /**
     * Получение превью по его ID
     * 
     * Возвращает текущий статус сбора информации превью, и краткую инфо по запрашиваемому `VIN`
     * 
     * OperationId: getPreview.
     * HTTP: GET /autoteka/v1/previews/{previewId}.
     *
     * @param GetPreviewPrompt $prompt DTO запроса.
     *
     * @return GetResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function get(GetPreviewPrompt $prompt): GetResponse
    {
        /** @var GetResponse $response */
        $response = $this->request($prompt, GetResponse::class);

        return $response;
    }

    /**
     * Превью по ID объявления другой площадки
     * 
     * Возвращает идентификатор `previewId`, по которому асинхронно с помощью [запроса на получение превью по ID](#operation/getPreview) можно получить результат
     * 
     * OperationId: postPreviewByExternalItem.
     * HTTP: POST /autoteka/v1/request-preview-by-external-item.
     *
     * @param PostPreviewByExternalItemPrompt $prompt DTO запроса.
     *
     * @return PostByExternalItemResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function postByExternalItem(PostPreviewByExternalItemPrompt $prompt): PostByExternalItemResponse
    {
        /** @var PostByExternalItemResponse $response */
        $response = $this->request($prompt, PostByExternalItemResponse::class);

        return $response;
    }

    /**
     * Превью по ID объявления Авито
     * 
     * Возвращает идентификатор `previewId`, по которому асинхронно с помощью [запроса на получение превью по ID](#operation/getPreview) можно получить результат
     * 
     * OperationId: postPreviewByItemId.
     * HTTP: POST /autoteka/v1/request-preview-by-item-id.
     *
     * @param PostPreviewByItemIdPrompt $prompt DTO запроса.
     *
     * @return PostByItemIdResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function postByItemId(PostPreviewByItemIdPrompt $prompt): PostByItemIdResponse
    {
        /** @var PostByItemIdResponse $response */
        $response = $this->request($prompt, PostByItemIdResponse::class);

        return $response;
    }

    /**
     * Превью по государственному номеру
     * 
     * Возвращает идентификатор `previewId`, по которому асинхронно с помощью [запроса на получение превью по ID](#operation/getPreview) можно получить результат
     * 
     * OperationId: postPreviewByRegNumber.
     * HTTP: POST /autoteka/v1/request-preview-by-regnumber.
     *
     * @param PostPreviewByRegNumberPrompt $prompt DTO запроса.
     *
     * @return PostByRegNumberResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function postByRegNumber(PostPreviewByRegNumberPrompt $prompt): PostByRegNumberResponse
    {
        /** @var PostByRegNumberResponse $response */
        $response = $this->request($prompt, PostByRegNumberResponse::class);

        return $response;
    }

    /**
     * Превью по VIN или номеру кузова
     * 
     * Возвращает идентификатор `previewId`, по которому асинхронно с помощью [запроса на получение превью по ID](#operation/getPreview) можно получить результат
     * 
     * OperationId: postPreviewByVin.
     * HTTP: POST /autoteka/v1/previews.
     *
     * @param PostPreviewByVinPrompt $prompt DTO запроса.
     *
     * @return PostByVinResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function postByVin(PostPreviewByVinPrompt $prompt): PostByVinResponse
    {
        /** @var PostByVinResponse $response */
        $response = $this->request($prompt, PostByVinResponse::class);

        return $response;
    }
}
