<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoteka;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/PackageAutoteka.
 */
class PackageAutoteka extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['createdTime' => 'createdTime', 'expireTime' => 'expireTime', 'reportsCnt' => 'reportsCnt', 'reportsCntRemain' => 'reportsCntRemain'];

    protected const REQUIRED_FIELDS = ['createdTime', 'expireTime', 'reportsCnt', 'reportsCntRemain'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Время начала действия текущего пакета */
    public string $createdTime;

    /** @var string Время окончания действия текущего пакета */
    public string $expireTime;

    /** @var int Количество доступных отчётов в пакете */
    public int $reportsCnt;

    /** @var int Текущий остаток отчётов в пакете */
    public int $reportsCntRemain;
}
