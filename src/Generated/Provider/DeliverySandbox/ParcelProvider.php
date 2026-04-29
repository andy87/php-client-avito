<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider\DeliverySandbox;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\CancelParcelPrompt;
use Andy87\ClientsAvito\Generated\Prompt\ChangeParcelResultPrompt;
use Andy87\ClientsAvito\Generated\Prompt\CreateParcelPrompt;
use Andy87\ClientsAvito\Generated\Response\DeliverySandbox\Parcel\CancelResponse;
use Andy87\ClientsAvito\Generated\Response\DeliverySandbox\Parcel\ChangeResultResponse;
use Andy87\ClientsAvito\Generated\Response\DeliverySandbox\Parcel\CreateResponse;

/**
 * Группа методов "parcel" раздела Avito API "Доставка".
 */
class ParcelProvider extends BaseAvitoProvider
{
    /**
     * Отмена посылки
     * 
     * Метод должен быть имплементирован на стороне службы доставки.
     * 
     * Описание механики работы и дополнительные требования см. [здесь](https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#info/otmena_posylki).
     * 
     * OperationId: cancelParcel.
     * HTTP: POST /delivery-sandbox/cancelParcel.
     *
     * @param CancelParcelPrompt $prompt DTO запроса.
     *
     * @return CancelResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function cancel(CancelParcelPrompt $prompt): CancelResponse
    {
        /** @var CancelResponse $response */
        $response = $this->request($prompt, CancelResponse::class);

        return $response;
    }

    /**
     * Отправка результата исполнения заявки
     * 
     * Описание механики изменения посылок [здесь](https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#info/izmenenie_svoystv_posylok).
     * 
     * Метод для передачи результата исполнения заявки, созданной с помощью метода [/changeParcels](#operation/ChangeParcels).
     * 
     * ### Описание ошибок
     * | http code |   error code         |       причина ошибки                                                                                                                                                 |
     * |-----------|----------------------|----------------------------------------------------------------------------------------------------------------------------------------------------------------------|
     * |    200    | ID_INVALID           | “id” заявки невалидный.                                                                                                                                              |
     * |    200    | NOT_FOUND            | заявка с “id” не найдена.                                                                                                                                            |
     * |    200    | STATUS_INVALID       | заявка не может быть переведена в статус указанный в запросе.                                                                                                        |
     * |    200    | FAILED_REASON_MISSES | отсутствует причина, по которой заявка не может быть исполнена. Данный код ошибки будет возвращен при статусе заявки declined и отсутствующем или пустом поле reason.|
     * |    200    | PARCEL_CLOSED        | посылка, связанная с заявкой, уже неактивная (была получена, утеряна или ушла на возвратное движение).                                              |
     * 
     * ### Порядок повторных попыток
     * 
     * - ID_INVALID, NOT_FOUND: повторные отправки запросов не помогут, имеет место ошибка валидации номера заявки.
     * - STATUS_INVALID: может помочь повтор с другим, корректным, статусом.
     * - FAILED_REASON_MISSES: повторная отправка возможна после заполнения поля reason для заявки в статусе declined или отправки запроса со статусом approved.
     * - PARCEL_CLOSED: нет смысла отправлять запрос повторно, данный код означает, что изменение свойства для посылки более не актуально так как посылка вручена или изменилось направление движение посылки.
     * - HTTP 500: означает недоступность API, необходим повтор.
     * 
     * 
     * ### Возможные причины для отклонения заявки и коды приведены в таблице
     * 
     * | Тип заявки               |   reason code                   |       Описание                                                             |
     * |--------------------------|---------------------------------|----------------------------------------------------------------------------|
     * | prohibitParcelAcceptance | already_received                | Посылка уже была принята от продавца и запрет её приёма невозможен.        |
     * | prohibitParcelAcceptance | parcel_not_found                | Посылка не найдена.                                                        |
     * | prohibitParcelReceive    | already_received                | Посылка уже была вручена покупателю и запрет выдачи невозможен.            |
     * | prohibitParcelReceive    | parcel_not_found                | Посылка не найдена.                                                        |
     * | extendParcelStorage      | storage_period_already_exceeded | Продление срока хранения для посылки уже выполнялось.                      |
     * | extendParcelStorage      | invalid_parcel_status           | Продление срока хранения невозможно в текущем состоянии (статусе посылки). |
     * | extendParcelStorage      | parcel_not_found                | Посылка не найдена.                                                        |
     * | любой                    | текст в свободной форме         | Причина отклонения, которая отличается от стандартизированных              |
     * 
     * Для описанных сценариев важно использовать стандартизированные причины для отклонения заявки. Это может влиять на политику ретраев и другие внутренние процессы внутри Avito.
     * Список стандартных причин может расширяться в будущем в зависимости от статистики использования и возникающих корнер-кейсов.
     * 
     * OperationId: ChangeParcelResult.
     * HTTP: POST /delivery/order/changeParcelResult.
     *
     * @param ChangeParcelResultPrompt $prompt DTO запроса.
     *
     * @return ChangeResultResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function changeResult(ChangeParcelResultPrompt $prompt): ChangeResultResponse
    {
        /** @var ChangeResultResponse $response */
        $response = $this->request($prompt, ChangeResultResponse::class);

        return $response;
    }

    /**
     * Создание посылки
     * 
     * Метод реализуется на стороне службы доставки.
     * 
     * Описание механики работы и дополнительные требования см. [здесь](https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#info/sozdanie_posylki).
     * 
     * OperationId: createParcel.
     * HTTP: POST /createParcel.
     *
     * @param CreateParcelPrompt $prompt DTO запроса.
     *
     * @return CreateResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function create(CreateParcelPrompt $prompt): CreateResponse
    {
        /** @var CreateResponse $response */
        $response = $this->request($prompt, CreateResponse::class);

        return $response;
    }
}
