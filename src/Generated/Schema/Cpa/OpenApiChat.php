<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Cpa;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito cpa/OpenApiChat.
 */
class OpenApiChat extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['actionId' => 'actionId', 'channelId' => 'channelId', 'contactType' => 'contactType', 'date' => 'date', 'group' => 'group', 'message' => 'message', 'messageId' => 'messageId', 'pricePenny' => 'pricePenny', 'status' => 'status', 'targetChatType' => 'targetChatType'];

    protected const REQUIRED_FIELDS = ['actionId', 'channelId', 'messageId', 'message', 'date', 'pricePenny', 'status', 'group', 'contactType', 'targetChatType'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var int ID ЦД */
    public int $actionId;

    /** @var string ID канала чата */
    public string $channelId;

    /** @var string Тип контакта (email/phone/nick/other) */
    public string $contactType;

    /** @var string Время отправки сообщения */
    public string $date;

    /** @var string Прайсинговая группа объявления */
    public string $group;

    /** @var string Текст сообщения */
    public string $message;

    /** @var string ID сообщения */
    public string $messageId;

    /** @var int Цена ЦД в копейках */
    public int $pricePenny;

    /** @var string Статус ЦД */
    public string $status;

    /** @var string Тип целевого чата (Контакты/Cделка/Переключения) */
    public string $targetChatType;
}
