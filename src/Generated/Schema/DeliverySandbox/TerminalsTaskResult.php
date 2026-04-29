<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/TerminalsTaskResult.
 */
class TerminalsTaskResult extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['count' => 'count', 'deleted' => 'deleted', 'diff_added' => 'diff_added', 'diff_critical' => 'diff_critical', 'diff_deleted' => 'diff_deleted', 'diff_modified' => 'diff_modified', 'diff_total' => 'diff_total', 'total' => 'total', 'upserted' => 'upserted'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['diff_added', 'diff_critical', 'diff_deleted', 'diff_modified', 'diff_total'];

    protected const CASTS = [];

    /** @var string|null Количество терминалов, которые были успешно загружены */
    public ?string $count = null;

    /** @var string|null Количество удаленных терминалов */
    public ?string $deleted = null;

    /** @var string|null Количество добавленных терминалов (заполняется при статусе pending_approval) */
    public ?string $diff_added = null;

    /** @var string|null Количество критичных изменений (заполняется при статусе pending_approval) */
    public ?string $diff_critical = null;

    /** @var string|null Количество удалённых терминалов (заполняется при статусе pending_approval) */
    public ?string $diff_deleted = null;

    /** @var string|null Количество изменённых терминалов (заполняется при статусе pending_approval) */
    public ?string $diff_modified = null;

    /** @var string|null Общее количество терминалов (заполняется при статусе pending_approval) */
    public ?string $diff_total = null;

    /** @var string|null Количество терминалов активных на тарифе */
    public ?string $total = null;

    /** @var string|null Количество добавленных или обновленных терминалов */
    public ?string $upserted = null;
}
