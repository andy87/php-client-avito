<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\GetBidsPrompt;
use Andy87\ClientsAvito\Generated\Prompt\GetPromotionsByItemIdsPrompt;
use Andy87\ClientsAvito\Generated\Prompt\RemovePromotionPrompt;
use Andy87\ClientsAvito\Generated\Prompt\SaveAutoBidPrompt;
use Andy87\ClientsAvito\Generated\Prompt\SaveManualBidPrompt;
use Andy87\ClientsAvito\Generated\Response\GetBidsResponse;
use Andy87\ClientsAvito\Generated\Response\GetPromotionsByItemIdsResponse;
use Andy87\ClientsAvito\Generated\Response\RemovePromotionResponse;
use Andy87\ClientsAvito\Generated\Response\SaveAutoBidResponse;
use Andy87\ClientsAvito\Generated\Response\SaveManualBidResponse;

/**
 * Provider раздела Avito API "Настройка цены целевого действия".
 * @property-read Cpxpromo\AutoProvider $auto
 * @property-read Cpxpromo\BidsProvider $bids
 * @property-read Cpxpromo\ManualProvider $manual
 * @property-read Cpxpromo\PromotionProvider $promotion
 * @property-read Cpxpromo\PromotionsProvider $promotions
 *
 */
class CpxpromoProvider extends BaseAvitoProvider
{
    protected const OPERATION_GROUPS = [
        'auto' => Cpxpromo\AutoProvider::class,
        'bids' => Cpxpromo\BidsProvider::class,
        'manual' => Cpxpromo\ManualProvider::class,
        'promotion' => Cpxpromo\PromotionProvider::class,
        'promotions' => Cpxpromo\PromotionsProvider::class,
    ];

    /**
     * Получение детализированной информации о действующих и доступных ценах за целевые действия и бюджетах
     * 
     * Метод позволяет получить детализированную информацию о действующих и доступных ценах целевого действия (в копейках), бюджетах (в копейках) и преимуществах перед конкурентами.
     * Максимальное количество запросов в минуту - 20
     * 
     * OperationId: getBids.
     * HTTP: GET /cpxpromo/1/getBids/{itemId}.
     *
     * @param GetBidsPrompt $prompt DTO запроса.
     *
     * @return GetBidsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getBids(GetBidsPrompt $prompt): GetBidsResponse
    {
        /** @var Cpxpromo\BidsProvider $group */
        $group = $this->operationGroup('bids');

        return $group->get($prompt);
    }

    /**
     * Получение текущих цен за целевое действие и бюджетов по нескольким объявлениям
     * 
     * Метод позволяет получить текущие цены целевого действия (в копейках) и бюджеты (в копейках) по нескольким объявлениям.
     * Максимальное количество передаваемых объявлений - 200.
     * Максимальное количество запросов в минуту - 400.
     * 
     * OperationId: getPromotionsByItemIds.
     * HTTP: POST /cpxpromo/1/getPromotionsByItemIds.
     *
     * @param GetPromotionsByItemIdsPrompt $prompt DTO запроса.
     *
     * @return GetPromotionsByItemIdsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getPromotionsByItemIds(GetPromotionsByItemIdsPrompt $prompt): GetPromotionsByItemIdsResponse
    {
        /** @var Cpxpromo\PromotionsProvider $group */
        $group = $this->operationGroup('promotions');

        return $group->getByItemIds($prompt);
    }

    /**
     * Остановка продвижения
     * 
     * Метод позволяет остановить продвижение и переключиться на цены из прайс-листа. 
     * Максимальное количество запросов в минуту - 300
     * 
     * OperationId: removePromotion.
     * HTTP: POST /cpxpromo/1/remove.
     *
     * @param RemovePromotionPrompt $prompt DTO запроса.
     *
     * @return RemovePromotionResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function removePromotion(RemovePromotionPrompt $prompt): RemovePromotionResponse
    {
        /** @var Cpxpromo\PromotionProvider $group */
        $group = $this->operationGroup('promotion');

        return $group->remove($prompt);
    }

    /**
     * Применение автоматической настройки
     * 
     * Метод позволяет установить бюджет (в копейках) и срок, за который потратится этот бюджет ("1d" — сутки; "7d" — неделя; "30d" — месяц). Бюджет указывать необязательно.
     * 
     * Автоматическое продвижение пока что нельзя запустить в категории «Транспорт»
     * 
     * Максимальное количество запросов в минуту - 10.
     * 
     * OperationId: saveAutoBid.
     * HTTP: POST /cpxpromo/1/setAuto.
     *
     * @param SaveAutoBidPrompt $prompt DTO запроса.
     *
     * @return SaveAutoBidResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function saveAutoBid(SaveAutoBidPrompt $prompt): SaveAutoBidResponse
    {
        /** @var Cpxpromo\AutoProvider $group */
        $group = $this->operationGroup('auto');

        return $group->saveBid($prompt);
    }

    /**
     * Применение ручной настройки
     * 
     * Метод позволяет установить цену за целевое действие и лимит трат (обе суммы нужно указать в копейках).
     * 
     * Цена целевого действия должна быть больше минимальной цены (посмотреть минимальную цену можно в ручке получения получения детализированной информации о действующих и доступных ценах за целевые действия и бюджетах). Лимит трат указывать необязательно.
     * 
     * Максимальное количество запросов в минуту - 20.
     * 
     * OperationId: saveManualBid.
     * HTTP: POST /cpxpromo/1/setManual.
     *
     * @param SaveManualBidPrompt $prompt DTO запроса.
     *
     * @return SaveManualBidResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function saveManualBid(SaveManualBidPrompt $prompt): SaveManualBidResponse
    {
        /** @var Cpxpromo\ManualProvider $group */
        $group = $this->operationGroup('manual');

        return $group->saveBid($prompt);
    }
}
