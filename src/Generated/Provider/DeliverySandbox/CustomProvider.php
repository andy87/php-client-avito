<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider\DeliverySandbox;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\CustomAreaSchedulePrompt;
use Andy87\ClientsAvito\Generated\Response\DeliverySandbox\Custom\AreaScheduleResponse;

/**
 * Группа методов "custom" раздела Avito API "Доставка".
 */
class CustomProvider extends BaseAvitoProvider
{
    /**
     * Установка графика работы на определённый день
     * 
     * Метод можно использовать для установки расписания отличного от регулярного, например для того, чтобы установить
     * праздничные дни нерабочими или установить для них расписание отличное от регулярного.
     * 
     * OperationId: customAreaSchedule.
     * HTTP: POST /delivery-sandbox/areas/custom-schedule.
     *
     * @param CustomAreaSchedulePrompt $prompt DTO запроса.
     *
     * @return AreaScheduleResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function areaSchedule(CustomAreaSchedulePrompt $prompt): AreaScheduleResponse
    {
        /** @var AreaScheduleResponse $response */
        $response = $this->request($prompt, AreaScheduleResponse::class);

        return $response;
    }
}
