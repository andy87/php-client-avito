<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response;

use Andy87\ClientsBase\Response\AbstractResponse;

/**
 * Ответ Avito API [DELETE] /ratings/v1/answers/{answer_id}.
 * 
 * @documentation https://developers.avito.ru/api-catalog/ratings/documentation#operation/removeReviewAnswerV1
 */
class RemoveReviewAnswerV1Response extends AbstractResponse
{
    protected const FIELD_MAP = ['success' => 'success'];

    protected const REQUIRED_FIELDS = ['success'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const MODEL = \Andy87\ClientsAvito\Generated\Schema\Ratings\RemoveAnswerResponse::class;

    /** @var bool Статус успешности запроса */
    public bool $success;
}
