<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt\Cpa\Call;

use and_y87\php_client_avito\Generated\Prompt\GetCallByIdV2Prompt as BaseGetCallByIdV2Prompt;

/**
 * Класс данных запроса Avito API [POST] /cpa/v2/callById.
 *
 * @documentation https://developers.avito.ru/api-catalog/cpa/documentation#operation/getCallByIdV2
 *
 * @property string $X_Source Имя сервиса, отправляющего запрос
 * @property int $callId Идентификатор звонка
 */
class GetByIdV2Prompt extends BaseGetCallByIdV2Prompt
{
}
