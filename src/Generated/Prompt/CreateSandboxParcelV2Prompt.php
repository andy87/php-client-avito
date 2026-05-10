<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt;

use and_y87\PhpClientSdk\Prompt\AbstractPrompt;

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

    protected const QUERY_PARAMETER_STYLES = [];

    protected const FIELD_MAP = ['items' => 'items', 'options' => 'options', 'receiver' => 'receiver', 'sender' => 'sender', 'tags' => 'tags'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['items' => [\and_y87\php_client_avito\Generated\Schema\DeliverySandbox\CreateSandboxParcelItem::class], 'options' => \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\CreateSandboxV2Options::class];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const HEADER_FIELDS = [];

    protected const BODY_FIELDS = ['items', 'options', 'receiver', 'sender', 'tags'];

    protected const BODY_ROOT_FIELD = null;

    /** @var array<int, \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\CreateSandboxParcelItem>|null Body field items */
    public ?array $items = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\CreateSandboxV2Options|null Body field options */
    public ?\and_y87\php_client_avito\Generated\Schema\DeliverySandbox\CreateSandboxV2Options $options = null;

    /** @var array<string, mixed>|null Body field receiver */
    public ?array $receiver = null;

    /** @var array<string, mixed>|null Body field sender */
    public ?array $sender = null;

    /** @var array<int, string>|null Body field tags */
    public ?array $tags = null;
}
