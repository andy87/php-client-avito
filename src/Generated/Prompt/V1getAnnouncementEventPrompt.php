<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [POST] /delivery-sandbox/v1/getAnnouncementEvent.
 * 
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/v1getAnnouncementEvent
 */
class V1getAnnouncementEventPrompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/delivery-sandbox/v1/getAnnouncementEvent';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const FIELD_MAP = ['announcementID' => 'announcementID'];

    protected const REQUIRED_FIELDS = ['announcementID'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const BODY_FIELDS = ['announcementID'];

    /** @var string Уникальный идентификатор анонса UUID V4. */
    public string $announcementID;
}
