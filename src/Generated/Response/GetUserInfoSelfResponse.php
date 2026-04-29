<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response;

use Andy87\ClientsBase\Response\AbstractResponse;

/**
 * DTO ответа Avito API getUserInfoSelf.
 */
class GetUserInfoSelfResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['email' => 'email', 'id' => 'id', 'name' => 'name', 'phone' => 'phone', 'phones' => 'phones', 'profile_url' => 'profile_url'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const MODEL = \Andy87\ClientsAvito\Generated\Schema\User\UserInfoSelf::class;

    /** @var string|null Email пользователя */
    public ?string $email = null;

    /** @var int|null Идентификатор пользователя */
    public ?int $id = null;

    /** @var string|null Имя пользователя */
    public ?string $name = null;

    /** @var string|null первый верифицированный телефон пользователя */
    public ?string $phone = null;

    /** @var array<int, string>|null все верифицированные номера телефонов */
    public ?array $phones = null;

    /** @var string|null Ссылка на профиль пользователя */
    public ?string $profile_url = null;
}
