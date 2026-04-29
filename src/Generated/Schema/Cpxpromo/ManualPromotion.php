<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Cpxpromo;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito cpxpromo/manualPromotion.
 */
class ManualPromotion extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['bidPenny' => 'bidPenny', 'limitPenny' => 'limitPenny'];

    protected const REQUIRED_FIELDS = ['bidPenny'];

    protected const NULLABLE_FIELDS = ['limitPenny'];

    protected const CASTS = [];

    /** @var int Текущая цена за целевое действие в копейках */
    public int $bidPenny;

    /** @var int|null Дневной лимит в копейках */
    public ?int $limitPenny = null;
}
