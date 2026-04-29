<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider\Autoteka;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\CatalogsResolvePrompt;
use Andy87\ClientsAvito\Generated\Response\Autoteka\Catalogs\ResolveResponse;

/**
 * Группа методов "catalogs" раздела Avito API "Автотека".
 */
class CatalogsProvider extends BaseAvitoProvider
{
    /**
     * Получение актуальных параметров Автокаталога
     * 
     * Метод для получения возможных параметров для заполнения пользователем.
     * Первый запрос можно сделать без параметров, получить данные и далее, передавая нужные id и valueId в повторном запросе, получить все параметры.
     * 
     * OperationId: catalogsResolve.
     * HTTP: POST /autoteka/v1/catalogs/resolve.
     *
     * @param CatalogsResolvePrompt $prompt DTO запроса.
     *
     * @return ResolveResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function resolve(CatalogsResolvePrompt $prompt): ResolveResponse
    {
        /** @var ResolveResponse $response */
        $response = $this->request($prompt, ResolveResponse::class);

        return $response;
    }
}
