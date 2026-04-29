<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider\Item;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\AccountSpendingsPrompt;
use Andy87\ClientsAvito\Generated\Response\Item\Account\SpendingsResponse;

/**
 * Группа методов "account" раздела Avito API "Объявления".
 */
class AccountProvider extends BaseAvitoProvider
{
    /**
     * Получение статистики расходов профиля
     * 
     * Получение статистики расходов профиля.
     * 
     * **Внимание:** Глубина данных статистики такого запроса ограничена 270 днями.
     * 
     * **Внимание:** Система позволяет делать не более одного запроса в минуту на данный метод.
     * 
     * ### Группировки расходов
     * Используйте группировки, чтобы получать конкретную статистику. Доступные группировки:
     * 
     *   - **day** — по дням;
     *   - **week** — по неделям;
     *   - **month** — по месяцам.
     * 
     * 
     * ### Доступные типы расходов
     * 
     *   - **all** - Все расходы в копейках. Сколько всего денег вы потратили на объявления и прочие услуги.
     *     - **promotion** - Расходы на продвижение в копейках. Сколько денег вы потратили на продвижение объявлений и услуги, которые влияют на внешний вид объявления.
     *     - **presence** - Расходы на размещение и целевые действия в копейках. Сколько денег вы потратили на размещение объявлений и целевые действия с ними — просмотры, чаты, звонки и отклики.
     *     - **commission** - Комиссия в копейках. Какую комиссию вы заплатили за заказы с Авито Доставкой, которые приняли покупатели, а также за бронирование жилья.
     *     - **rest** - Остальные расходы в копейках. Сколько денег вы потратили на чат-ботов и услуги, которые система не смогла распознать.
     * 
     * OperationId: accountSpendings.
     * HTTP: POST /stats/v2/accounts/{user_id}/spendings.
     *
     * @param AccountSpendingsPrompt $prompt DTO запроса.
     *
     * @return SpendingsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function spendings(AccountSpendingsPrompt $prompt): SpendingsResponse
    {
        /** @var SpendingsResponse $response */
        $response = $this->request($prompt, SpendingsResponse::class);

        return $response;
    }
}
