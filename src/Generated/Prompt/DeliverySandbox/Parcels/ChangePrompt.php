<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt\DeliverySandbox\Parcels;

use and_y87\php_client_avito\Generated\Prompt\ChangeParcelsPrompt as BaseChangeParcelsPrompt;

/**
 * Класс данных запроса Avito API [POST] /sandbox/changeParcels.
 *
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/ChangeParcels
 *
 * @property array<int, \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\ChangeParcelsApplication> $applications Body field applications
 * @property string $type Тип заявки. Заявки могут быть следующих типов: - `changeReceiver` - обновить данные о получателе посылки. - `extendParcelStorage` - продлить срок хранения посылки. - `prohibitParcelReceive` - запретить выдачу посылки на ПВЗ вручения. - `prohibitParcelAcceptance` - запретить прием посылки на ПВЗ отправки (в разработке). - `changeReceiverTerminalOnConfirmed` - обновить ПВЗ вручения.
 */
class ChangePrompt extends BaseChangeParcelsPrompt
{
}
