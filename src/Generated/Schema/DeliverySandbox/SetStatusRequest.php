<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/SetStatusRequest.
 */
class SetStatusRequest extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['barcode' => 'barcode', 'status' => 'status', 'timestamp' => 'timestamp'];

    protected const REQUIRED_FIELDS = ['status', 'barcode', 'timestamp'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Штрихкод отправления */
    public string $barcode;

    /** @var string Текущий статус отправления в сортировочном центре. Возможные статусы:<br/>
   `DELIVERY_RECEIVE` - Отправление прибыло в сортировочный центр<br/>
   `DELIVERY_SEND`    - Отправление помечено для отправки в службу доставки<br/>
   `RETURN_RECEIVE`   - Отправление прибыло в сортировочный центр (обратное движение)<br/>
   `RETURN_SEND`      - Отправление помечено для отправки продавцу (обратное движение)<br/>
 */
    public string $status;

    /** @var int Временая метка перехода в статус */
    public int $timestamp;
}
