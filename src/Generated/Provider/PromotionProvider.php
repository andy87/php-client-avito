<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\CreateBbipOrderForItemsV1Prompt;
use Andy87\ClientsAvito\Generated\Prompt\GetBbipForecastsByItemsV1Prompt;
use Andy87\ClientsAvito\Generated\Prompt\GetBbipSuggestsByItemsV1Prompt;
use Andy87\ClientsAvito\Generated\Prompt\GetDictOfServicesV1Prompt;
use Andy87\ClientsAvito\Generated\Prompt\GetOrderStatusV1Prompt;
use Andy87\ClientsAvito\Generated\Prompt\GetServicesByItemsV1Prompt;
use Andy87\ClientsAvito\Generated\Prompt\ListOrdersByUserV1Prompt;
use Andy87\ClientsAvito\Generated\Response\CreateBbipOrderForItemsV1Response;
use Andy87\ClientsAvito\Generated\Response\GetBbipForecastsByItemsV1Response;
use Andy87\ClientsAvito\Generated\Response\GetBbipSuggestsByItemsV1Response;
use Andy87\ClientsAvito\Generated\Response\GetDictOfServicesV1Response;
use Andy87\ClientsAvito\Generated\Response\GetOrderStatusV1Response;
use Andy87\ClientsAvito\Generated\Response\GetServicesByItemsV1Response;
use Andy87\ClientsAvito\Generated\Response\ListOrdersByUserV1Response;

/**
 * Provider раздела Avito API "Продвижение".
 * @property-read Promotion\BbipProvider $bbip
 * @property-read Promotion\DictProvider $dict
 * @property-read Promotion\OrderProvider $order
 * @property-read Promotion\OrdersProvider $orders
 * @property-read Promotion\ServicesProvider $services
 *
 */
class PromotionProvider extends BaseAvitoProvider
{
    protected const OPERATION_GROUPS = [
        'bbip' => Promotion\BbipProvider::class,
        'dict' => Promotion\DictProvider::class,
        'order' => Promotion\OrderProvider::class,
        'orders' => Promotion\OrdersProvider::class,
        'services' => Promotion\ServicesProvider::class,
    ];

    /**
     * BBIP. Подключение услуги продвижения
     * 
     * Создать заявку на подключение услуг продвижения.
     * 
     * Создание заявки для набора объявлений возможно только в случае если ни по одному из объявлений не возникло ошибок.
     * 
     * При успешном создании заявки система возвращает `orderId` (идентификатор заявки),
     * на основе которого можно проверять как статус заявки, так и статус подключения услуг по объявлениям.
     * 
     * **Rate limit:** 10 RPM
     * 
     * OperationId: create_bbip_order_for_items_v1.
     * HTTP: PUT /promotion/v1/items/services/bbip/orders/create.
     *
     * @param CreateBbipOrderForItemsV1Prompt $prompt DTO запроса.
     *
     * @return CreateBbipOrderForItemsV1Response DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function create_bbip_order_for_items_v1(CreateBbipOrderForItemsV1Prompt $prompt): CreateBbipOrderForItemsV1Response
    {
        /** @var Promotion\BbipProvider $group */
        $group = $this->operationGroup('bbip');

        return $group->createOrderForItemsV1($prompt);
    }

    /**
     * BBIP. Прогноз продвижения
     * 
     * Получение прогноза продвижения по объявлениям
     * 
     * **Rate limit:** 100 RPM
     * 
     * OperationId: get_bbip_forecasts_by_items_v1.
     * HTTP: POST /promotion/v1/items/services/bbip/forecasts/get.
     *
     * @param GetBbipForecastsByItemsV1Prompt $prompt DTO запроса.
     *
     * @return GetBbipForecastsByItemsV1Response DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function get_bbip_forecasts_by_items_v1(GetBbipForecastsByItemsV1Prompt $prompt): GetBbipForecastsByItemsV1Response
    {
        /** @var Promotion\BbipProvider $group */
        $group = $this->operationGroup('bbip');

        return $group->getForecastsByItemsV1($prompt);
    }

    /**
     * BBIP. Варианты бюджета продвижения
     * 
     * Получение доступных вариантов бюджета для продвижения
     * 
     * **Rate limit:** 100 RPM
     * 
     * OperationId: get_bbip_suggests_by_items_v1.
     * HTTP: POST /promotion/v1/items/services/bbip/suggests/get.
     *
     * @param GetBbipSuggestsByItemsV1Prompt $prompt DTO запроса.
     *
     * @return GetBbipSuggestsByItemsV1Response DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function get_bbip_suggests_by_items_v1(GetBbipSuggestsByItemsV1Prompt $prompt): GetBbipSuggestsByItemsV1Response
    {
        /** @var Promotion\BbipProvider $group */
        $group = $this->operationGroup('bbip');

        return $group->getSuggestsByItemsV1($prompt);
    }

    /**
     * Словарь типов услуг продвижения
     * 
     * Получение словаря типов услуг продвижения
     * 
     * **Rate limit:** 100 RPM
     * 
     * OperationId: get_dict_of_services_v1.
     * HTTP: POST /promotion/v1/items/services/dict.
     *
     * @param GetDictOfServicesV1Prompt $prompt DTO запроса.
     *
     * @return GetDictOfServicesV1Response DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function get_dict_of_services_v1(GetDictOfServicesV1Prompt $prompt): GetDictOfServicesV1Response
    {
        /** @var Promotion\DictProvider $group */
        $group = $this->operationGroup('dict');

        return $group->getOfServicesV1($prompt);
    }

    /**
     * Статус заявки
     * 
     * Получение статуса заявки на подключение услуг продвижения
     * 
     * **Rate limit:** 100 RPM
     * 
     * OperationId: get_order_status_v1.
     * HTTP: POST /promotion/v1/items/services/orders/status.
     *
     * @param GetOrderStatusV1Prompt $prompt DTO запроса.
     *
     * @return GetOrderStatusV1Response DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function get_order_status_v1(GetOrderStatusV1Prompt $prompt): GetOrderStatusV1Response
    {
        /** @var Promotion\OrderProvider $group */
        $group = $this->operationGroup('order');

        return $group->getStatusV1($prompt);
    }

    /**
     * Список услуг продвижения
     * 
     * Получение списка активных услуг продвижения по объявлениям
     *  
     * **Rate limit:** 100 RPM
     * 
     * OperationId: get_services_by_items_v1.
     * HTTP: POST /promotion/v1/items/services/get.
     *
     * @param GetServicesByItemsV1Prompt $prompt DTO запроса.
     *
     * @return GetServicesByItemsV1Response DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function get_services_by_items_v1(GetServicesByItemsV1Prompt $prompt): GetServicesByItemsV1Response
    {
        /** @var Promotion\ServicesProvider $group */
        $group = $this->operationGroup('services');

        return $group->getByItemsV1($prompt);
    }

    /**
     * Список заявок
     * 
     * Получение списка заявок на подключение услуг.
     * 
     * **Rate limit:** 100 RPM
     * 
     * OperationId: list_orders_by_user_v1.
     * HTTP: POST /promotion/v1/items/services/orders/get.
     *
     * @param ListOrdersByUserV1Prompt $prompt DTO запроса.
     *
     * @return ListOrdersByUserV1Response DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function list_orders_by_user_v1(ListOrdersByUserV1Prompt $prompt): ListOrdersByUserV1Response
    {
        /** @var Promotion\OrdersProvider $group */
        $group = $this->operationGroup('orders');

        return $group->listByUserV1($prompt);
    }
}
