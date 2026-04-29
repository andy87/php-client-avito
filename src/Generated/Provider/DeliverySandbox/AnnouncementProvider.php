<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider\DeliverySandbox;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\CancelAnnouncement3PLPrompt;
use Andy87\ClientsAvito\Generated\Prompt\CreateAnnouncement3PLPrompt;
use Andy87\ClientsAvito\Generated\Prompt\CreateAnnouncementPrompt;
use Andy87\ClientsAvito\Generated\Prompt\TrackAnnouncementPrompt;
use Andy87\ClientsAvito\Generated\Response\DeliverySandbox\Announcement\Cancel3PLResponse;
use Andy87\ClientsAvito\Generated\Response\DeliverySandbox\Announcement\Create3PLResponse;
use Andy87\ClientsAvito\Generated\Response\DeliverySandbox\Announcement\CreateResponse;
use Andy87\ClientsAvito\Generated\Response\DeliverySandbox\Announcement\TrackResponse;

/**
 * Группа методов "announcement" раздела Avito API "Доставка".
 */
class AnnouncementProvider extends BaseAvitoProvider
{
    /**
     * Отмена анонса в СД
     * 
     * Описание работы анонсов [здесь](https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#info/anonsy).
     * 
     * Метод реализуется на стороне службы доставки. Метод предназначен для отмены анонса.
     * 
     * OperationId: CancelAnnouncement3PL.
     * HTTP: POST /cancelAnnouncement.
     *
     * @param CancelAnnouncement3PLPrompt $prompt DTO запроса.
     *
     * @return Cancel3PLResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function cancel3PL(CancelAnnouncement3PLPrompt $prompt): Cancel3PLResponse
    {
        /** @var Cancel3PLResponse $response */
        $response = $this->request($prompt, Cancel3PLResponse::class);

        return $response;
    }

    /**
     * Создание анонса в Avito
     * 
     * Описание работы анонсов [здесь](https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#info/anonsy).
     * 
     * Создает анонс о планируемой отгрузке в Avito. После успешного создания анонс направляется в службу доставки указанную в поле "receiver".
     * 
     * OperationId: CreateAnnouncement.
     * HTTP: POST /delivery-sandbox/announcements/create.
     *
     * @param CreateAnnouncementPrompt $prompt DTO запроса.
     *
     * @return CreateResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function create(CreateAnnouncementPrompt $prompt): CreateResponse
    {
        /** @var CreateResponse $response */
        $response = $this->request($prompt, CreateResponse::class);

        return $response;
    }

    /**
     * Создание анонса в СД
     * 
     * Описание работы анонсов [здесь](https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#info/anonsy).
     * 
     * Метод реализуется на стороне службы доставки. Метод создает анонс о планируемой отгрузке из службы доставки, указанной в поле "sender", в службу доставки, указанную в поле "receiver".
     * 
     * OperationId: CreateAnnouncement3PL.
     * HTTP: POST /createAnnouncement.
     *
     * @param CreateAnnouncement3PLPrompt $prompt DTO запроса.
     *
     * @return Create3PLResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function create3PL(CreateAnnouncement3PLPrompt $prompt): Create3PLResponse
    {
        /** @var Create3PLResponse $response */
        $response = $this->request($prompt, Create3PLResponse::class);

        return $response;
    }

    /**
     * Трекинг анонсов
     * 
     * Описание работы анонсов [здесь](https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#info/anonsy).
     * 
     * Метод для приема треков по анонсу от служб доставок.
     * 
     * OperationId: TrackAnnouncement.
     * HTTP: POST /delivery-sandbox/announcements/track.
     *
     * @param TrackAnnouncementPrompt $prompt DTO запроса.
     *
     * @return TrackResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function track(TrackAnnouncementPrompt $prompt): TrackResponse
    {
        /** @var TrackResponse $response */
        $response = $this->request($prompt, TrackResponse::class);

        return $response;
    }
}
