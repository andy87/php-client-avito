<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoload;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoload/ItemInfoReportAutoloadV2.
 */
class ItemInfoReportAutoloadV2 extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['ad_id' => 'ad_id', 'applied_vas' => 'applied_vas', 'avito_date_end' => 'avito_date_end', 'avito_id' => 'avito_id', 'avito_status' => 'avito_status', 'feed_name' => 'feed_name', 'messages' => 'messages', 'section' => 'section', 'url' => 'url'];

    protected const REQUIRED_FIELDS = ['section', 'ad_id', 'avito_id', 'url', 'messages', 'avito_date_end', 'avito_status'];

    protected const NULLABLE_FIELDS = ['avito_date_end', 'avito_id', 'avito_status', 'feed_name', 'url'];

    protected const CASTS = ['applied_vas' => [\Andy87\ClientsAvito\Generated\Schema\Autoload\ItemInfoVas::class], 'messages' => [\Andy87\ClientsAvito\Generated\Schema\Autoload\ItemInfoError::class]];

    /** @var string Идентификатор объявления из файла ([параметр Id](https://autoload.avito.ru/format/realty/#Id))
 */
    public string $ad_id;

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\Autoload\ItemInfoVas>|null Список примененных в конкретной выгрузке [услуг продвижения](https://support.avito.ru/partitions/131) */
    public ?array $applied_vas = null;

    /** @var string|null Дата окончания оплаченного периода размещения объявления */
    public ?string $avito_date_end;

    /** @var int|null Идентификатор объявления на Авито */
    public ?int $avito_id;

    /** @var string|null Статус объявления на Авито
  - active – Объявление активно
  - old – Срок размещения объявления истёк
  - blocked – Объявление заблокировано
  - rejected – Объявление отклонено для исправления нарушений
  - archived – Объявление находится в архиве
  - removed – Объявление удалено навсегда
 */
    public ?string $avito_status;

    /** @var string|null Название фида из которого был взято объявление */
    public ?string $feed_name = null;

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\Autoload\ItemInfoError> Ошибки или предупреждения по объявлению */
    public array $messages;

    /** @var array<string, mixed> Раздел отчёта, в котором находится объявление — то есть результат обработки объявления в конкретной выгрузке */
    public array $section;

    /** @var string|null Ссылка на объявление на Авито */
    public ?string $url;
}
