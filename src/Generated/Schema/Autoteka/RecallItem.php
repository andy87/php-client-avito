<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoteka;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/RecallItem.
 */
class RecallItem extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['complaintCode' => 'complaintCode', 'completeInfo' => 'completeInfo', 'completenessStatus' => 'completenessStatus', 'createdAt' => 'createdAt', 'link' => 'link', 'organization' => 'organization', 'reason' => 'reason', 'recommendation' => 'recommendation'];

    protected const REQUIRED_FIELDS = ['createdAt', 'organization', 'reason', 'recommendation', 'link'];

    protected const NULLABLE_FIELDS = ['complaintCode', 'completeInfo', 'link', 'recommendation'];

    protected const CASTS = [];

    /** @var string|null Код отзывной */
    public ?string $complaintCode = null;

    /** @var array<string, mixed>|null Schema field completeInfo */
    public ?array $completeInfo = null;

    /** @var bool|null Флаг прохождения отзывной кампании */
    public ?bool $completenessStatus = null;

    /** @var string Дата создания */
    public string $createdAt;

    /** @var string|null Ссылка */
    public ?string $link;

    /** @var string Организация */
    public string $organization;

    /** @var string Причина */
    public string $reason;

    /** @var string|null Рекомендация */
    public ?string $recommendation;
}
