<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Ratings;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito ratings/Review.
 */
class Review extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['answer' => 'answer', 'canAnswer' => 'canAnswer', 'createdAt' => 'createdAt', 'extraParams' => 'extraParams', 'id' => 'id', 'images' => 'images', 'item' => 'item', 'score' => 'score', 'sender' => 'sender', 'stage' => 'stage', 'text' => 'text', 'usedInScore' => 'usedInScore'];

    protected const REQUIRED_FIELDS = ['id', 'score', 'stage', 'text', 'usedInScore', 'canAnswer', 'createdAt'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['answer' => \Andy87\ClientsAvito\Generated\Schema\Ratings\ReviewAnswer::class, 'images' => [\Andy87\ClientsAvito\Generated\Schema\Ratings\ReviewImage::class], 'item' => \Andy87\ClientsAvito\Generated\Schema\Ratings\ReviewItem::class, 'sender' => \Andy87\ClientsAvito\Generated\Schema\Ratings\ReviewSender::class];

    /** @var \Andy87\ClientsAvito\Generated\Schema\Ratings\ReviewAnswer|null Schema field answer */
    public ?\Andy87\ClientsAvito\Generated\Schema\Ratings\ReviewAnswer $answer = null;

    /** @var bool Можно ли оставить ответ на отзыв */
    public bool $canAnswer;

    /** @var int Unix TimeStamp создания отзыва */
    public int $createdAt;

    /** @var array<string, mixed>|null Дополнительные опциональные параметры отзыва */
    public ?array $extraParams = null;

    /** @var int ID отзыва */
    public int $id;

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\Ratings\ReviewImage>|null Schema field images */
    public ?array $images = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Ratings\ReviewItem|null Schema field item */
    public ?\Andy87\ClientsAvito\Generated\Schema\Ratings\ReviewItem $item = null;

    /** @var int Оценка */
    public int $score;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Ratings\ReviewSender|null Schema field sender */
    public ?\Andy87\ClientsAvito\Generated\Schema\Ratings\ReviewSender $sender = null;

    /** @var string Стадия сделки:
  * `done` - Сделка состоялась
  * `fell_through` - Сделка сорвалсь
  * `not_agree` - Не договорились
  * `not_communicate` - Не общались
 */
    public string $stage;

    /** @var string Текст отзыва */
    public string $text;

    /** @var bool Участвует ли отзыв в формирование оценки */
    public bool $usedInScore;
}
