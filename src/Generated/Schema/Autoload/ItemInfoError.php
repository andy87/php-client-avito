<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoload;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoload/ItemInfoError.
 */
class ItemInfoError extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['code' => 'code', 'description' => 'description', 'title' => 'title', 'type' => 'type', 'updated_at' => 'updated_at'];

    protected const REQUIRED_FIELDS = ['code', 'title', 'type', 'description', 'updated_at'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var int Код ошибки или предупреждения */
    public int $code;

    /** @var string Описание ошибки или предупреждения */
    public string $description;

    /** @var string Название ошибки или предупреждения */
    public string $title;

    /** @var string Тип ошибки или предупреждения
  - error – Критическая ошибка, которая влияет на выгрузку: объявление не редактируется или не публикуется
  - warning – Некритическая ошибка, которая в будущем может повлиять на выгрузку или влияет сейчас на необязательный параметр
  - alarm – Предупреждение, которое не влияет на выгрузку
  - info – Информационное сообщение
 */
    public string $type;

    /** @var string Дата актуальности ошибки или предупреждения */
    public string $updated_at;
}
