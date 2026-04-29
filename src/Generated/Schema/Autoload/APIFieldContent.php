<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoload;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoload/APIFieldContent.
 */
class APIFieldContent extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['data_type' => 'data_type', 'defaultValue' => 'default', 'dependencies' => 'dependencies', 'dependencies_text' => 'dependencies_text', 'field_type' => 'field_type', 'is_catalog' => 'is_catalog', 'name_in_catalog' => 'name_in_catalog', 'required' => 'required', 'required_by_dependency' => 'required_by_dependency', 'values' => 'values', 'values_link_json' => 'values_link_json', 'values_link_xml' => 'values_link_xml', 'values_range' => 'values_range', 'warnings' => 'warnings'];

    protected const REQUIRED_FIELDS = ['field_type', 'data_type', 'required', 'required_by_dependency'];

    protected const NULLABLE_FIELDS = ['name_in_catalog', 'values_link_json', 'values_link_xml', 'warnings'];

    protected const CASTS = ['defaultValue' => \Andy87\ClientsAvito\Generated\Schema\Autoload\FieldValue::class, 'dependencies' => [\Andy87\ClientsAvito\Generated\Schema\Autoload\APIDependency::class], 'values' => [\Andy87\ClientsAvito\Generated\Schema\Autoload\FieldValue::class], 'values_range' => \Andy87\ClientsAvito\Generated\Schema\Autoload\FieldValueRange::class, 'warnings' => [\Andy87\ClientsAvito\Generated\Schema\Autoload\FieldWarning::class]];

    /** @var string Тип данных в поле. */
    public string $data_type;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Autoload\FieldValue|null Schema field default */
    public ?\Andy87\ClientsAvito\Generated\Schema\Autoload\FieldValue $defaultValue = null;

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\Autoload\APIDependency>|null Список зависимостей одного поля от других. Информация в этих объектах нужна для определения, какое именно правило заполнения поля применить. */
    public ?array $dependencies = null;

    /** @var array<int, string>|null Текстовое представление описания зависимостей поля. */
    public ?array $dependencies_text = null;

    /** @var string Тип поля. 
- input означает, что поле может быть заполнено произвольным значением.
- select означает, что поле может принимать одно из заданных значений.   Заданные значения указаны в поле values или доступны по ссылке.
- checkbox означает, что поле может принимать одно или несколько заданных значений. Заданные значения указаны в поле values или доступны по ссылке.
 */
    public string $field_type;

    /** @var bool|null Являются ли значения поля каталожными.
 */
    public ?bool $is_catalog = null;

    /** @var string|null Название поля в каталоге.
 */
    public ?string $name_in_catalog = null;

    /** @var bool Признак обязательности поля */
    public bool $required;

    /** @var bool Признак того, что поле может быть обязательным в зависимости от значения другого поля. Чтобы понять, есть ли зависимость, надо смотреть содержание атрибута dependencies. */
    public bool $required_by_dependency;

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\Autoload\FieldValue>|null Список возможных значений для поля. */
    public ?array $values = null;

    /** @var string|null Ссылка для получения списка полей в формате json. Структура значений по этой ссылке строго определена. Иногда бывает так, что ссылки нет.
 */
    public ?string $values_link_json = null;

    /** @var string|null Ссылка для получения списка полей в формате xml. Нет строгого формата значений по этой ссылке. Иногда бывает так, что ссылки нет, — вместо неё отображается атрибут values.
 */
    public ?string $values_link_xml = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Autoload\FieldValueRange|null Schema field values_range */
    public ?\Andy87\ClientsAvito\Generated\Schema\Autoload\FieldValueRange $values_range = null;

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\Autoload\FieldWarning>|null Schema field warnings */
    public ?array $warnings = null;
}
