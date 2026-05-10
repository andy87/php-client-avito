<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Response;

use Andy87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ Avito API [POST] /ratings/v1/answers.
 *
 * @documentation https://developers.avito.ru/api-catalog/ratings/documentation#operation/createReviewAnswerV1
 */
class CreateReviewAnswerV1Response extends AbstractResponse
{
    protected const FIELD_MAP = ['createdAt' => 'createdAt', 'id' => 'id'];

    protected const REQUIRED_FIELDS = ['id', 'createdAt'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const MODEL = \php_client_avito\Generated\Schema\Ratings\CreateAnswerResponse::class;

    /** @var int Timestamp создания ответа */
    public int $createdAt;

    /** @var int ID ответа */
    public int $id;
}
