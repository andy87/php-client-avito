<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autostrategy;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autostrategy/Campaign.
 */
class Campaign extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['balance' => 'balance', 'budget' => 'budget', 'campaignId' => 'campaignId', 'campaignType' => 'campaignType', 'createTime' => 'createTime', 'description' => 'description', 'finishTime' => 'finishTime', 'itemsCount' => 'itemsCount', 'startTime' => 'startTime', 'statusId' => 'statusId', 'title' => 'title', 'updateTime' => 'updateTime', 'userId' => 'userId', 'version' => 'version'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var int|null Оставшиеся средства от всего бюджета на продвижение кампании */
    public ?int $balance = null;

    /** @var int|null Бюджет кампании в рублях */
    public ?int $budget = null;

    /** @var int|null Идентификатор кампании */
    public ?int $campaignId = null;

    /** @var string|null Тип кампании. Возможные типы:<br/> `AS` - Автостратегия. Cтратегия расчитана на определенное количество автомобилей, которые находятся в продаже<br/> `AP` - Автопилот. Cтратегия расчитана на все автомобили, которые находятся в продаже<br/> */
    public ?string $campaignType = null;

    /** @var string|null Время создания кампании */
    public ?string $createTime = null;

    /** @var string|null Новое описание кампании */
    public ?string $description = null;

    /** @var string|null Время окончания кампании */
    public ?string $finishTime = null;

    /** @var int|null Количество объявлений, которые продвигаются с помощью данной кампании */
    public ?int $itemsCount = null;

    /** @var string|null Время начала кампании */
    public ?string $startTime = null;

    /** @var int|null Статусы кампании для выборки. Возможные статусы:<br/> `0` - Черновик, дата старта сегодня или раньше, денег на балансе нет<br/> `1` - Активная кампания, участвует в аукционе<br/> `2` - Кампания приостановлена<br/> `3` - Кампания удалена<br/> `4` - Кампания остановлена<br/> `5` - Кампания запланирована, дата старта завтра или позже, на балансе есть деньги<br/> */
    public ?int $statusId = null;

    /** @var string|null Новое название кампании */
    public ?string $title = null;

    /** @var string|null Время последнего обновления кампании */
    public ?string $updateTime = null;

    /** @var int|null Идентификатор пользователя-владельца кампании */
    public ?int $userId = null;

    /** @var int|null Текущая версия кампании */
    public ?int $version = null;
}
