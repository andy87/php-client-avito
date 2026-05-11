<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt;

use and_y87\PhpClientSdk\Request\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [GET] /core/v1/items.
 *
 * @documentation https://developers.avito.ru/api-catalog/item/documentation#operation/getItemsInfo
 */
class GetItemsInfoPrompt extends AbstractPrompt
{
    protected const METHOD = 'GET';

    protected const ENDPOINT = '/core/v1/items';

    protected const CONTENT_TYPE = null;

    protected const AUTHORIZATION_REQUIRED = true;

    protected const QUERY_PARAMETER_STYLES = ['per_page' => ['style' => 'form', 'explode' => true], 'page' => ['style' => 'form', 'explode' => true], 'status' => ['style' => 'form', 'explode' => true], 'updatedAtFrom' => ['style' => 'form', 'explode' => true], 'category' => ['style' => 'form', 'explode' => true]];

    protected const FIELD_MAP = ['per_page' => 'per_page', 'page' => 'page', 'status' => 'status', 'updatedAtFrom' => 'updatedAtFrom', 'category' => 'category'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = ['per_page', 'page', 'status', 'updatedAtFrom', 'category'];

    protected const HEADER_FIELDS = [];

    protected const BODY_FIELDS = [];

    protected const BODY_ROOT_FIELD = null;

    /** @var int|null Количество записей на странице (целое число больше 0 и меньше 100) */
    public ?int $per_page = null;

    /** @var int|null Номер страницы (целое число больше 0) */
    public ?int $page = null;

    /** @var string|null Статус объявления на сайте (можно указать несколько значений через запятую) */
    public ?string $status = null;

    /** @var string|null Фильтр больше либо равно по дате обновления/редактирования объявления в формате YYYY-MM-DD */
    public ?string $updatedAtFrom = null;

    /** @var int|null Идентификатор категории объявления</br> см. возможные варианты категорий в [ справочнике ](https://www.avito.st/s/openapi/catalog-categories.xml)
 */
    public ?int $category = null;
}
