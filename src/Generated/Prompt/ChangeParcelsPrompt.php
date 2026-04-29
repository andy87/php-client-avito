<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * DTO запроса Avito API ChangeParcels.
 */
class ChangeParcelsPrompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/sandbox/changeParcels';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = false;

    protected const FIELD_MAP = ['applications' => 'applications', 'type' => 'type'];

    protected const REQUIRED_FIELDS = ['applications', 'type'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['applications' => [\Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\ChangeParcelsApplication::class]];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const BODY_FIELDS = ['applications', 'type'];

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\ChangeParcelsApplication> Body field applications */
    public array $applications;

    /** @var string Тип заявки.
  
Заявки могут быть следующих типов:
- `changeReceiver` - обновить данные о получателе посылки.
- `extendParcelStorage` - продлить срок хранения посылки.
- `prohibitParcelReceive` - запретить выдачу посылки на ПВЗ вручения.
- `prohibitParcelAcceptance` - запретить прием посылки на  ПВЗ отправки (в разработке).
 */
    public string $type;
}
