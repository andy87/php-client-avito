<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider\DeliverySandbox;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\ProhibitOrderAcceptancePrompt;
use Andy87\ClientsAvito\Generated\Prompt\SetOrderPropertiesPrompt;
use Andy87\ClientsAvito\Generated\Prompt\SetOrderRealAddressPrompt;
use Andy87\ClientsAvito\Generated\Response\DeliverySandbox\Order\ProhibitAcceptanceResponse;
use Andy87\ClientsAvito\Generated\Response\DeliverySandbox\Order\SetPropertiesResponse;
use Andy87\ClientsAvito\Generated\Response\DeliverySandbox\Order\SetRealAddressResponse;

/**
 * Группа методов "order" раздела Avito API "Доставка".
 */
class OrderProvider extends BaseAvitoProvider
{
    /**
     * Запрет приёма посылки от отправителя
     * 
     * Метод должен быть имплементирован на стороне службы доставки.
     * 
     * Описание механики работы и дополнительные требования см. [здесь](https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#info/zapret_priema_posylki).
     * 
     * OperationId: prohibitOrderAcceptance.
     * HTTP: POST /delivery-sandbox/prohibitOrderAcceptance.
     *
     * @param ProhibitOrderAcceptancePrompt $prompt DTO запроса.
     *
     * @return ProhibitAcceptanceResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function prohibitAcceptance(ProhibitOrderAcceptancePrompt $prompt): ProhibitAcceptanceResponse
    {
        /** @var ProhibitAcceptanceResponse $response */
        $response = $this->request($prompt, ProhibitAcceptanceResponse::class);

        return $response;
    }

    /**
     * Добавление / изменение параметров доставки посылки
     * 
     * Метод используется для отправки в Avito параметров, относящихся к доставке посылки. <br />
     * В случае повторной передачи параметров, данные будут перезаписаны. <br />
     * Важно передавать актуальные данные. Например, если конечная стоимость доставки заказа изменилась, нужно отправить ее заново. <br />
     * 
     * ### Описание ошибок
     * | http code |   error code         |       error message                               |
     * |-----------|----------------------|---------------------------------------------------|
     * |    200    |   ORDER_ID_INVALID   | Could not found order by id and provider name     |
     * |    200    |   ORDER_ID_INVALID   | Incorrect order id                                |
     * |    200    |   PROPERTIES_INVALID | Failed to get properties from request             |
     * |    200    |   PROPERTIES_INVALID | Empty body                                        |
     * |    200    |   PROPERTIES_INVALID | Dimensions array must have 3 element              |
     * |    200    |   PROPERTIES_INVALID | Dimension must be greater than 0                  |
     * |    200    |   PROPERTIES_INVALID | Weight must be greater than 0                     |
     * |    200    |   PROPERTIES_INVALID | Delivery cost must be positive integer number     |
     * |    200    |   PROPERTIES_INVALID | Forbidden terminal change in current order status |
     * |    200    |   PROPERTIES_INVALID | Both terminals cannot be changed                  |
     * 
     * OperationId: setOrderProperties.
     * HTTP: POST /delivery-sandbox/order/properties.
     *
     * @param SetOrderPropertiesPrompt $prompt DTO запроса.
     *
     * @return SetPropertiesResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function setProperties(SetOrderPropertiesPrompt $prompt): SetPropertiesResponse
    {
        /** @var SetPropertiesResponse $response */
        $response = $this->request($prompt, SetPropertiesResponse::class);

        return $response;
    }

    /**
     * Фактический адрес приёма / возврата посылки
     * 
     * ### Фактический ПВЗ приема
     * Фактический ПВЗ приема посылки посылки нужен Avito для работы как с [агентскими](https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#info/agentskie_vozvraty), так и с [клиентскими](https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#info/klientskie_vozvraty) возвратами. 
     * Если получатель посылки откажется от её получения "на месте", то Avito понадобится показать ПВЗ возврата
     * отправителю, а этим ПВЗ будет фактический ПВЗ приема. Если же посылку нужно будет вернуть отправителю через клиентский 
     * возврат, то для создания отдельной возвратной посылки Avito критически важно знать тот же фактический ПВЗ приема.<br/>
     * 
     * Присылайте адрес в момент приема посылки от отправителя или чуть позже, если нет возможности это делать сразу.<br/>
     * 
     * ### Фактический адрес возврата
     * ПВЗ, из которого забрали возврат.<br/>
     * 
     * ### Про повторные запросы
     * В случае повторной передачи новые данные будут записаны.<br/>
     * 
     * ### Описание ошибок
     * | http code |   error code           |       error message                           |
     * |-----------|------------------------|-----------------------------------------------|
     * |    200    |   ORDER_ID_INVALID     | Could not found order by id and provider name |
     * |    200    |   ORDER_ID_INVALID     | Incorrect order id                            |
     * |    200    |   REAL_ADDRESS_INVALID | Failed to get real address from request       |
     * |    200    |   REAL_ADDRESS_INVALID | Incorrect terminal type                       |
     * |    200    |   REAL_ADDRESS_INVALID | Incorrect terminal number                     |
     * 
     * OperationId: setOrderRealAddress.
     * HTTP: POST /delivery-sandbox/order/realAddress.
     *
     * @param SetOrderRealAddressPrompt $prompt DTO запроса.
     *
     * @return SetRealAddressResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function setRealAddress(SetOrderRealAddressPrompt $prompt): SetRealAddressResponse
    {
        /** @var SetRealAddressResponse $response */
        $response = $this->request($prompt, SetRealAddressResponse::class);

        return $response;
    }
}
