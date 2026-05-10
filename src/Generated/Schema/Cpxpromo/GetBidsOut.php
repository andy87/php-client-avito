<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\Cpxpromo;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito cpxpromo/getBidsOut.
 */
class GetBidsOut extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['actionTypeID' => 'actionTypeID', 'auto' => 'auto', 'manual' => 'manual', 'selectedType' => 'selectedType'];

    protected const REQUIRED_FIELDS = ['actionTypeID', 'selectedType'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['auto' => \and_y87\php_client_avito\Generated\Schema\Cpxpromo\Auto::class, 'manual' => \and_y87\php_client_avito\Generated\Schema\Cpxpromo\Manual::class];

    /** @var int Тип события (1 - звонок | 5 - пакет кликов | 7 - мессенджер, передача контакта в чате) */
    public int $actionTypeID;

    /** @var \and_y87\php_client_avito\Generated\Schema\Cpxpromo\Auto|null Schema field auto */
    public ?\and_y87\php_client_avito\Generated\Schema\Cpxpromo\Auto $auto = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\Cpxpromo\Manual|null Schema field manual */
    public ?\and_y87\php_client_avito\Generated\Schema\Cpxpromo\Manual $manual = null;

    /** @var string Выбранный тип продвижения ("manual" - ручное продвижение | "auto" - автоматическое продвижение) */
    public string $selectedType;
}
