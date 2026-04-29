<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider\Autoload;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\GetReportsV2Prompt;
use Andy87\ClientsAvito\Generated\Response\Autoload\Reports\GetV2Response;

/**
 * Группа методов "reports" раздела Avito API "Автозагрузка".
 */
class ReportsProvider extends BaseAvitoProvider
{
    /**
     * Список отчётов автозагрузки
     * 
     * По запросу вы получите список отчётов автозагрузки.
     * Они будут отсортированы в порядке убывания: самый свежий отчёт — в начале списка.
     * 
     * 📝 [Напишите нам](https://docs.google.com/forms/d/e/1FAIpQLSdfTHlP6PKtOb08fxD7BaJ0VjtkaLXoRAswhF9gnKvrEyY16g/viewform?usp=sf_link),
     * если в методе вам не хватает каких-либо данных.
     * 
     * OperationId: getReportsV2.
     * HTTP: GET /autoload/v2/reports.
     *
     * @param GetReportsV2Prompt $prompt DTO запроса.
     *
     * @return GetV2Response DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getV2(GetReportsV2Prompt $prompt): GetV2Response
    {
        /** @var GetV2Response $response */
        $response = $this->request($prompt, GetV2Response::class);

        return $response;
    }
}
