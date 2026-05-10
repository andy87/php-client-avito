<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Prompt\DeliverySandbox\Parcel;

use php_client_avito\Generated\Prompt\ChangeParcelResultPrompt as BaseChangeParcelResultPrompt;

/**
 * Класс данных запроса Avito API [POST] /delivery/order/changeParcelResult.
 *
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/ChangeParcelResult
 *
 * @property string $id Идентификатор заявки на изменение посылки
 * @property array<string, mixed>|null $options Body field options
 * @property string|null $reason Причина отклонения заявки (заполняется в случае отклонения).
 * @property string $status Статус обработки заявки
 */
class ChangeResultPrompt extends BaseChangeParcelResultPrompt
{
}
