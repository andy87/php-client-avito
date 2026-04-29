<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response;

use Andy87\ClientsBase\Response\AbstractResponse;

/**
 * DTO ответа Avito API checkAhUserV1.
 */
class CheckAhUserV1Response extends AbstractResponse
{
    protected const FIELD_MAP = ['avitoCompanyId' => 'avitoCompanyId', 'isChief' => 'isChief', 'isCompany' => 'isCompany', 'isEmployee' => 'isEmployee'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['avitoCompanyId'];

    protected const CASTS = [];

    protected const MODEL = null;

    /** @var int|null ИД компании, к которой принадлежит сотрудник */
    public ?int $avitoCompanyId = null;

    /** @var bool|null Признак того, что пользователь является руководителем */
    public ?bool $isChief = null;

    /** @var bool|null Признак того, что пользователь является компанией */
    public ?bool $isCompany = null;

    /** @var bool|null Признак того, что пользователь является сотрудником */
    public ?bool $isEmployee = null;
}
