<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\Ratings;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito ratings/ReviewAnswer.
 */
class ReviewAnswer extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['createdAt' => 'createdAt', 'id' => 'id', 'reject_reasons' => 'reject_reasons', 'status' => 'status', 'text' => 'text'];

    protected const REQUIRED_FIELDS = ['id', 'text', 'status', 'createdAt'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['reject_reasons' => [\php_client_avito\Generated\Schema\Ratings\RejectReason::class]];

    /** @var int Unix TimeStamp создания ответа */
    public int $createdAt;

    /** @var int ID ответа */
    public int $id;

    /** @var array<int, \php_client_avito\Generated\Schema\Ratings\RejectReason>|null Список причин отклонения */
    public ?array $reject_reasons = null;

    /** @var string Статус ответа:
  * `moderation` - на модерации
  * `published` - опубликован
  * `rejected` - отклонен
 */
    public string $status;

    /** @var string Текст ответа */
    public string $text;
}
