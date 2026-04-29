<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoteka;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/RestrictionsAutoteka.
 */
class RestrictionsAutoteka extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['pledge' => 'pledge', 'registration' => 'registration', 'stealing' => 'stealing'];

    protected const REQUIRED_FIELDS = ['registration', 'stealing', 'pledge'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var array<string, mixed> Авто в залоге */
    public array $pledge;

    /** @var array<string, mixed> Ограничения на регистрационные действия */
    public array $registration;

    /** @var array<string, mixed> Авто в угоне */
    public array $stealing;
}
