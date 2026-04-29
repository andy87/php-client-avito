<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\Item\Item;

use Andy87\ClientsAvito\Generated\Prompt\PutItemVasPrompt as BasePutItemVasPrompt;

/**
 * Класс данных запроса Avito API [PUT] /core/v1/accounts/{user_id}/items/{item_id}/vas.
 * 
 * @documentation https://developers.avito.ru/api-catalog/item/documentation#operation/putItemVas
 * 
 * @property string $vas_id Идентификатор услуги, возможные его варианты значения: - `highlight` — [выделение объявления](https://support.avito.ru/articles/200026858) - `xl` – [XL-объявление](https://support.avito.ru/articles/685)
 */
class PutVasPrompt extends BasePutItemVasPrompt
{
}
