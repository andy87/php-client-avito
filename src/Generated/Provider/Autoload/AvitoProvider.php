<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider\Autoload;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\GetAvitoIdsByAdIdsPrompt;
use Andy87\ClientsAvito\Generated\Response\Autoload\Avito\GetIdsByAdIdsResponse;

/**
 * Группа методов "avito" раздела Avito API "Автозагрузка".
 */
class AvitoProvider extends BaseAvitoProvider
{
    /**
     * ID объявлений на Авито
     * 
     * Метод позволяет получить идентификаторы (ID) объявлений на Авито по идентификаторам объявлений из файла автозагрузки.
     * 
     * 📝 [Напишите нам](https://docs.google.com/forms/d/e/1FAIpQLSdfTHlP6PKtOb08fxD7BaJ0VjtkaLXoRAswhF9gnKvrEyY16g/viewform?usp=sf_link),
     * если в методе вам не хватает каких-либо данных.
     * 
     * OperationId: getAvitoIdsByAdIds.
     * HTTP: GET /autoload/v2/items/avito_ids.
     *
     * @param GetAvitoIdsByAdIdsPrompt $prompt DTO запроса.
     *
     * @return GetIdsByAdIdsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getIdsByAdIds(GetAvitoIdsByAdIdsPrompt $prompt): GetIdsByAdIdsResponse
    {
        /** @var GetIdsByAdIdsResponse $response */
        $response = $this->request($prompt, GetIdsByAdIdsResponse::class);

        return $response;
    }
}
