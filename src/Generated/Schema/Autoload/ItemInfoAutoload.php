<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoload;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoload/ItemInfoAutoload.
 */
class ItemInfoAutoload extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['alarm' => 'alarm', 'applied_vas' => 'applied_vas', 'avito_id' => 'avito_id', 'errors' => 'errors', 'event_time' => 'event_time', 'fee_info' => 'fee_info', 'processing_time' => 'processing_time', 'status' => 'status', 'status_detail' => 'status_detail', 'url' => 'url', 'warnings' => 'warnings'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['avito_id', 'fee_info', 'url'];

    protected const CASTS = ['alarm' => [\Andy87\ClientsAvito\Generated\Schema\Autoload\ItemInfoErrorAutoload::class], 'errors' => [\Andy87\ClientsAvito\Generated\Schema\Autoload\ItemInfoErrorAutoload::class], 'warnings' => [\Andy87\ClientsAvito\Generated\Schema\Autoload\ItemInfoErrorAutoload::class]];

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\Autoload\ItemInfoErrorAutoload>|null Ошибки, при которых публикация/обновление происходит, но при этом с объявлением есть проблема, которая требует вмешательства пользователя; публикация изменений, по-возможности, происходит */
    public ?array $alarm = null;

    /** @var array<int, string>|null Список примененных при выгрузке дополнительных услуг
- `premium` — [премиум-объявление](https://support.avito.ru/articles/200026868)
- `vip` — [VIP-объявление](https://support.avito.ru/articles/200026848)
- `pushup` — [поднятие объявления в поиске](https://support.avito.ru/articles/200026828)
- `highlight` — [выделение объявления](https://support.avito.ru/articles/200026858)
- `turbo_sale` - применение пакета [Турбо-продажа](https://support.avito.ru/articles/200026838)
- `quick_sale` - применение пакета [Быстрая продажа](https://support.avito.ru/articles/200026838)
 */
    public ?array $applied_vas = null;

    /** @var int|null Идентификатор объявления на сайте */
    public ?int $avito_id = null;

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\Autoload\ItemInfoErrorAutoload>|null Ошибки, при возникновении которых публикация новых не происходит, уже опубликованные — остаются без изменений, VAS-услуги не применяются, завершенные — не реактивируются */
    public ?array $errors = null;

    /** @var string|null Дата последнего изменения состояния (статуса) выгрузки объявления */
    public ?string $event_time = null;

    /** @var array<string, mixed>|null Информация о платном размещении */
    public ?array $fee_info = null;

    /** @var string|null Дата последнего цикла обработки */
    public ?string $processing_time = null;

    /** @var string|null Статус выгрузки объявления:<br />
`success` - Успешно опубликовано<br />
`problem` - Опубликовано с проблемами<br />
`error` - Не удалось опубликовать<br />
`not_publish` - Не нужно публиковать<br />
`will_publish_later` - Будут опубликованы позднее<br />
`duplicate` - Дубликат объявления<br />
`without_id` - Объявление без идентификатора<br />
`deleted` - Удалено из файла<br />
`unknown` - Возникли проблемы при определении статуса
 */
    public ?string $status = null;

    /** @var string|null Подробный статус выгрузки объявления:
<br />`success_added` - Объявление добавленно на сайт в последний цикл автозагрузки
<br />`success_activated` - Объявление активировано из ранее снятых с публикации или завершенных
<br />`success_activated_updated` - Объявление активировано из ранее снятых с публикации или завершенных и изменено
<br />`success_updated` - Объявление было изменено
<br />`success_skipped` - Объявление в данный цикл автозагрузки без изменений оставлено активным на сайте
<br />`problem_obsolete` - Объявление в XML имеет устаревший формат. [Документация по формату](http://autoload.avito.ru/format/)
<br />`problem_params_critical` - При обработке объявления возникли ошибки, связанные с описанием или значениями параметров. Если ошибки не исправить, то через какое-то время объявление исчезнет с сайта
<br />`problem_params` - При обработке объявления возникли ошибки, связанные с описанием или значениями параметров
<br />`problem_phone` - Проблемы с телефонным номером в контактной информации
<br />`problem_images` - При обработке возникли ошибки размещения фотографий
<br />`problem_vas` - При обработке возникли ошибки активации дополнительных услуг
<br />`problem_other` - Возникли ошибки, отличные от перечисленных
<br />`problem_several` - Возникло несколько разных ошибок, перечисленных выше
<br />`error_fee` - Объявление не опубликовано на сайте из-за проблем с оплатой размещения
<br />`error_params` - Не удалось опубликовать на сайте из-за ошибок, связанных с описанием или значениями параметров
<br />`error_phone` - Не удалось опубликовать из-за проблем с телефонным номером в контактной информации
<br />`error_rejected` - Объявление было отклонено модерацией из-за нарушений правил сайта
<br />`error_blocked` - Объявление было заблокировано модерацией из-за нарушений правил сайта
<br />`error_deleted` - Объявление невозможно обработать из-за того, что ранее объявления с таким ID (в XML-файле) было удалено с сайта
<br />`error_other` - Возникли ошибки, отличные от перечисленных
<br />`error_several` - Возникло несколько разных ошибок, перечисленных выше
<br />`stopped_end_date_complete` - Не опубликовано или снято с публикации по причине истечения срока экспозиции, указанного в XML-файле
<br />`stopped_end_date_error` - При попытке снятия с публикации возникли ошибки
<br />`date_in_future` - Не опубликовано или снято с публикации по причине, что дата начала экспозиции, указанная в XML-файле, еще не наступила
<br />`publish_later` - Не добавлено на сайт из-за ограничения на количество публикуемых за один цикл объявлений. Если вы хотите изменить режим автозагрузки ваших объявлений, обратитесь в Службу поддержки
<br />`linker` - Объявления, похожие на размещенные ранее через Личный кабинет, по которым требуется принять решение: объединить с существующим или опубликовать как новое объявление
<br />`removed_complete` - Объявление снято с публикации (завершенные), т.к. они были удалены из XML-файла
<br />`removed_error` - Ошибки при попытке снятия с публикации
<br />`need_sync` - Объявление ожидает синхронизации с сайтом
<br />`duplicate` - Объявления имеют одинаковое описание
<br />`without_id` - Объявление без идентификатора
 */
    public ?string $status_detail = null;

    /** @var string|null URL объявления на сайте */
    public ?string $url = null;

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\Autoload\ItemInfoErrorAutoload>|null Ошибки, которые, в подавляющем большинстве случаев, информируют, но не требуют вмешательства (никак не влияют на статус обработки) */
    public ?array $warnings = null;
}
