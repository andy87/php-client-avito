<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider\DeliverySandbox;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\V1CancelParcelPrompt;
use Andy87\ClientsAvito\Generated\Prompt\V1cancelAnnouncementPrompt;
use Andy87\ClientsAvito\Generated\Prompt\V1changeParcelPrompt;
use Andy87\ClientsAvito\Generated\Prompt\V1createAnnouncementPrompt;
use Andy87\ClientsAvito\Generated\Prompt\V1getAnnouncementEventPrompt;
use Andy87\ClientsAvito\Generated\Prompt\V1getChangeParcelInfoPrompt;
use Andy87\ClientsAvito\Generated\Prompt\V1getParcelInfoPrompt;
use Andy87\ClientsAvito\Generated\Prompt\V1getRegisteredParcelIDPrompt;
use Andy87\ClientsAvito\Generated\Response\DeliverySandbox\V\CancelAnnouncementResponse;
use Andy87\ClientsAvito\Generated\Response\DeliverySandbox\V\CancelParcelResponse;
use Andy87\ClientsAvito\Generated\Response\DeliverySandbox\V\ChangeParcelResponse;
use Andy87\ClientsAvito\Generated\Response\DeliverySandbox\V\CreateAnnouncementResponse;
use Andy87\ClientsAvito\Generated\Response\DeliverySandbox\V\GetAnnouncementEventResponse;
use Andy87\ClientsAvito\Generated\Response\DeliverySandbox\V\GetChangeParcelInfoResponse;
use Andy87\ClientsAvito\Generated\Response\DeliverySandbox\V\GetParcelInfoResponse;
use Andy87\ClientsAvito\Generated\Response\DeliverySandbox\V\GetRegisteredParcelIDResponse;

/**
 * Группа методов "v" раздела Avito API "Доставка".
 */
class VProvider extends BaseAvitoProvider
{
    /**
     * Отправка события об отмене тестового анонса
     * 
     * Метод доступен только в Песочнице.
     * 
     * Описание работы анонсов [здесь](https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#info/anonsy).
     * 
     * Метод запускает процесс отмены тестового анонса.
     * При успешном выполнении в ответе должен быть статус success. По предоставленному вами url (параметр options.urlToCancelAnnouncement)
     * должно прийти сообщение об отмене анонса.
     * 
     * ### Вариант использования
     * Метод призван облегчить тестирование интеграции вашего API по обмену анонсами с Avito.
     * В метод необходимо передать ID тестового анонса, созданного ранее посредством [метода создания тестового анонса](#operation/v1createAnnouncement).
     * 
     * ### Описание ошибок
     * | http code |   error code                |
     * |-----------|-----------------------------|
     * |    200    | VALIDATION_ERROR            |
     * |    200    | ANNOUNCEMENT_NOT_FOUND      |
     * |    500    | INTERNAL_ERROR              |
     * 
     * OperationId: v1cancelAnnouncement.
     * HTTP: POST /delivery-sandbox/v1/cancelAnnouncement.
     *
     * @param V1cancelAnnouncementPrompt $prompt DTO запроса.
     *
     * @return CancelAnnouncementResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function CancelAnnouncement(V1cancelAnnouncementPrompt $prompt): CancelAnnouncementResponse
    {
        /** @var CancelAnnouncementResponse $response */
        $response = $this->request($prompt, CancelAnnouncementResponse::class);

        return $response;
    }

    /**
     * Отмена тестовой посылки
     * 
     * Метод доступен только в Песочнице.
     * 
     * Метод инициирует [запрет приёма посылки](#operation/prohibitOrderAcceptance) в службе доставки и, если он состоялся, то посылка отменяется.
     * Отменить можно только те посылки, которые были созданы с помощью [метода создания тестовой посылки](#operation/v1createParcel).
     * 
     * По умолчанию запрос на запрет приема посылки будет отправлен в мок. Чтобы изменить это поведение и получить запрос у себя в системе,
     * воспользуйтесь параметром `options.cancelationUrl`.
     * 
     * OperationId: v1CancelParcel.
     * HTTP: POST /delivery-sandbox/v1/cancelParcel.
     *
     * @param V1CancelParcelPrompt $prompt DTO запроса.
     *
     * @return CancelParcelResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function CancelParcel(V1CancelParcelPrompt $prompt): CancelParcelResponse
    {
        /** @var CancelParcelResponse $response */
        $response = $this->request($prompt, CancelParcelResponse::class);

        return $response;
    }

    /**
     * Создание заявки на изменение данных тестовой посылки
     * 
     * Метод доступен только в Песочнице.
     * 
     * Описание механики изменения посылок [здесь](https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#info/izmenenie_svoystv_posylok).
     * 
     * Метод создаёт заявку на изменение данных посылки. Например, на изменение ФИО и телефона получателя.
     * 
     * По умолчанию запрос на создание заявки не будет отправлен в вашу систему. Чтобы это произошло, необходимо
     * заполнить параметр options.changeParcelUrl.
     * 
     * OperationId: v1changeParcel.
     * HTTP: POST /delivery-sandbox/v1/changeParcel.
     *
     * @param V1changeParcelPrompt $prompt DTO запроса.
     *
     * @return ChangeParcelResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function ChangeParcel(V1changeParcelPrompt $prompt): ChangeParcelResponse
    {
        /** @var ChangeParcelResponse $response */
        $response = $this->request($prompt, ChangeParcelResponse::class);

        return $response;
    }

    /**
     * Создание тестового анонса
     * 
     * Метод доступен только в Песочнице.
     * 
     * Описание работы анонсов [здесь](https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#info/anonsy).
     * 
     * Метод запускает процесс создания тестового анонса.
     * При успешном выполнении в ответе должен быть статус success, а предоставленный анонс должен прийти по указанному 
     * вами URL (параметр options.urlToSendAnnouncement).
     * 
     * При формировании тестового анонса необходимо указать ID тестовых посылок (параметр packages.parcelIDs). 
     * ID тестовых посылок можно узнать при помощи двух методов [создания тестовой посылки](#operation/v1createParcel)
     * и [получения ее ID](#operation/v1getRegisteredParcelID). Обращаем внимание, что для тестирования приема входящих
     * анонсов необходимо создать кросс-доставочную посылку (в параметре options.xDelivery.leg выставить флаг X_DELIVERY_LAST_LEG).
     * 
     * ### Вариант использования
     * Метод призван облегчить тестирование интеграции вашего API по обмену анонсами с Avito.
     * В метод необходимо передать ID посылки, а для этого её нужно создать. Таким образом, шаги будут выглядеть примерно так:
     * <ol>
     *   <li>Вызываем метод создания тестовой посылки. Получаем orderID.</li>
     *   <li>С полученным orderID вызываем метод получения ID тестовой посылки.</li>
     *   <li>С полученным ID посылки делаем запрос на создание анонса.</li>
     * </ol>
     * 
     * ### Описание ошибок
     * | http code |   error code       |
     * |-----------|--------------------|
     * |    200    | VALIDATION_ERROR   |
     * |    200    | OBJECT_EXISTS      |
     * |    500    | INTERNAL_ERROR     |
     * 
     * OperationId: v1createAnnouncement.
     * HTTP: POST /delivery-sandbox/v1/createAnnouncement.
     *
     * @param V1createAnnouncementPrompt $prompt DTO запроса.
     *
     * @return CreateAnnouncementResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function CreateAnnouncement(V1createAnnouncementPrompt $prompt): CreateAnnouncementResponse
    {
        /** @var CreateAnnouncementResponse $response */
        $response = $this->request($prompt, CreateAnnouncementResponse::class);

        return $response;
    }

    /**
     * Получение последнего события тестового анонса
     * 
     * Метод доступен только в Песочнице.
     * 
     * Описание работы анонсов [здесь](https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#info/anonsy).
     * 
     * Метод позволяет проверить последнее зарегистрированное событие по анонсу.
     * 
     * ### Вариант использования
     * Метод призван облегчить тестирование интеграции вашего api по обмену анонсами с Avito.
     * Метод можно использовать в связке с [методом отмены анонса](#operation/v1cancelAnnouncement) для проверки того, что 
     * последнее событие тестового анонса изменилось.
     * 
     * ### Описание ошибок
     * | http code |   error code                |
     * |-----------|-----------------------------|
     * |    200    | VALIDATION_ERROR            |
     * |    200    | ANNOUNCEMENT_NOT_FOUND      |
     * |    500    | INTERNAL_ERROR              |
     * 
     * OperationId: v1getAnnouncementEvent.
     * HTTP: POST /delivery-sandbox/v1/getAnnouncementEvent.
     *
     * @param V1getAnnouncementEventPrompt $prompt DTO запроса.
     *
     * @return GetAnnouncementEventResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function GetAnnouncementEvent(V1getAnnouncementEventPrompt $prompt): GetAnnouncementEventResponse
    {
        /** @var GetAnnouncementEventResponse $response */
        $response = $this->request($prompt, GetAnnouncementEventResponse::class);

        return $response;
    }

    /**
     * Получение информации об изменении тестовой посылки
     * 
     * Метод доступен только в Песочнице.
     * 
     * Описание механики изменения посылок [здесь](https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#info/izmenenie_svoystv_posylok).
     * 
     * Метод возвращает информацию о заявке на изменение данных тестовой посылки. Информацию можно получить только по тем заявкам
     * которые были созданы с помощью [метода создания заявки на изменение данных](#operation/v1changeParcel).
     * 
     * OperationId: v1getChangeParcelInfo.
     * HTTP: POST /delivery-sandbox/v1/getChangeParcelInfo.
     *
     * @param V1getChangeParcelInfoPrompt $prompt DTO запроса.
     *
     * @return GetChangeParcelInfoResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function GetChangeParcelInfo(V1getChangeParcelInfoPrompt $prompt): GetChangeParcelInfoResponse
    {
        /** @var GetChangeParcelInfoResponse $response */
        $response = $this->request($prompt, GetChangeParcelInfoResponse::class);

        return $response;
    }

    /**
     * Получение информации о тестовой посылке
     * 
     * Метод доступен только в Песочнице.
     * 
     * Метод возвращает информацию о тестовой посылке. Информацию можно получить только по тем посылкам
     * которые были созданы с помощью [метода создания тестовой посылки](#operation/v1createParcel).
     * 
     * OperationId: v1getParcelInfo.
     * HTTP: POST /delivery-sandbox/v1/getParcelInfo.
     *
     * @param V1getParcelInfoPrompt $prompt DTO запроса.
     *
     * @return GetParcelInfoResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function GetParcelInfo(V1getParcelInfoPrompt $prompt): GetParcelInfoResponse
    {
        /** @var GetParcelInfoResponse $response */
        $response = $this->request($prompt, GetParcelInfoResponse::class);

        return $response;
    }

    /**
     * Получение ID зарегистрированной тестовой посылки
     * 
     * Метод доступен только в Песочнице.
     * 
     * Метод возвращает идентификатор зарегистрированной тестовой посылки, созданной с помощью
     * [метода создания тестовой посылки](#operation/v1createParcel).
     * 
     * Вариант использования метода см. в описании [метода создания тестовой посылки](#operation/v1createParcel)
     * 
     * ### Описание ошибок
     * | http code |   error code       |       error message          |
     * |-----------|--------------------|------------------------------|
     * |    200    | NOT_FOUND          | parcel not found             |
     * |    200    | NOT_REGISTERED     | parcel not registered yet    |
     * |    200    | VALIDATION_ERROR   | wrong orderID format         |
     * |    500    | INTERNAL_ERROR     | get parcel id failed         |
     * 
     * OperationId: v1getRegisteredParcelID.
     * HTTP: POST /delivery-sandbox/v1/getRegisteredParcelID.
     *
     * @param V1getRegisteredParcelIDPrompt $prompt DTO запроса.
     *
     * @return GetRegisteredParcelIDResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function GetRegisteredParcelID(V1getRegisteredParcelIDPrompt $prompt): GetRegisteredParcelIDResponse
    {
        /** @var GetRegisteredParcelIDResponse $response */
        $response = $this->request($prompt, GetRegisteredParcelIDResponse::class);

        return $response;
    }
}
