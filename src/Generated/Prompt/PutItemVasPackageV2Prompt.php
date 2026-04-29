<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [PUT] /core/v2/accounts/{user_id}/items/{item_id}/vas_packages.
 * 
 * @documentation https://developers.avito.ru/api-catalog/item/documentation#operation/putItemVasPackageV2
 */
class PutItemVasPackageV2Prompt extends AbstractPrompt
{
    protected const METHOD = 'PUT';

    protected const ENDPOINT = '/core/v2/accounts/{user_id}/items/{item_id}/vas_packages';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const FIELD_MAP = ['package_id' => 'package_id'];

    protected const REQUIRED_FIELDS = ['package_id'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const BODY_FIELDS = ['package_id'];

    /** @var string Идентификатор пакета услуг, возможные варианты значения:
- `x2_1` - применение пакета До 2 раз больше просмотров на 1 день
- `x2_7` - применение пакета До 2 раз больше просмотров на 7 дней
- `x5_1` - применение пакета До 5 раз больше просмотров на 1 день
- `x5_7` - применение пакета До 5 раз больше просмотров на 7 дней
- `x10_1` - применение пакета До 10 раз больше просмотров на 1 день
- `x10_7` - применение пакета До 10 раз больше просмотров на 7 дней

В некоторых регионах и категориях также доступны дополнительные варианты:
- `x15_1` - применение пакета До 15 раз больше просмотров на 1 день
- `x15_7` - применение пакета До 15 раз больше просмотров на 7 дней
- `x20_1` - применение пакета До 20 раз больше просмотров на 1 день
- `x20_7` - применение пакета До 20 раз больше просмотров на 7 дней

Если попытаться применить эти пакеты в недоступных для них регионе и категории, оплата не пройдёт.
 */
    public string $package_id;
}
