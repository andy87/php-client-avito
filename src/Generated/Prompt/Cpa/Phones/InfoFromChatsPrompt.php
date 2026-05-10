<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Prompt\Cpa\Phones;

use php_client_avito\Generated\Prompt\PhonesInfoFromChatsPrompt as BasePhonesInfoFromChatsPrompt;

/**
 * Класс данных запроса Avito API [POST] /cpa/v1/phonesInfoFromChats.
 *
 * @documentation https://developers.avito.ru/api-catalog/cpa/documentation#operation/phonesInfoFromChats
 *
 * @property string $X_Source Имя сервиса, отправляющего запрос
 * @property string $dateTimeFrom Время с которого начинается поиск
 * @property int $limit Body field limit
 * @property int $offset Body field offset
 */
class InfoFromChatsPrompt extends BasePhonesInfoFromChatsPrompt
{
}
