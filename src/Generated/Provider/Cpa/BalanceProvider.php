<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider\Cpa;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\BalanceInfoV2Prompt;
use Andy87\ClientsAvito\Generated\Prompt\BalanceInfoV3Prompt;
use Andy87\ClientsAvito\Generated\Response\Cpa\Balance\InfoV2Response;
use Andy87\ClientsAvito\Generated\Response\Cpa\Balance\InfoV3Response;

/**
 * Группа методов "balance" раздела Avito API "CPA Авито".
 */
class BalanceProvider extends BaseAvitoProvider
{
    /**
     * Баланс (deprecated)
     * 
     * __Используйте endpoint [balanceInfoV3](https://developers.avito.ru/api-catalog/cpa/documentation#operation/balanceInfoV3)__<br> Получение информации о балансе пользователя (баланс, долг, аванс текущего месяца) в копейках. Максимальное количество запросов в минуту - 1.
     * 
     * OperationId: balanceInfoV2.
     * HTTP: POST /cpa/v2/balanceInfo.
     *
     * @param BalanceInfoV2Prompt $prompt DTO запроса.
     *
     * @return InfoV2Response DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function infoV2(BalanceInfoV2Prompt $prompt): InfoV2Response
    {
        /** @var InfoV2Response $response */
        $response = $this->request($prompt, InfoV2Response::class);

        return $response;
    }

    /**
     * Баланс
     * 
     * Получение информации о текущем балансе пользователя в копейках. Максимальное количество запросов в минуту - 50.
     * 
     * OperationId: balanceInfoV3.
     * HTTP: POST /cpa/v3/balanceInfo.
     *
     * @param BalanceInfoV3Prompt $prompt DTO запроса.
     *
     * @return InfoV3Response DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function infoV3(BalanceInfoV3Prompt $prompt): InfoV3Response
    {
        /** @var InfoV3Response $response */
        $response = $this->request($prompt, InfoV3Response::class);

        return $response;
    }
}
