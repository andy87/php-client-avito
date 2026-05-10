<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Response;

use and_y87\PhpClientSdk\Response\AbstractResponse;

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

    protected const MODEL = \and_y87\php_client_avito\Generated\Schema\Ratings\RemoveAnswerResponse::class;

    /** @var bool Статус успешности запроса */
    public bool $success;
}
