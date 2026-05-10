<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Prompt;

use Andy87\PhpClientSdk\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [PUT] /core/v1/accounts/{user_id}/items/{item_id}/vas.
 *
 * @documentation https://developers.avito.ru/api-catalog/item/documentation#operation/putItemVas
 */
class PutItemVasPrompt extends AbstractPrompt
{
    protected const METHOD = 'PUT';

    protected const ENDPOINT = '/core/v1/accounts/{user_id}/items/{item_id}/vas';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const QUERY_PARAMETER_STYLES = [];

    protected const FIELD_MAP = ['user_id' => 'user_id', 'item_id' => 'item_id', 'vas_id' => 'vas_id'];

    protected const REQUIRED_FIELDS = ['user_id', 'item_id', 'vas_id'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = ['user_id', 'item_id'];

    protected const QUERY_FIELDS = [];

    protected const HEADER_FIELDS = [];

    protected const BODY_FIELDS = ['vas_id'];

    protected const BODY_ROOT_FIELD = null;

    /** @var int Номер пользователя в Личном кабинете Авито */
    public int $user_id;

    /** @var int Идентификатор объявления на сайте */
    public int $item_id;

    /** @var string Идентификатор услуги, возможные его варианты значения:
- `highlight` — [выделение объявления](https://support.avito.ru/articles/200026858)
- `xl` – [XL-объявление](https://support.avito.ru/articles/685)
 */
    public string $vas_id;
}
