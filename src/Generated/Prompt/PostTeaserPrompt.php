<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * DTO запроса Avito API postTeaser.
 */
class PostTeaserPrompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/autoteka/v1/teasers';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const FIELD_MAP = ['Authorization' => 'Authorization', 'vehicleId' => 'vehicleId'];

    protected const REQUIRED_FIELDS = ['vehicleId'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const BODY_FIELDS = ['vehicleId'];

    /** @var string|null Токен для авторизации */
    public ?string $Authorization = null;

    /** @var string Идентификатор запрашиваемого авто (vin/frame). */
    public string $vehicleId;
}
