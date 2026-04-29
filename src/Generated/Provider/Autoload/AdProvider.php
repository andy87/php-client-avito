<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider\Autoload;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\GetAdIdsByAvitoIdsPrompt;
use Andy87\ClientsAvito\Generated\Response\Autoload\Ad\GetIdsByAvitoIdsResponse;

/**
 * Группа методов "ad" раздела Avito API "Автозагрузка".
 */
class AdProvider extends BaseAvitoProvider
{
    /**
     * ID объявлений из файла
     * 
     * Метод позволяет получить идентификаторы (ID) объявлений из файла автозагрузки по ID объявлений на Авито.
     * 
     * 📝 [Напишите нам](https://docs.google.com/forms/d/e/1FAIpQLSdfTHlP6PKtOb08fxD7BaJ0VjtkaLXoRAswhF9gnKvrEyY16g/viewform?usp=sf_link),
     * если в методе вам не хватает каких-либо данных.
     * 
     * OperationId: getAdIdsByAvitoIds.
     * HTTP: GET /autoload/v2/items/ad_ids.
     *
     * @param GetAdIdsByAvitoIdsPrompt $prompt DTO запроса.
     *
     * @return GetIdsByAvitoIdsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getIdsByAvitoIds(GetAdIdsByAvitoIdsPrompt $prompt): GetIdsByAvitoIdsResponse
    {
        /** @var GetIdsByAvitoIdsResponse $response */
        $response = $this->request($prompt, GetIdsByAvitoIdsResponse::class);

        return $response;
    }
}
