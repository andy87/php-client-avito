<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\ApiTrxPromoOpenApiApplyPrompt;
use Andy87\ClientsAvito\Generated\Prompt\ApiTrxPromoOpenApiCancelPrompt;
use Andy87\ClientsAvito\Generated\Prompt\ApiTrxPromoOpenApiCommissionsPrompt;
use Andy87\ClientsAvito\Generated\Response\ApiTrxPromoOpenApiApplyResponse;
use Andy87\ClientsAvito\Generated\Response\ApiTrxPromoOpenApiCancelResponse;
use Andy87\ClientsAvito\Generated\Response\ApiTrxPromoOpenApiCommissionsResponse;

/**
 * Provider раздела Avito API "TrxPromo".
 * @property-read Trxpromo\ApiProvider $api
 *
 */
class TrxpromoProvider extends BaseAvitoProvider
{
    protected const OPERATION_GROUPS = [
        'api' => Trxpromo\ApiProvider::class,
    ];

    /**
     * Запуск продвижения
     * 
     * Запуск продвижения. Этот метод применяет настройки продвижения к вашим объявлениям.
     * 
     * Укажите плату за продвижение: от 1 до 15%.  Ещё выберите даты продвижения: все свободные или период.
     * 
     * Плата за продвижение прибавится к базовой комиссии — получится общая комиссия. А базовая комиссия будет [зависеть от мгновенного бронирования](https://www.avito.ru/realestate/kratkosrochnaya_arenda/test_commission/)
     * 
     * Например, если выбрали плату за продвижение 2%, то в поле commission  напишите «200».
     * 
     * В ответе вы получите детальную информацию по каждому объявлению. Если продвижение не запустится, вы увидите ошибки:
     * 
     * 1001 — ошибка валидации параметров
     * 
     * 1002 — вам недоступно продвижение за комиссию
     * 
     * OperationId: api_trx_promo_open_api_apply.
     * HTTP: POST /trx-promo/1/apply.
     *
     * @param ApiTrxPromoOpenApiApplyPrompt $prompt DTO запроса.
     *
     * @return ApiTrxPromoOpenApiApplyResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function api_trx_promo_open_api_apply(ApiTrxPromoOpenApiApplyPrompt $prompt): ApiTrxPromoOpenApiApplyResponse
    {
        /** @var Trxpromo\ApiProvider $group */
        $group = $this->operationGroup('api');

        return $group->trxPromoOpenApiApply($prompt);
    }

    /**
     * Остановка продвижения
     * 
     * Этот метод позволяет отменить действующее и запланированное продвижение для объявления.
     * 
     * В ответе вы получите детальную информацию по каждому объявлению. Если продвижение не отменится, в ответе вы получите ошибки:
     * 
     * 1001 — ошибка валидации параметров
     * 
     * 1002 — вам недоступно продвижение за комиссию
     * 
     * OperationId: api_trx_promo_open_api_cancel.
     * HTTP: POST /trx-promo/1/cancel.
     *
     * @param ApiTrxPromoOpenApiCancelPrompt $prompt DTO запроса.
     *
     * @return ApiTrxPromoOpenApiCancelResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function api_trx_promo_open_api_cancel(ApiTrxPromoOpenApiCancelPrompt $prompt): ApiTrxPromoOpenApiCancelResponse
    {
        /** @var Trxpromo\ApiProvider $group */
        $group = $this->operationGroup('api');

        return $group->trxPromoOpenApiCancel($prompt);
    }

    /**
     * Проверка доступности продвижения и размера комиссий
     * 
     * Метод позволяет узнать, доступно ли продвижение за комиссию для объявлений, и посмотреть, какие комиссии будут.
     * 
     * В ответе вы получите детальную информацию по каждому объявлению. Коды ошибок:
     * 
     * 1001 — ошибка валидации параметров
     * 
     * OperationId: api_trx_promo_open_api_commissions.
     * HTTP: GET /trx-promo/1/commissions.
     *
     * @param ApiTrxPromoOpenApiCommissionsPrompt $prompt DTO запроса.
     *
     * @return ApiTrxPromoOpenApiCommissionsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function api_trx_promo_open_api_commissions(ApiTrxPromoOpenApiCommissionsPrompt $prompt): ApiTrxPromoOpenApiCommissionsResponse
    {
        /** @var Trxpromo\ApiProvider $group */
        $group = $this->operationGroup('api');

        return $group->trxPromoOpenApiCommissions($prompt);
    }
}
