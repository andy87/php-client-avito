<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider\DeliverySandbox;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\TrackingPrompt;
use Andy87\ClientsAvito\Generated\Response\DeliverySandbox\General\TrackingResponse;

/**
 * Группа методов "general" раздела Avito API "Доставка".
 */
class GeneralProvider extends BaseAvitoProvider
{
    /**
     * Трекинг
     * 
     * Метод для передачи информации по трекингу посылки от службы доставки в Avito.
     * 
     * Механика работы и прочие важные моменты описаны в [разделе](https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#info/treking).
     * 
     * Обязательно ознакомьтесь и реализуйте [политику повторов запросов](https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#info/politika_povtorov_v_trekinge).
     * 
     * OperationId: tracking.
     * HTTP: POST /delivery-sandbox/order/tracking.
     *
     * @param TrackingPrompt $prompt DTO запроса.
     *
     * @return TrackingResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function tracking(TrackingPrompt $prompt): TrackingResponse
    {
        /** @var TrackingResponse $response */
        $response = $this->request($prompt, TrackingResponse::class);

        return $response;
    }
}
