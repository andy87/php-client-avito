<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response;

use Andy87\ClientsBase\Response\AbstractResponse;

/**
 * Ответ Avito API [GET] /job/v2/vacancies/{vacancy_id}.
 * 
 * @documentation https://developers.avito.ru/api-catalog/job/documentation#operation/vacancyGetItem
 */
class VacancyGetItemResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['addressDetails' => 'addressDetails', 'auto_renewal' => 'auto_renewal', 'contacts' => 'contacts', 'description' => 'description', 'hierarchy' => 'hierarchy', 'id' => 'id', 'is_active' => 'is_active', 'params' => 'params', 'salary' => 'salary', 'start_time' => 'start_time', 'title' => 'title', 'update_time' => 'update_time', 'url' => 'url', 'uuid' => 'uuid'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['addressDetails', 'auto_renewal', 'contacts', 'hierarchy', 'salary', 'uuid'];

    protected const CASTS = [];

    protected const MODEL = \Andy87\ClientsAvito\Generated\Schema\Job\Vacancy20::class;

    /** @var array<string, mixed>|null Детали адреса вакансии */
    public ?array $addressDetails = null;

    /** @var bool|null Вакансия на автопродлении */
    public ?bool $auto_renewal = null;

    /** @var array<string, mixed>|null Информация о контактах в вакансии */
    public ?array $contacts = null;

    /** @var string|null Описание вакансии */
    public ?string $description = null;

    /** @var array<string, mixed>|null Информация об иерархии аккаунтов */
    public ?array $hierarchy = null;

    /** @var int|null Идентификатор вакансии на сайте */
    public ?int $id = null;

    /** @var bool|null Активность вакансии */
    public ?bool $is_active = null;

    /** @var array<string, mixed>|null Блок с параметрами вакансии. Все поля опциональны и выводятся при наличии */
    public ?array $params = null;

    /** @var int|null Зарплата (устарело). Используйте поле `salary` с диапазоном из блока `params` */
    public ?int $salary = null;

    /** @var string|null Дата публикации вакансии */
    public ?string $start_time = null;

    /** @var string|null Наименование вакансии */
    public ?string $title = null;

    /** @var string|null Дата последнего обновления вакансии */
    public ?string $update_time = null;

    /** @var string|null URL вакансии на сайте */
    public ?string $url = null;

    /** @var string|null Идентификатор вакансии */
    public ?string $uuid = null;
}
