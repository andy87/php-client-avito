<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Ratings;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito ratings/Rating.
 */
class Rating extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['reviewsCount' => 'reviewsCount', 'reviewsWithScoreCount' => 'reviewsWithScoreCount', 'score' => 'score'];

    protected const REQUIRED_FIELDS = ['score', 'reviewsWithScoreCount', 'reviewsCount'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var int Общее количество активных отзывов */
    public int $reviewsCount;

    /** @var int Количество активных отзывов, влияющих на формирование рейтинга */
    public int $reviewsWithScoreCount;

    /** @var float Оценка рейтинга */
    public float $score;
}
