<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoload;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoload/ItemInfoAutoloadV2.
 */
class ItemInfoAutoloadV2 extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['ad_id' => 'ad_id', 'avito_date_end' => 'avito_date_end', 'avito_id' => 'avito_id', 'avito_status' => 'avito_status', 'fee_info' => 'fee_info', 'messages' => 'messages', 'processing_time' => 'processing_time', 'section' => 'section', 'url' => 'url'];

    protected const REQUIRED_FIELDS = ['ad_id', 'avito_id', 'url', 'messages', 'fee_info', 'processing_time', 'avito_date_end', 'avito_status'];

    protected const NULLABLE_FIELDS = ['avito_date_end', 'avito_id', 'avito_status', 'fee_info', 'processing_time', 'url'];

    protected const CASTS = ['messages' => [\Andy87\ClientsAvito\Generated\Schema\Autoload\ItemInfoError::class]];

    /** @var string Идентификатор объявления из файла ([параметр Id](https://autoload.avito.ru/format/realty/#Id))
 */
    public string $ad_id;

    /** @var string|null Дата окончания оплаченного периода размещения объявления */
    public ?string $avito_date_end;

    /** @var int|null Идентификатор объявления на Авито */
    public ?int $avito_id;

    /** @var string|null Статус объявления на Авито
  - active – Объявление активно
  - old – Срок размещения объявления истёек
  - blocked – Объявление заблокировано
  - rejected – Объявление отклонено для исправления нарушений
  - archived – Объявление находится в Архиве
  - removed – Объявление удалено навсегда
 */
    public ?string $avito_status;

    /** @var array<string, mixed>|null Информация о списании за размещение объявления */
    public ?array $fee_info;

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\Autoload\ItemInfoError> Ошибки или предупреждения по объявлению */
    public array $messages;

    /** @var string|null Дата и время последней обработки объявления */
    public ?string $processing_time;

    /** @var array<string, mixed>|null Раздел отчёта, в котором находится объявление — то есть результат обработки объявления в последней выгрузке */
    public ?array $section = null;

    /** @var string|null Ссылка на объявление на Авито */
    public ?string $url;
}
