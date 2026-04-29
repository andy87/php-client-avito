<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider\Autoteka;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\GetActivePackagePrompt;
use Andy87\ClientsAvito\Generated\Response\Autoteka\Active\GetPackageResponse;

/**
 * Группа методов "active" раздела Avito API "Автотека".
 */
class ActiveProvider extends BaseAvitoProvider
{
    /**
     * Запрос остатка отчётов пользователя
     * 
     * Возвращает остаток отчётов в текущем пакете пользователя
     * 
     * OperationId: getActivePackage.
     * HTTP: GET /autoteka/v1/packages/active_package.
     *
     * @param GetActivePackagePrompt $prompt DTO запроса.
     *
     * @return GetPackageResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getPackage(GetActivePackagePrompt $prompt): GetPackageResponse
    {
        /** @var GetPackageResponse $response */
        $response = $this->request($prompt, GetPackageResponse::class);

        return $response;
    }
}
