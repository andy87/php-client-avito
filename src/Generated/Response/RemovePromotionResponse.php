<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response;

use Andy87\ClientsBase\Response\AbstractResponse;

/**
 * Ответ Avito API [POST] /cpxpromo/1/remove.
 * 
 * @documentation https://developers.avito.ru/api-catalog/cpxpromo/documentation#operation/removePromotion
 */
class RemovePromotionResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['message' => 'message'];

    protected const REQUIRED_FIELDS = ['message'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const MODEL = null;

    /** @var string Текст сообщения */
    public string $message;
}
