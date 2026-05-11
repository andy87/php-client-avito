<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt;

use and_y87\PhpClientSdk\Request\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [POST] /cancelAnnouncement.
 *
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/CancelAnnouncement3PL
 */
class CancelAnnouncement3PLPrompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/cancelAnnouncement';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const QUERY_PARAMETER_STYLES = [];

    protected const FIELD_MAP = ['announcementID' => 'announcementID', 'reason' => 'reason'];

    protected const REQUIRED_FIELDS = ['announcementID'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['announcementID' => \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\UUID::class];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const HEADER_FIELDS = [];

    protected const BODY_FIELDS = ['announcementID', 'reason'];

    protected const BODY_ROOT_FIELD = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\UUID Body field announcementID */
    public \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\UUID $announcementID;

    /** @var string|null Причина омены анонса */
    public ?string $reason = null;
}
