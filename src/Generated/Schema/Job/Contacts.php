<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Job;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito job/Contacts.
 */
class Contacts extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['email' => 'email', 'name' => 'name', 'phone' => 'phone'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['email', 'name'];

    protected const CASTS = ['phone' => \Andy87\ClientsAvito\Generated\Schema\Job\Phone::class];

    /** @var string|null Email контактного лица по данному объявлению.
Учитывается только при публикации вакансии от имени Сотрудника.
Если не заполнено то при публикации от Сотрудника будет использована почта из Профиля Сотрудника.

При публикации от Компании или Пользователя будет использоваться почта из Профиля, переданное значение будет проигнорировано.
 */
    public ?string $email = null;

    /** @var string|null Имя менеджера, контактного лица по данному объявлению.
Учитывается только при публикации вакансии от имени Сотрудника.
Если не заполнено то при публикации от Сотрудника будет использовано "Имя сотрудника, которое видят пользователи при просмотре объявления".

При публикации от Компании или Пользователя не заполняется, переданное значение будет проигнорировано.
 */
    public ?string $name = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Job\Phone|null Schema field phone */
    public ?\Andy87\ClientsAvito\Generated\Schema\Job\Phone $phone = null;
}
