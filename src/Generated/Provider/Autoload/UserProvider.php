<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Provider\Autoload;

use and_y87\php_client_avito\BaseAvitoProvider;
use and_y87\php_client_avito\Generated\Prompt\UserDocsNodeFieldsPrompt;
use and_y87\php_client_avito\Generated\Prompt\UserDocsTreePrompt;
use and_y87\php_client_avito\Generated\Response\Autoload\User\DocsNodeFieldsResponse;
use and_y87\php_client_avito\Generated\Response\Autoload\User\DocsTreeResponse;

/**
 * Группа методов "user" раздела Avito API "Автозагрузка".
 */
class UserProvider extends BaseAvitoProvider
{
    /**
     * Получения полей категории
     *
     * Метод позволяет получить поля конкретной категории и их параметры, зависимости полей, возможные значения и их типы, предупреждения (например, когда поле станет обязательным) и ссылки на каталоги значений.
     *
     * 📝 [Напишите нам](https://docs.google.com/forms/d/e/1FAIpQLSdfTHlP6PKtOb08fxD7BaJ0VjtkaLXoRAswhF9gnKvrEyY16g/viewform?usp=sf_link), если в методе вам не хватает каких-либо данных.
     *
     * OperationId: userDocsNodeFields.
     * HTTP: GET /autoload/v1/user-docs/node/{node_slug}/fields.
     *
     * @param UserDocsNodeFieldsPrompt $prompt DTO запроса.
     *
     * @return DocsNodeFieldsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function docsNodeFields(UserDocsNodeFieldsPrompt $prompt): DocsNodeFieldsResponse
    {
        /** @var DocsNodeFieldsResponse $response */
        $response = $this->request($prompt, DocsNodeFieldsResponse::class);

        return $response;
    }

    /**
     * Получение дерева категорий
     *
     * Метод позволяет получить дерево категорий Авито в виде массива.
     * 📝 [Напишите нам](https://docs.google.com/forms/d/e/1FAIpQLSdfTHlP6PKtOb08fxD7BaJ0VjtkaLXoRAswhF9gnKvrEyY16g/viewform?usp=sf_link), если в методе вам не хватает каких-либо данных.
     *
     * OperationId: userDocsTree.
     * HTTP: GET /autoload/v1/user-docs/tree.
     *
     * @param UserDocsTreePrompt $prompt DTO запроса.
     *
     * @return DocsTreeResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function docsTree(UserDocsTreePrompt $prompt): DocsTreeResponse
    {
        /** @var DocsTreeResponse $response */
        $response = $this->request($prompt, DocsTreeResponse::class);

        return $response;
    }
}
