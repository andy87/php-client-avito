<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Cpa;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito cpa/OpenAPIPhonesInfoFromChatsOut.
 */
class OpenAPIPhonesInfoFromChatsOut extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['date' => 'date', 'group' => 'group', 'id' => 'id', 'phone_number' => 'phone_number', 'pricePenny' => 'pricePenny', 'url' => 'url'];

    protected const REQUIRED_FIELDS = ['id', 'date', 'pricePenny', 'group', 'url'];

    protected const NULLABLE_FIELDS = ['phone_number'];

    protected const CASTS = [];

    /** @var string Время отправки сообщения */
    public string $date;

    /** @var string Прайсинговая группа объявления */
    public string $group;

    /** @var int ID ЦД */
    public int $id;

    /** @var string|null Номер телефона из сообщения */
    public ?string $phone_number = null;

    /** @var int Цена ЦД в копейках */
    public int $pricePenny;

    /** @var string URL до картинки с превью */
    public string $url;
}
