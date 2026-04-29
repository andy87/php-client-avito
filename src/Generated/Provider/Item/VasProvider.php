<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider\Item;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\ApplyVasPrompt;
use Andy87\ClientsAvito\Generated\Prompt\VasPricesPrompt;
use Andy87\ClientsAvito\Generated\Response\Item\Vas\ApplyResponse;
use Andy87\ClientsAvito\Generated\Response\Item\Vas\PricesResponse;

/**
 * Группа методов "vas" раздела Avito API "Объявления".
 */
class VasProvider extends BaseAvitoProvider
{
    /**
     * Применение услуг продвижения
     * 
     * С помощью этого метода вы можете применить к опубликованному объявлению одну или несколько услуг продвижения (например, «XL-объявление», «Выделение цветом» и «До 10 раз больше просмотров на 7 дней»). В рамках одного запроса услуга может быть применена только один раз. 
     * 
     * Если для вашего объявления доступны значки (такие как «Без ДТП», «Срочно», «1 владелец»), при подключении услуги «XL-объявление» вы можете передать их список (не более трёх значков). В этом случае добавьте соответствующую услугу на 1, 2 или 3 значка.
     * 
     * [Подробнее об услугах продвижения](https://support.avito.ru/partitions/131)
     * 
     * Чтобы получить список доступных услуг и значков,  используйте метод `/core/v1/accounts/{userId}/vas/prices`.
     * 
     * Если заказ сформирован успешно, в ответ вы получите уникальные идентификаторы операций покупки для каждой из применяемых услуг. Позже эти идентификаторы можно будет использовать, чтобы узнать статус выполнения заказа.
     * 
     * В случае некорректного запроса метод вернет код ответа 400 и структуру, содержащую поле `code`. Возможные коды ошибок:
     *   - **1001** – один или несколько заголовков неправильно передаются;
     *   - **1002** – ошибка в URL;
     *   - **1003** – неверный идентификатор объявления из запроса;
     *   - **1004** – JSON из тела запроса не соответствует схеме или список идентификаторов услуг пустой;
     *   - **1005** – объявление, к которому вы хотите применить услуги, неактивно;
     *   - **1006** – неправильное количество выбранных значков для объявления.
     * Убедитесь, что в списке идентификаторов услуг есть услуга для покупки значков и она совпадает с количеством выбранных значков.
     *       - stickerpack_x1 – 1 значок
     *       - stickerpack_x2 – 2 значка
     *       - stickerpack_x3 – 3 значка
     *   - **1007** – некоторые из выбранных услуг не могут быть применены;
     *   - **1008** – в объявлении появились обязательные поля, которые нужно заполнить.
     * Отредактируйте объявление и попробуйте применить услугу снова.
     *   - **1009** – в кошельке не хватает средств для покупки услуг;
     *   - **1010** – вы пытались купить больше одной услуги увеличения просмотров;
     *   - **1011** – вы пытались купить значки, недоступные для выбранного объявления.
     * 
     * В случае внутренней ошибки на стороне Авито вернётся код ответа 500 и структура, содержащая поле `code`. Возможные коды ошибок:
     *   - **1000** – ошибка на стороне Авито, попробуйте позже или [напишите в поддержку](https://support.avito.ru/request/659?eventData[contextId]=117);
     * 
     * **Важно:** если ответ пришёл без кода ошибки или его значения нет в списке выше — возможно, услуга всё-таки была куплена. Подождите несколько минут: услуга продвижения появится в списке применённых, а если нет — попробуйте оформить её снова.
     * 
     * OperationId: applyVas.
     * HTTP: PUT /core/v2/items/{itemId}/vas/.
     *
     * @param ApplyVasPrompt $prompt DTO запроса.
     *
     * @return ApplyResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function apply(ApplyVasPrompt $prompt): ApplyResponse
    {
        /** @var ApplyResponse $response */
        $response = $this->request($prompt, ApplyResponse::class);

        return $response;
    }

    /**
     * Получение информации о стоимости услуг продвижения и доступных значках
     * 
     * Возвращает в ответ список объектов со следующей структурой:
     * - `itemId` – идентификатор объявления
     * - `vas` – список объектов, которые содержат информацию о стоимости дополнительных услуг и пакетов дополнительных услуг для каждого объявления. Структура объекта:
     *   - `slug` – идентификатор услуги или пакета услуг:
     *     - `highlight` — [услуга продвижения "Выделить"](https://support.avito.ru/articles/200026858)
     *     - `xl` – [услуга продвижения "XL-объявление"](https://support.avito.ru/articles/685)
     *     - `stickerpack_x1` – [1 значок на XL-объявлении](https://support.avito.ru/articles/2450) 
     *     - `stickerpack_x2` – [2 значка на XL-объявлении](https://support.avito.ru/articles/2450)
     *     - `stickerpack_x3` – [3 значка на XL-объявлении](https://support.avito.ru/articles/2450)
     * 
     *     - `x2_1` – [пакет "до 2 раз больше просмотров на 1 день"](https://support.avito.ru/articles/1398)
     *     - `x2_7` – [пакет "до 2 раз больше просмотров на 7 дней"](https://support.avito.ru/articles/1398)
     *     - `x5_1` – [пакет "до 5 раз больше просмотров на 1 день"](https://support.avito.ru/articles/1398)
     *     - `x5_7` – [пакет "до 5 раз больше просмотров на 7 дней"](https://support.avito.ru/articles/1398)
     *     - `x10_1` – [пакет "до 10 раз больше просмотров на 1 день"](https://support.avito.ru/articles/1398)
     *     - `x10_7` – [пакет "до 10 раз больше просмотров на 7 дней"](https://support.avito.ru/articles/1398)
     *     - `x15_1` – [пакет "до 15 раз больше просмотров на 1 день"](https://support.avito.ru/articles/1398)
     *     - `x15_7` – [пакет "до 15 раз больше просмотров на 7 дней"](https://support.avito.ru/articles/1398)
     *     - `x20_1` – [пакет "до 20 раз больше просмотров на 1 день"](https://support.avito.ru/articles/1398)
     *     - `x20_7` – [пакет "до 20 раз больше просмотров на 7 дней"](https://support.avito.ru/articles/1398)
     * 
     *   - `price` – цена в рублях с учетом скидки
     * 
     *   - `priceOld` – цена в рублях до применения скидки
     * 
     * - `stickers` – список объектов которые содержат доступные для объявления  [значки](https://support.avito.ru/articles/2450)
     *   - `id` – идентификатор значка
     *   - `title` – название значка
     *   - `description` – описание значка
     * 
     * OperationId: vasPrices.
     * HTTP: POST /core/v1/accounts/{userId}/vas/prices.
     *
     * @param VasPricesPrompt $prompt DTO запроса.
     *
     * @return PricesResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function prices(VasPricesPrompt $prompt): PricesResponse
    {
        /** @var PricesResponse $response */
        $response = $this->request($prompt, PricesResponse::class);

        return $response;
    }
}
