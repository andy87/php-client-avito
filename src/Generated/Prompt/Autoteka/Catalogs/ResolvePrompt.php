<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\Autoteka\Catalogs;

use Andy87\ClientsAvito\Generated\Prompt\CatalogsResolvePrompt as BaseCatalogsResolvePrompt;

/**
 * Класс данных запроса Avito API [POST] /autoteka/v1/catalogs/resolve.
 * 
 * @documentation https://developers.avito.ru/api-catalog/autoteka/documentation#operation/catalogsResolve
 * 
 * @property string|null $Authorization Токен для авторизации
 * @property array<int, array<string, mixed>> $fieldsValueIds Выбранные значения параметров
 */
class ResolvePrompt extends BaseCatalogsResolvePrompt
{
}
