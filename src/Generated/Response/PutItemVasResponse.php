<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response;

use Andy87\ClientsBase\Response\AbstractResponse;

/**
 * DTO ответа Avito API putItemVas.
 */
class PutItemVasResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['amount' => 'amount', 'vas' => 'vas'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['vas' => \Andy87\ClientsAvito\Generated\Schema\Item\InfoVas::class];

    protected const MODEL = \Andy87\ClientsAvito\Generated\Schema\Item\VasApplyAvito::class;

    /** @var float|null Сумма списания за применение услуги */
    public ?float $amount = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Item\InfoVas|null Response field vas */
    public ?\Andy87\ClientsAvito\Generated\Schema\Item\InfoVas $vas = null;
}
