<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/ChangeParcelsApplication.
 */
class ChangeParcelsApplication extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['id' => 'id', 'parcelID' => 'parcelID', 'receiver' => 'receiver'];

    protected const REQUIRED_FIELDS = ['id', 'parcelID'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['receiver' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\ChangeParcelsClient::class];

    /** @var string Идентификатор заявки Avito
  
Идентификатор заявки - уникальный идентификатор заявки на изменение данных о посылке в формате uuid, который должен быть передан в обратном запросе с результатом исполнения заявки.
 */
    public string $id;

    /** @var string Идентификатор, использованный при регистрации посылки в службе доставки.
 */
    public string $parcelID;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\ChangeParcelsClient|null Schema field receiver */
    public ?\Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\ChangeParcelsClient $receiver = null;
}
