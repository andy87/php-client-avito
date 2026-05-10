<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Prompt\Cpa\Call;

use php_client_avito\Generated\Prompt\GetCallPrompt as BaseGetCallPrompt;

/**
 * Класс данных запроса Avito API [GET] /cpa/v1/call/{call_id}.
 *
 * @documentation https://developers.avito.ru/api-catalog/cpa/documentation#operation/getCall
 *
 * @property string $X_Source Имя сервиса, отправляющего запрос
 * @property int $call_id Идентификатор звонка
 */
class GetPrompt extends BaseGetCallPrompt
{
}
