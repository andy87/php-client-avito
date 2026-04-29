<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider\Job;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\ResumesGetPrompt;
use Andy87\ClientsAvito\Generated\Response\Job\Resumes\GetResponse;

/**
 * Группа методов "resumes" раздела Avito API "Авито.Работа".
 */
class ResumesProvider extends BaseAvitoProvider
{
    /**
     * Поиск резюме
     * 
     * OperationId: resumesGet.
     * HTTP: GET /job/v1/resumes/.
     *
     * @param ResumesGetPrompt $prompt DTO запроса.
     *
     * @return GetResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function get(ResumesGetPrompt $prompt): GetResponse
    {
        /** @var GetResponse $response */
        $response = $this->request($prompt, GetResponse::class);

        return $response;
    }
}
