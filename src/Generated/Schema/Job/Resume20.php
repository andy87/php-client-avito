<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Job;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito job/Resume2.0.
 */
class Resume20 extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['address_details' => 'address_details', 'description' => 'description', 'id' => 'id', 'is_active' => 'is_active', 'is_purchased' => 'is_purchased', 'params' => 'params', 'photos' => 'photos', 'salary' => 'salary', 'start_time' => 'start_time', 'title' => 'title', 'update_time' => 'update_time', 'url' => 'url'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['photos', 'salary'];

    protected const CASTS = ['address_details' => \Andy87\ClientsAvito\Generated\Schema\Job\AddressDetails::class, 'photos' => [\Andy87\ClientsAvito\Generated\Schema\Job\Photo::class]];

    /** @var \Andy87\ClientsAvito\Generated\Schema\Job\AddressDetails|null Schema field address_details */
    public ?\Andy87\ClientsAvito\Generated\Schema\Job\AddressDetails $address_details = null;

    /** @var string|null Описание резюме */
    public ?string $description = null;

    /** @var int|null Идентификатор резюме */
    public ?int $id = null;

    /** @var bool|null Активность резюме */
    public ?bool $is_active = null;

    /** @var bool|null Контакты резюме куплены */
    public ?bool $is_purchased = null;

    /** @var array<string, mixed>|null Блок с параметрами резюме. Все поля опциональны и выводятся при наличии */
    public ?array $params = null;

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\Job\Photo>|null Присутствует в ответе только если в запросе есть флаг photos=true */
    public ?array $photos = null;

    /** @var int|null Зарплата. Поле может отсутствовать в ответе (выводится при наличии зарплаты) */
    public ?int $salary = null;

    /** @var string|null Дата публикации резюме */
    public ?string $start_time = null;

    /** @var string|null Наименование резюме */
    public ?string $title = null;

    /** @var string|null Дата последнего обновления резюме */
    public ?string $update_time = null;

    /** @var string|null URL резюме на сайте */
    public ?string $url = null;
}
