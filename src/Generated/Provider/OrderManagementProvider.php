<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\AcceptReturnOrderPrompt;
use Andy87\ClientsAvito\Generated\Prompt\ApplyTransitionPrompt;
use Andy87\ClientsAvito\Generated\Prompt\CheckConfirmationCodePrompt2;
use Andy87\ClientsAvito\Generated\Prompt\CncSetDetailsPrompt;
use Andy87\ClientsAvito\Generated\Prompt\DownloadLabelPrompt;
use Andy87\ClientsAvito\Generated\Prompt\GenerateLabelsExtendedPrompt;
use Andy87\ClientsAvito\Generated\Prompt\GenerateLabelsPrompt;
use Andy87\ClientsAvito\Generated\Prompt\GetCourierDeliveryRangePrompt;
use Andy87\ClientsAvito\Generated\Prompt\GetOrdersPrompt;
use Andy87\ClientsAvito\Generated\Prompt\MarkingsPrompt;
use Andy87\ClientsAvito\Generated\Prompt\SetCourierDeliveryRangePrompt;
use Andy87\ClientsAvito\Generated\Prompt\SetOrderTrackingNumberPrompt;
use Andy87\ClientsAvito\Generated\Response\AcceptReturnOrderResponse;
use Andy87\ClientsAvito\Generated\Response\ApplyTransitionResponse;
use Andy87\ClientsAvito\Generated\Response\CheckConfirmationCodeResponse2;
use Andy87\ClientsAvito\Generated\Response\CncSetDetailsResponse;
use Andy87\ClientsAvito\Generated\Response\DownloadLabelResponse;
use Andy87\ClientsAvito\Generated\Response\GenerateLabelsExtendedResponse;
use Andy87\ClientsAvito\Generated\Response\GenerateLabelsResponse;
use Andy87\ClientsAvito\Generated\Response\GetCourierDeliveryRangeResponse;
use Andy87\ClientsAvito\Generated\Response\GetOrdersResponse;
use Andy87\ClientsAvito\Generated\Response\MarkingsResponse;
use Andy87\ClientsAvito\Generated\Response\SetCourierDeliveryRangeResponse;
use Andy87\ClientsAvito\Generated\Response\SetOrderTrackingNumberResponse;

/**
 * Provider раздела Avito API "Управление заказами".
 * @property-read OrderManagement\CncProvider $cnc
 * @property-read OrderManagement\ConfirmationProvider $confirmation
 * @property-read OrderManagement\CourierProvider $courier
 * @property-read OrderManagement\GeneralProvider $general
 * @property-read OrderManagement\LabelProvider $label
 * @property-read OrderManagement\LabelsProvider $labels
 * @property-read OrderManagement\OrderProvider $order
 * @property-read OrderManagement\OrdersProvider $orders
 * @property-read OrderManagement\ReturnValueProvider $returnValue
 * @property-read OrderManagement\TransitionProvider $transition
 *
 */
class OrderManagementProvider extends BaseAvitoProvider
{
    protected const OPERATION_GROUPS = [
        'cnc' => OrderManagement\CncProvider::class,
        'confirmation' => OrderManagement\ConfirmationProvider::class,
        'courier' => OrderManagement\CourierProvider::class,
        'general' => OrderManagement\GeneralProvider::class,
        'label' => OrderManagement\LabelProvider::class,
        'labels' => OrderManagement\LabelsProvider::class,
        'order' => OrderManagement\OrderProvider::class,
        'orders' => OrderManagement\OrdersProvider::class,
        'returnValue' => OrderManagement\ReturnValueProvider::class,
        'transition' => OrderManagement\TransitionProvider::class,
    ];

    /**
     * Выбор отделения отделения Почты России для получения возврата
     * 
     * Данный метод применяется для подтверждения возврата товара и выбора отделения Почты России, куда будет доставлен возврат.
     * Максимальное количество запросов в минуту - 100.
     * 
     * OperationId: acceptReturnOrder.
     * HTTP: POST /order-management/1/order/acceptReturnOrder.
     *
     * @param AcceptReturnOrderPrompt $prompt DTO запроса.
     *
     * @return AcceptReturnOrderResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function acceptReturnOrder(AcceptReturnOrderPrompt $prompt): AcceptReturnOrderResponse
    {
        /** @var OrderManagement\ReturnValueProvider $group */
        $group = $this->operationGroup('returnValue');

        return $group->acceptOrder($prompt);
    }

    /**
     * Изменение статуса заказа
     * 
     * Данный метод применяется для изменения статуса заказа, в частности для подтверждения или отмены заказа.
     * Максимальное количество запросов в минуту - 100.
     * 
     * OperationId: applyTransition.
     * HTTP: POST /order-management/1/order/applyTransition.
     *
     * @param ApplyTransitionPrompt $prompt DTO запроса.
     *
     * @return ApplyTransitionResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function applyTransition(ApplyTransitionPrompt $prompt): ApplyTransitionResponse
    {
        /** @var OrderManagement\TransitionProvider $group */
        $group = $this->operationGroup('transition');

        return $group->apply($prompt);
    }

    /**
     * Метод для проверки кода подтверждения заказа.
     * 
     * Данный метод используется для подтверждения личности для получения заказа в ПВЗ. Пользователь называет код  из приложения сотруднику СД. Далее через API служба доставки проверяет его валидность.
     * Максимальное количество запросов в минуту - 2000.
     * 
     * OperationId: checkConfirmationCode.
     * HTTP: POST /order-management/1/order/checkConfirmationCode.
     *
     * @param CheckConfirmationCodePrompt2 $prompt DTO запроса.
     *
     * @return CheckConfirmationCodeResponse2 DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function checkConfirmationCode(CheckConfirmationCodePrompt2 $prompt): CheckConfirmationCodeResponse2
    {
        /** @var OrderManagement\ConfirmationProvider $group */
        $group = $this->operationGroup('confirmation');

        return $group->checkCode($prompt);
    }

    /**
     * Метод для подготовки заказа с самовывозом
     * 
     * Данный метод применяется продавцом для подготовки заказа и передачи адреса, сроков бронирования и сообщения покупателю.
     * Максимальное количество запросов в минуту - 60
     * 
     * OperationId: cncSetDetails.
     * HTTP: POST /order-management/1/order/cncSetDetails.
     *
     * @param CncSetDetailsPrompt $prompt DTO запроса.
     *
     * @return CncSetDetailsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function cncSetDetails(CncSetDetailsPrompt $prompt): CncSetDetailsResponse
    {
        /** @var OrderManagement\CncProvider $group */
        $group = $this->operationGroup('cnc');

        return $group->setDetails($prompt);
    }

    /**
     * Скачать сгенерированный PDF-файл (этикетку).
     * 
     * Скачивание сгенерированного PDF-файла с этикетками по идентификатору задачи.  Файл доступен после успешного завершения генерации.
     * Максимальное количество запросов в минуту - 1000.
     * 
     * OperationId: downloadLabel.
     * HTTP: GET /order-management/1/orders/labels/{taskID}/download.
     *
     * @param DownloadLabelPrompt $prompt DTO запроса.
     *
     * @return DownloadLabelResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function downloadLabel(DownloadLabelPrompt $prompt): DownloadLabelResponse
    {
        /** @var OrderManagement\LabelProvider $group */
        $group = $this->operationGroup('label');

        return $group->download($prompt);
    }

    /**
     * Создать задачу на генерацию этикеток (до 100).
     * 
     * Создаёт задачу на генерацию PDF-этикеток для заказов (до 100 штук).  Возвращает идентификатор задачи для последующей проверки статуса и скачивания результата. 
     * Максимальное количество запросов в минуту - 1000. Эта ручка доступна только для ПВЗ заказов.
     * 
     * OperationId: generateLabels.
     * HTTP: POST /order-management/1/orders/labels.
     *
     * @param GenerateLabelsPrompt $prompt DTO запроса.
     *
     * @return GenerateLabelsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function generateLabels(GenerateLabelsPrompt $prompt): GenerateLabelsResponse
    {
        /** @var OrderManagement\LabelsProvider $group */
        $group = $this->operationGroup('labels');

        return $group->generate($prompt);
    }

    /**
     * Создать задачу на генерацию этикеток (до 1000).
     * 
     * Создаёт задачу на генерацию PDF-этикеток для заказов (до 1000 штук).  Возвращает идентификатор задачи для последующей проверки статуса и скачивания результата.
     * Максимальное количество запросов в минуту - 1. Эта ручка доступна только для ПВЗ заказов.
     * 
     * OperationId: generateLabelsExtended.
     * HTTP: POST /order-management/1/orders/labels/extended.
     *
     * @param GenerateLabelsExtendedPrompt $prompt DTO запроса.
     *
     * @return GenerateLabelsExtendedResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function generateLabelsExtended(GenerateLabelsExtendedPrompt $prompt): GenerateLabelsExtendedResponse
    {
        /** @var OrderManagement\LabelsProvider $group */
        $group = $this->operationGroup('labels');

        return $group->generateExtended($prompt);
    }

    /**
     * Метод получения доступных временных промежутков приезда курьера
     * 
     * Данный метод применяется для получения всех промежутков времени, когда курьер может приехать забрать товар, чтобы отвезти его покупателю.
     * Максимальное количество запросов в минуту - 100.
     * 
     * OperationId: getCourierDeliveryRange.
     * HTTP: GET /order-management/1/order/getCourierDeliveryRange.
     *
     * @param GetCourierDeliveryRangePrompt $prompt DTO запроса.
     *
     * @return GetCourierDeliveryRangeResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getCourierDeliveryRange(GetCourierDeliveryRangePrompt $prompt): GetCourierDeliveryRangeResponse
    {
        /** @var OrderManagement\CourierProvider $group */
        $group = $this->operationGroup('courier');

        return $group->getDeliveryRange($prompt);
    }

    /**
     * Получение информации о заказах
     * 
     * Получение информации о заказах по статусу.
     * Максимальное количество запросов в минуту - 500.
     * 
     * OperationId: getOrders.
     * HTTP: GET /order-management/1/orders.
     *
     * @param GetOrdersPrompt $prompt DTO запроса.
     *
     * @return GetOrdersResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getOrders(GetOrdersPrompt $prompt): GetOrdersResponse
    {
        /** @var OrderManagement\OrdersProvider $group */
        $group = $this->operationGroup('orders');

        return $group->get($prompt);
    }

    /**
     * Передача честного знака
     * 
     * Метод для передачи честного знака для товаров в заказе.
     * Максимальное количество элементов в одном запросе - 50.
     * Максимальное количество запросов в минуту - 100.
     * 
     * OperationId: markings.
     * HTTP: POST /order-management/1/markings.
     *
     * @param MarkingsPrompt $prompt DTO запроса.
     *
     * @return MarkingsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function markings(MarkingsPrompt $prompt): MarkingsResponse
    {
        /** @var OrderManagement\GeneralProvider $group */
        $group = $this->operationGroup('general');

        return $group->markings($prompt);
    }

    /**
     * Метод выбора определённого доступного временного промежутка для приезда курьера
     * 
     * Данный метод применяется после метода получения всех промежутков времени, когда курьер может приехать и забрать товар.  Вызвав этот метод, продавец выбирает определённый временной промежуток приезда курьера.
     * Также этот метод можно вызвать, чтобы изменить время приезда курьера, если он ещё не забрал посылку. Максимальное количество запросов в минуту - 200.
     * 
     * OperationId: setCourierDeliveryRange.
     * HTTP: POST /order-management/1/order/setCourierDeliveryRange.
     *
     * @param SetCourierDeliveryRangePrompt $prompt DTO запроса.
     *
     * @return SetCourierDeliveryRangeResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function setCourierDeliveryRange(SetCourierDeliveryRangePrompt $prompt): SetCourierDeliveryRangeResponse
    {
        /** @var OrderManagement\CourierProvider $group */
        $group = $this->operationGroup('courier');

        return $group->setDeliveryRange($prompt);
    }

    /**
     * Передача трек-номера
     * 
     * Метод для передачи трек-номера для доставки партнёрами продавца (DBS)
     * Максимальное количество запросов в минуту - 100.
     * 
     * OperationId: setOrderTrackingNumber.
     * HTTP: POST /order-management/1/order/setTrackingNumber.
     *
     * @param SetOrderTrackingNumberPrompt $prompt DTO запроса.
     *
     * @return SetOrderTrackingNumberResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function setOrderTrackingNumber(SetOrderTrackingNumberPrompt $prompt): SetOrderTrackingNumberResponse
    {
        /** @var OrderManagement\OrderProvider $group */
        $group = $this->operationGroup('order');

        return $group->setTrackingNumber($prompt);
    }
}
