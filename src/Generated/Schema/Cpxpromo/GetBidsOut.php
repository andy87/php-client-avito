<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Cpxpromo;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito cpxpromo/getBidsOut.
 */
class GetBidsOut extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['actionTypeID' => 'actionTypeID', 'auto' => 'auto', 'manual' => 'manual', 'selectedType' => 'selectedType'];

    protected const REQUIRED_FIELDS = ['actionTypeID', 'selectedType'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['auto' => \Andy87\ClientsAvito\Generated\Schema\Cpxpromo\Auto::class, 'manual' => \Andy87\ClientsAvito\Generated\Schema\Cpxpromo\Manual::class];

    /** @var int Тип события (1 - звонок | 5 - пакет кликов | 7 - мессенджер, передача контакта в чате) */
    public int $actionTypeID;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Cpxpromo\Auto|null Schema field auto */
    public ?\Andy87\ClientsAvito\Generated\Schema\Cpxpromo\Auto $auto = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Cpxpromo\Manual|null Schema field manual */
    public ?\Andy87\ClientsAvito\Generated\Schema\Cpxpromo\Manual $manual = null;

    /** @var string Выбранный тип продвижения ("manual" - ручное продвижение | "auto" - автоматическое продвижение) */
    public string $selectedType;
}
