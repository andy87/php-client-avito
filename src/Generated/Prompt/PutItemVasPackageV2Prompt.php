<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt;

use Andy87\PhpClientSdk\Prompt\AbstractPrompt;

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

    protected const QUERY_PARAMETER_STYLES = [];

    protected const FIELD_MAP = ['user_id' => 'user_id', 'item_id' => 'item_id', 'package_id' => 'package_id'];

    protected const REQUIRED_FIELDS = ['user_id', 'item_id', 'package_id'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = ['user_id', 'item_id'];

    protected const QUERY_FIELDS = [];

    protected const HEADER_FIELDS = [];

    protected const BODY_FIELDS = ['package_id'];

    protected const BODY_ROOT_FIELD = null;

    /** @var int Номер пользователя в Личном кабинете Авито */
    public int $user_id;

    /** @var int Идентификатор объявления на сайте */
    public int $item_id;

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
