<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Prompt;

use Andy87\PhpClientSdk\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [POST] /delivery-sandbox/v1/createAnnouncement.
 *
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/v1createAnnouncement
 */
class V1createAnnouncementPrompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/delivery-sandbox/v1/createAnnouncement';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const QUERY_PARAMETER_STYLES = [];

    protected const FIELD_MAP = ['announcementID' => 'announcementID', 'announcementType' => 'announcementType', 'barcode' => 'barcode', 'date' => 'date', 'options' => 'options', 'packages' => 'packages', 'receiver' => 'receiver', 'sender' => 'sender'];

    protected const REQUIRED_FIELDS = ['announcementID', 'announcementType', 'barcode', 'date', 'options', 'packages', 'receiver', 'sender'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['options' => \php_client_avito\Generated\Schema\DeliverySandbox\SandboxCreateAnnouncementOptions::class, 'packages' => [\php_client_avito\Generated\Schema\DeliverySandbox\SandboxCreateAnnouncementPackage::class], 'receiver' => \php_client_avito\Generated\Schema\DeliverySandbox\SandboxCreateAnnouncementParticipant::class, 'sender' => \php_client_avito\Generated\Schema\DeliverySandbox\SandboxCreateAnnouncementParticipant::class];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const HEADER_FIELDS = [];

    protected const BODY_FIELDS = ['announcementID', 'announcementType', 'barcode', 'date', 'options', 'packages', 'receiver', 'sender'];

    protected const BODY_ROOT_FIELD = null;

    /** @var string Уникальный идентификатор анонса UUID V4. */
    public string $announcementID;

    /** @var string Тип анонса. */
    public string $announcementType;

    /** @var string Штрихкод анонса. */
    public string $barcode;

    /** @var string Дата и время создания анонса (UTC). */
    public string $date;

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\SandboxCreateAnnouncementOptions Body field options */
    public \php_client_avito\Generated\Schema\DeliverySandbox\SandboxCreateAnnouncementOptions $options;

    /** @var array<int, \php_client_avito\Generated\Schema\DeliverySandbox\SandboxCreateAnnouncementPackage> Список грузомест. */
    public array $packages;

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\SandboxCreateAnnouncementParticipant Body field receiver */
    public \php_client_avito\Generated\Schema\DeliverySandbox\SandboxCreateAnnouncementParticipant $receiver;

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\SandboxCreateAnnouncementParticipant Body field sender */
    public \php_client_avito\Generated\Schema\DeliverySandbox\SandboxCreateAnnouncementParticipant $sender;
}
