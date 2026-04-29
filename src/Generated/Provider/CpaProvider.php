<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\BalanceInfoV2Prompt;
use Andy87\ClientsAvito\Generated\Prompt\BalanceInfoV3Prompt;
use Andy87\ClientsAvito\Generated\Prompt\ChatByActionIdPrompt;
use Andy87\ClientsAvito\Generated\Prompt\ChatsByTimeCpaCpaV2ChatsByTimePrompt;
use Andy87\ClientsAvito\Generated\Prompt\ChatsByTimePrompt;
use Andy87\ClientsAvito\Generated\Prompt\CreateComplaintByActionIdPrompt;
use Andy87\ClientsAvito\Generated\Prompt\GetCallByIdV2Prompt;
use Andy87\ClientsAvito\Generated\Prompt\GetCallPrompt;
use Andy87\ClientsAvito\Generated\Prompt\GetCallsByTimeV2Prompt;
use Andy87\ClientsAvito\Generated\Prompt\PhonesInfoFromChatsPrompt;
use Andy87\ClientsAvito\Generated\Prompt\PostCreateComplaintPrompt;
use Andy87\ClientsAvito\Generated\Response\BalanceInfoV2Response;
use Andy87\ClientsAvito\Generated\Response\BalanceInfoV3Response;
use Andy87\ClientsAvito\Generated\Response\ChatByActionIdResponse;
use Andy87\ClientsAvito\Generated\Response\ChatsByTimeCpaCpaV2ChatsByTimeResponse;
use Andy87\ClientsAvito\Generated\Response\ChatsByTimeResponse;
use Andy87\ClientsAvito\Generated\Response\CreateComplaintByActionIdResponse;
use Andy87\ClientsAvito\Generated\Response\GetCallByIdV2Response;
use Andy87\ClientsAvito\Generated\Response\GetCallResponse;
use Andy87\ClientsAvito\Generated\Response\GetCallsByTimeV2Response;
use Andy87\ClientsAvito\Generated\Response\PhonesInfoFromChatsResponse;
use Andy87\ClientsAvito\Generated\Response\PostCreateComplaintResponse;

/**
 * Provider раздела Avito API "CPA Авито".
 * @property-read Cpa\BalanceProvider $balance
 * @property-read Cpa\CallProvider $call
 * @property-read Cpa\CallsProvider $calls
 * @property-read Cpa\ChatProvider $chat
 * @property-read Cpa\ChatsProvider $chats
 * @property-read Cpa\ComplaintProvider $complaint
 * @property-read Cpa\PhonesProvider $phones
 * @property-read Cpa\PostProvider $post
 *
 */
class CpaProvider extends BaseAvitoProvider
{
    protected const OPERATION_GROUPS = [
        'balance' => Cpa\BalanceProvider::class,
        'call' => Cpa\CallProvider::class,
        'calls' => Cpa\CallsProvider::class,
        'chat' => Cpa\ChatProvider::class,
        'chats' => Cpa\ChatsProvider::class,
        'complaint' => Cpa\ComplaintProvider::class,
        'phones' => Cpa\PhonesProvider::class,
        'post' => Cpa\PostProvider::class,
    ];

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
     * @return BalanceInfoV2Response DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function balanceInfoV2(BalanceInfoV2Prompt $prompt): BalanceInfoV2Response
    {
        /** @var Cpa\BalanceProvider $group */
        $group = $this->operationGroup('balance');

        return $group->infoV2($prompt);
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
     * @return BalanceInfoV3Response DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function balanceInfoV3(BalanceInfoV3Prompt $prompt): BalanceInfoV3Response
    {
        /** @var Cpa\BalanceProvider $group */
        $group = $this->operationGroup('balance');

        return $group->infoV3($prompt);
    }

    /**
     * Чат
     * 
     * Получение модели чата по идентификатору Максимальное количество запросов в минуту - 3.
     * 
     * OperationId: chatByActionId.
     * HTTP: GET /cpa/v1/chatByActionId/{actionId}.
     *
     * @param ChatByActionIdPrompt $prompt DTO запроса.
     *
     * @return ChatByActionIdResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function chatByActionId(ChatByActionIdPrompt $prompt): ChatByActionIdResponse
    {
        /** @var Cpa\ChatProvider $group */
        $group = $this->operationGroup('chat');

        return $group->byActionId($prompt);
    }

    /**
     * Чаты по времени (deprecated)
     * 
     * Получение списка чатов по времени создания (deprecated). Максимальное количество запросов в минуту - 60.
     * 
     * OperationId: chatsByTime.
     * HTTP: POST /cpa/v1/chatsByTime.
     *
     * @param ChatsByTimePrompt $prompt DTO запроса.
     *
     * @return ChatsByTimeResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function chatsByTime(ChatsByTimePrompt $prompt): ChatsByTimeResponse
    {
        /** @var Cpa\ChatsProvider $group */
        $group = $this->operationGroup('chats');

        return $group->byTime($prompt);
    }

    /**
     * Чаты по времени
     * 
     * Получение списка чатов по времени создания. Максимальное количество запросов в минуту - 40.
     * 
     * OperationId: chatsByTime.
     * HTTP: POST /cpa/v2/chatsByTime.
     *
     * @param ChatsByTimeCpaCpaV2ChatsByTimePrompt $prompt DTO запроса.
     *
     * @return ChatsByTimeCpaCpaV2ChatsByTimeResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function chatsByTimeCpaCpaV2ChatsByTime(ChatsByTimeCpaCpaV2ChatsByTimePrompt $prompt): ChatsByTimeCpaCpaV2ChatsByTimeResponse
    {
        /** @var Cpa\ChatsProvider $group */
        $group = $this->operationGroup('chats');

        return $group->byTimeCpaCpaV2ChatsByTime($prompt);
    }

    /**
     * Создание жалобы для звонков/чатов
     * 
     * Создание жалобы на целевое действие по actionId. Максимальное количество запросов в минуту - 3.
     * 
     * OperationId: createComplaintByActionId.
     * HTTP: POST /cpa/v1/createComplaintByActionId.
     *
     * @param CreateComplaintByActionIdPrompt $prompt DTO запроса.
     *
     * @return CreateComplaintByActionIdResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function createComplaintByActionId(CreateComplaintByActionIdPrompt $prompt): CreateComplaintByActionIdResponse
    {
        /** @var Cpa\ComplaintProvider $group */
        $group = $this->operationGroup('complaint');

        return $group->createByActionId($prompt);
    }

    /**
     * Запись звонка (deprecated)
     * 
     * __DEPRECATED__
     * __Используйте endpoint [get_record_by_call_id](https://developers.avito.ru/api-catalog/calltracking/documentation#operation/get_record_by_call_id)__
     * Получение записи звонка по идентификатору
     * 
     * OperationId: getCall.
     * HTTP: GET /cpa/v1/call/{call_id}.
     *
     * @param GetCallPrompt $prompt DTO запроса.
     *
     * @return GetCallResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getCall(GetCallPrompt $prompt): GetCallResponse
    {
        /** @var Cpa\CallProvider $group */
        $group = $this->operationGroup('call');

        return $group->get($prompt);
    }

    /**
     * Звонок
     * 
     * Получение модели звонка по идентификатору
     * 
     * OperationId: getCallByIdV2.
     * HTTP: POST /cpa/v2/callById.
     *
     * @param GetCallByIdV2Prompt $prompt DTO запроса.
     *
     * @return GetCallByIdV2Response DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getCallByIdV2(GetCallByIdV2Prompt $prompt): GetCallByIdV2Response
    {
        /** @var Cpa\CallProvider $group */
        $group = $this->operationGroup('call');

        return $group->getByIdV2($prompt);
    }

    /**
     * Звонки по времени
     * 
     * Получение списка звонков по времени создания. Максимальное количество запросов в минуту - 1.
     * 
     * OperationId: getCallsByTimeV2.
     * HTTP: POST /cpa/v2/callsByTime.
     *
     * @param GetCallsByTimeV2Prompt $prompt DTO запроса.
     *
     * @return GetCallsByTimeV2Response DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getCallsByTimeV2(GetCallsByTimeV2Prompt $prompt): GetCallsByTimeV2Response
    {
        /** @var Cpa\CallsProvider $group */
        $group = $this->operationGroup('calls');

        return $group->getByTimeV2($prompt);
    }

    /**
     * Информация по номерам телефонов из целевых чатов
     * 
     * Получение информации по номерам телефонов из целевых чатов Максимальное количество запросов в минуту - 5.
     * 
     * OperationId: phonesInfoFromChats.
     * HTTP: POST /cpa/v1/phonesInfoFromChats.
     *
     * @param PhonesInfoFromChatsPrompt $prompt DTO запроса.
     *
     * @return PhonesInfoFromChatsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function phonesInfoFromChats(PhonesInfoFromChatsPrompt $prompt): PhonesInfoFromChatsResponse
    {
        /** @var Cpa\PhonesProvider $group */
        $group = $this->operationGroup('phones');

        return $group->infoFromChats($prompt);
    }

    /**
     * Создание жалобы для звонков
     * 
     * Создание жалобы на звонок по идентификатору. Максимальное количество запросов в минуту - 1.
     * 
     * OperationId: postCreateComplaint.
     * HTTP: POST /cpa/v1/createComplaint.
     *
     * @param PostCreateComplaintPrompt $prompt DTO запроса.
     *
     * @return PostCreateComplaintResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function postCreateComplaint(PostCreateComplaintPrompt $prompt): PostCreateComplaintResponse
    {
        /** @var Cpa\PostProvider $group */
        $group = $this->operationGroup('post');

        return $group->createComplaint($prompt);
    }
}
