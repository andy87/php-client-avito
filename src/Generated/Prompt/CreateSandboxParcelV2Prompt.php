<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [POST] /delivery-sandbox/v2/createParcel.
 * 
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/CreateSandboxParcelV2
 */
class CreateSandboxParcelV2Prompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/delivery-sandbox/v2/createParcel';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const FIELD_MAP = ['items' => 'items', 'options' => 'options', 'receiver' => 'receiver', 'sender' => 'sender', 'tags' => 'tags'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['items' => [\Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateSandboxParcelItem::class], 'options' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateSandboxV2Options::class];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const BODY_FIELDS = ['items', 'options', 'receiver', 'sender', 'tags'];

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateSandboxParcelItem>|null Body field items */
    public ?array $items = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateSandboxV2Options|null Body field options */
    public ?\Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateSandboxV2Options $options = null;

    /** @var array<string, mixed>|null Body field receiver */
    public ?array $receiver = null;

    /** @var array<string, mixed>|null Body field sender */
    public ?array $sender = null;

    /** @var array<int, string>|null Body field tags */
    public ?array $tags = null;
}
