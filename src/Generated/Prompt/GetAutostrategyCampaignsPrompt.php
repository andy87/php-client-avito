<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [POST] /autostrategy/v1/campaigns.
 * 
 * @documentation https://developers.avito.ru/api-catalog/autostrategy/documentation#operation/getAutostrategyCampaigns
 */
class GetAutostrategyCampaignsPrompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/autostrategy/v1/campaigns';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const FIELD_MAP = ['filter' => 'filter', 'limit' => 'limit', 'offset' => 'offset', 'orderBy' => 'orderBy', 'statusId' => 'statusId'];

    protected const REQUIRED_FIELDS = ['limit'];

    protected const NULLABLE_FIELDS = ['filter'];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const BODY_FIELDS = ['filter', 'limit', 'offset', 'orderBy', 'statusId'];

    /** @var array<string, mixed>|null Фильтр */
    public ?array $filter = null;

    /** @var int Ограничение на выборку */
    public int $limit;

    /** @var int|null Смещение выборки, по умолчанию равно 0 */
    public ?int $offset = null;

    /** @var array<int, array<string, mixed>>|null Поля, по которым будет произведена сортировка, и тип сортировки */
    public ?array $orderBy = null;

    /** @var array<int, int>|null Статусы кампании для выборки. Возможные статусы:<br/> `0` - Черновик, дата старта сегодня или раньше, денег на балансе нет<br/> `1` - Активная кампания<br/> `2` - Кампания приостановлена<br/> `3` - Кампания удалена<br/> `4` - Кампания остановлена<br/> `5` - Кампания запланирована, дата старта завтра или позже, на балансе есть деньги<br/> По умолчанию в выборку попадают кампании со статусами 0, 1, 2, 4, 5.<br/> */
    public ?array $statusId = null;
}
