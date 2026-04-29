<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [POST] /autoteka/v1/valuation/by-specification.
 * 
 * @documentation https://developers.avito.ru/api-catalog/autoteka/documentation#operation/valuationBySpecification
 */
class ValuationBySpecificationPrompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/autoteka/v1/valuation/by-specification';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const FIELD_MAP = ['Authorization' => 'Authorization', 'location' => 'location', 'mileage' => 'mileage', 'specification' => 'specification', 'vehicleId' => 'vehicleId'];

    protected const REQUIRED_FIELDS = ['specification'];

    protected const NULLABLE_FIELDS = ['location', 'mileage', 'vehicleId'];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const BODY_FIELDS = ['location', 'mileage', 'specification', 'vehicleId'];

    /** @var string|null Токен для авторизации */
    public ?string $Authorization = null;

    /** @var array<string, mixed>|null Body field location */
    public ?array $location = null;

    /** @var int|null Пробег в км */
    public ?int $mileage = null;

    /** @var array<string, mixed> Body field specification */
    public array $specification;

    /** @var string|null Идентификатор авто (vin/frame). */
    public ?string $vehicleId = null;
}
