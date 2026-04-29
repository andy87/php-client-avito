<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider\Autoload;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\GetAutoloadItemsInfoV2Prompt;
use Andy87\ClientsAvito\Generated\Response\Autoload\Autoload\GetItemsInfoV2Response;

/**
 * Группа методов "autoload" раздела Avito API "Автозагрузка".
 */
class AutoloadProvider extends BaseAvitoProvider
{
    /**
     * Объявления по ID в автозагрузке
     * 
     * По запросу API отдаст данные по конкретным объявлениям.
     * 
     * 📝 [Напишите нам](https://docs.google.com/forms/d/e/1FAIpQLSdfTHlP6PKtOb08fxD7BaJ0VjtkaLXoRAswhF9gnKvrEyY16g/viewform?usp=sf_link),
     * если в методе вам не хватает каких-либо данных.
     * 
     * OperationId: getAutoloadItemsInfoV2.
     * HTTP: GET /autoload/v2/reports/items.
     *
     * @param GetAutoloadItemsInfoV2Prompt $prompt DTO запроса.
     *
     * @return GetItemsInfoV2Response DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getItemsInfoV2(GetAutoloadItemsInfoV2Prompt $prompt): GetItemsInfoV2Response
    {
        /** @var GetItemsInfoV2Response $response */
        $response = $this->request($prompt, GetItemsInfoV2Response::class);

        return $response;
    }
}
