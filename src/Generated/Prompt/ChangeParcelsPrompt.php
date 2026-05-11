<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt;

use and_y87\PhpClientSdk\Request\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [POST] /sandbox/changeParcels.
 *
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/ChangeParcels
 */
class ChangeParcelsPrompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/sandbox/changeParcels';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const QUERY_PARAMETER_STYLES = [];

    protected const FIELD_MAP = ['applications' => 'applications', 'type' => 'type'];

    protected const REQUIRED_FIELDS = ['applications', 'type'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['applications' => [\and_y87\php_client_avito\Generated\Schema\DeliverySandbox\ChangeParcelsApplication::class]];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const HEADER_FIELDS = [];

    protected const BODY_FIELDS = ['applications', 'type'];

    protected const BODY_ROOT_FIELD = null;

    /** @var array<int, \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\ChangeParcelsApplication> Body field applications */
    public array $applications;

    /** @var string Тип заявки.

Заявки могут быть следующих типов:
- `changeReceiver` - обновить данные о получателе посылки.
- `extendParcelStorage` - продлить срок хранения посылки.
- `prohibitParcelReceive` - запретить выдачу посылки на ПВЗ вручения.
- `prohibitParcelAcceptance` - запретить прием посылки на ПВЗ отправки (в разработке).
- `changeReceiverTerminalOnConfirmed` - обновить ПВЗ вручения.
 */
    public string $type;
}
