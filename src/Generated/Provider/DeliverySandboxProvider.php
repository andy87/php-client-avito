<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\AddAreasSandboxPrompt;
use Andy87\ClientsAvito\Generated\Prompt\AddSortingCenterPrompt;
use Andy87\ClientsAvito\Generated\Prompt\AddTagsToSortingCenterPrompt;
use Andy87\ClientsAvito\Generated\Prompt\AddTariffSandboxV2Prompt;
use Andy87\ClientsAvito\Generated\Prompt\AddTerminalsSandboxPrompt;
use Andy87\ClientsAvito\Generated\Prompt\CancelAnnouncement3PLPrompt;
use Andy87\ClientsAvito\Generated\Prompt\CancelParcelPrompt;
use Andy87\ClientsAvito\Generated\Prompt\ChangeParcelResultPrompt;
use Andy87\ClientsAvito\Generated\Prompt\ChangeParcelsPrompt;
use Andy87\ClientsAvito\Generated\Prompt\CheckConfirmationCodePrompt;
use Andy87\ClientsAvito\Generated\Prompt\CreateAnnouncement3PLPrompt;
use Andy87\ClientsAvito\Generated\Prompt\CreateAnnouncementPrompt;
use Andy87\ClientsAvito\Generated\Prompt\CreateParcelPrompt;
use Andy87\ClientsAvito\Generated\Prompt\CreateSandboxParcelV2Prompt;
use Andy87\ClientsAvito\Generated\Prompt\CustomAreaSchedulePrompt;
use Andy87\ClientsAvito\Generated\Prompt\GetSortingCenterPrompt;
use Andy87\ClientsAvito\Generated\Prompt\GetTaskPrompt;
use Andy87\ClientsAvito\Generated\Prompt\ProhibitOrderAcceptancePrompt;
use Andy87\ClientsAvito\Generated\Prompt\SetOrderPropertiesPrompt;
use Andy87\ClientsAvito\Generated\Prompt\SetOrderRealAddressPrompt;
use Andy87\ClientsAvito\Generated\Prompt\TrackAnnouncementPrompt;
use Andy87\ClientsAvito\Generated\Prompt\TrackingPrompt;
use Andy87\ClientsAvito\Generated\Prompt\UpdateTermsPrompt;
use Andy87\ClientsAvito\Generated\Prompt\V1CancelParcelPrompt;
use Andy87\ClientsAvito\Generated\Prompt\V1cancelAnnouncementPrompt;
use Andy87\ClientsAvito\Generated\Prompt\V1changeParcelPrompt;
use Andy87\ClientsAvito\Generated\Prompt\V1createAnnouncementPrompt;
use Andy87\ClientsAvito\Generated\Prompt\V1getAnnouncementEventPrompt;
use Andy87\ClientsAvito\Generated\Prompt\V1getChangeParcelInfoPrompt;
use Andy87\ClientsAvito\Generated\Prompt\V1getParcelInfoPrompt;
use Andy87\ClientsAvito\Generated\Prompt\V1getRegisteredParcelIDPrompt;
use Andy87\ClientsAvito\Generated\Response\AddAreasSandboxResponse;
use Andy87\ClientsAvito\Generated\Response\AddSortingCenterResponse;
use Andy87\ClientsAvito\Generated\Response\AddTagsToSortingCenterResponse;
use Andy87\ClientsAvito\Generated\Response\AddTariffSandboxV2Response;
use Andy87\ClientsAvito\Generated\Response\AddTerminalsSandboxResponse;
use Andy87\ClientsAvito\Generated\Response\CancelAnnouncement3PLResponse;
use Andy87\ClientsAvito\Generated\Response\CancelParcelResponse;
use Andy87\ClientsAvito\Generated\Response\ChangeParcelResultResponse;
use Andy87\ClientsAvito\Generated\Response\ChangeParcelsResponse;
use Andy87\ClientsAvito\Generated\Response\CheckConfirmationCodeResponse;
use Andy87\ClientsAvito\Generated\Response\CreateAnnouncement3PLResponse;
use Andy87\ClientsAvito\Generated\Response\CreateAnnouncementResponse;
use Andy87\ClientsAvito\Generated\Response\CreateParcelResponse;
use Andy87\ClientsAvito\Generated\Response\CreateSandboxParcelV2Response;
use Andy87\ClientsAvito\Generated\Response\CustomAreaScheduleResponse;
use Andy87\ClientsAvito\Generated\Response\GetSortingCenterResponse;
use Andy87\ClientsAvito\Generated\Response\GetTaskResponse;
use Andy87\ClientsAvito\Generated\Response\ProhibitOrderAcceptanceResponse;
use Andy87\ClientsAvito\Generated\Response\SetOrderPropertiesResponse;
use Andy87\ClientsAvito\Generated\Response\SetOrderRealAddressResponse;
use Andy87\ClientsAvito\Generated\Response\TrackAnnouncementResponse;
use Andy87\ClientsAvito\Generated\Response\TrackingResponse;
use Andy87\ClientsAvito\Generated\Response\UpdateTermsResponse;
use Andy87\ClientsAvito\Generated\Response\V1CancelParcelResponse;
use Andy87\ClientsAvito\Generated\Response\V1cancelAnnouncementResponse;
use Andy87\ClientsAvito\Generated\Response\V1changeParcelResponse;
use Andy87\ClientsAvito\Generated\Response\V1createAnnouncementResponse;
use Andy87\ClientsAvito\Generated\Response\V1getAnnouncementEventResponse;
use Andy87\ClientsAvito\Generated\Response\V1getChangeParcelInfoResponse;
use Andy87\ClientsAvito\Generated\Response\V1getParcelInfoResponse;
use Andy87\ClientsAvito\Generated\Response\V1getRegisteredParcelIDResponse;

/**
 * Provider раздела Avito API "Доставка".
 * @property-read DeliverySandbox\AnnouncementProvider $announcement
 * @property-read DeliverySandbox\AreasProvider $areas
 * @property-read DeliverySandbox\ConfirmationProvider $confirmation
 * @property-read DeliverySandbox\CustomProvider $custom
 * @property-read DeliverySandbox\GeneralProvider $general
 * @property-read DeliverySandbox\OrderProvider $order
 * @property-read DeliverySandbox\ParcelProvider $parcel
 * @property-read DeliverySandbox\ParcelsProvider $parcels
 * @property-read DeliverySandbox\SandboxProvider $sandbox
 * @property-read DeliverySandbox\SortingProvider $sorting
 * @property-read DeliverySandbox\TagsProvider $tags
 * @property-read DeliverySandbox\TariffProvider $tariff
 * @property-read DeliverySandbox\TaskProvider $task
 * @property-read DeliverySandbox\TerminalsProvider $terminals
 * @property-read DeliverySandbox\TermsProvider $terms
 * @property-read DeliverySandbox\VProvider $v
 *
 */
class DeliverySandboxProvider extends BaseAvitoProvider
{
    protected const OPERATION_GROUPS = [
        'announcement' => DeliverySandbox\AnnouncementProvider::class,
        'areas' => DeliverySandbox\AreasProvider::class,
        'confirmation' => DeliverySandbox\ConfirmationProvider::class,
        'custom' => DeliverySandbox\CustomProvider::class,
        'general' => DeliverySandbox\GeneralProvider::class,
        'order' => DeliverySandbox\OrderProvider::class,
        'parcel' => DeliverySandbox\ParcelProvider::class,
        'parcels' => DeliverySandbox\ParcelsProvider::class,
        'sandbox' => DeliverySandbox\SandboxProvider::class,
        'sorting' => DeliverySandbox\SortingProvider::class,
        'tags' => DeliverySandbox\TagsProvider::class,
        'tariff' => DeliverySandbox\TariffProvider::class,
        'task' => DeliverySandbox\TaskProvider::class,
        'terminals' => DeliverySandbox\TerminalsProvider::class,
        'terms' => DeliverySandbox\TermsProvider::class,
        'v' => DeliverySandbox\VProvider::class,
    ];

    /**
     * Загрузить области доставки
     * 
     * Метод позволяет загрузить области, в которых возможна услуга курьерской доставки/забора
     * В качестве классификатора адресов используются индесы Почты России, то есть в 1 индекс включаются все адреса,
     * которые к нему относятся.
     * 
     * ### Описание ошибок
     * | http code |   error code      |       error message                                       |
     * |-----------|-------------------|-----------------------------------------------------------|
     * |    200    | URL_PATH_INVALID  | Tariff id must be int url path                            |
     * |    200    | TERMINALS_INVALID | Failed to convert areas: {error description}          |
     * |    200    | TERMINALS_INVALID | Failed to get terminals from request: {error description} |
     * 
     * OperationId: AddAreasSandbox.
     * HTTP: POST /delivery-sandbox/tariffs/{tariff_id}/areas.
     *
     * @param AddAreasSandboxPrompt $prompt DTO запроса.
     *
     * @return AddAreasSandboxResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function AddAreasSandbox(AddAreasSandboxPrompt $prompt): AddAreasSandboxResponse
    {
        /** @var DeliverySandbox\AreasProvider $group */
        $group = $this->operationGroup('areas');

        return $group->addSandbox($prompt);
    }

    /**
     * Загрузить сортировочные центры
     * 
     * Создание задачи на загрузку своих сортировочных центров и первичная валидация данных.  
     * После загрузки сортировочных центров им необходимо проставить тэги отдельным запросом  
     * 
     * Данные необходимо загружать по мере обновления данных о сортировочных центрах (как правило это 1-2 раза в сутки)
     * 
     * ### Описание ошибок
     * | http code |   error code                  |       error message                        |
     * |-----------|-------------------------------|--------------------------------------------|
     * |    200    | INVALID_ENTITY                | Failed to get sorting centers from request |
     * |    200    | INVALID_ENTITY                | Empty sorting centers list                 |
     * |    200    | INVALID_ENTITY                | Failed to convert sorting centers          |
     * |    500    | FAILED_TO_ADD_SORTING_CENTERS | Failed to add sorting centers              |
     * 
     * Итоговый результат операции необходимо проверять через:  
     * [метод получения результата выполнения задачи](#operation/GetTask)
     * 
     * OperationId: AddSortingCenter.
     * HTTP: POST /delivery-sandbox/tariffs/sorting-center.
     *
     * @param AddSortingCenterPrompt $prompt DTO запроса.
     *
     * @return AddSortingCenterResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function AddSortingCenter(AddSortingCenterPrompt $prompt): AddSortingCenterResponse
    {
        /** @var DeliverySandbox\SortingProvider $group */
        $group = $this->operationGroup('sorting');

        return $group->addCenter($prompt);
    }

    /**
     * Установка тэгов своим и/или чужим сортировочным центрам
     * 
     * Создание задачи на установку тэгов из своего тарифа своим и/или чужим сортировочным центрам.  
     * В рамках одного тарифа одному сортировочному центру может соответствовать только один тэг.  
     * Перепривязка сортировочного центра к тэгу в рамках одного тарифа невозможна, в случае ошибочной привязки необходимо сообщить об этом своему менеджеру по логистике.   
     * 
     * ### Описание ошибок
     * | http code |   error code                          |           error message                                      |
     * |-----------|---------------------------------------|--------------------------------------------------------------|
     * |    200    | INVALID_ENTITY                        | Failed to get tags from request                              |
     * |    200    | INVALID_ENTITY                        | Empty tags list                                              |
     * |    200    | INVALID_ENTITY                        | Failed to get tariff from path                               |
     * |    200    | INVALID_ENTITY                        | Zero tariff_if in path                                       |
     * |    200    | INVALID_ENTITY                        | Failed to convert tags                                       |
     * |    500    | FAILED_TO_ADD_TAGS_TO_SORTING_CENTERS | Failed to add tags to sorting centers                        |
     * 
     * 
     * Итоговый результат операции необходимо проверять через:  
     * [метод получения результата выполнения задачи](#operation/GetTask)
     * 
     * OperationId: AddTagsToSortingCenter.
     * HTTP: POST /delivery-sandbox/tariffs/{tariff_id}/tagged-sorting-centers.
     *
     * @param AddTagsToSortingCenterPrompt $prompt DTO запроса.
     *
     * @return AddTagsToSortingCenterResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function AddTagsToSortingCenter(AddTagsToSortingCenterPrompt $prompt): AddTagsToSortingCenterResponse
    {
        /** @var DeliverySandbox\TagsProvider $group */
        $group = $this->operationGroup('tags');

        return $group->addToSortingCenter($prompt);
    }

    /**
     * Загрузить новый тариф v2
     * 
     * Нефункциональные требования:
     * 
     * Максимальный размер тела запроса - 400MB<br/>
     * Максимальное количество направлений - 1 миллион
     * 
     * Метод позволяет службам доставки самостоятельно управлять:
     *   1. Доступностью направлений доставки
     *   2. Стоимостью доставки по каждому из направлений
     *   3. Сроками доставки по каждому из направлений
     * 
     * ## Используемые термины:
     * 
     * - **Пункт выдачи заказов (ПВЗ)(Terminal)** - место, в котором в зависимости от списка предоставляемых услуг пользователь может сдать/получить/вернуть посылку
     * 
     * - **Область доставки (Area)** - зона (список индексов Почты России), в которой осуществляется курьерская доставка/забор посылок
     * 
     * - **Хаб/Сортировочный центр (SortingCenter)** - место, где сортируются посылки для дальнейшей отправки в ПВЗ (используется для кросс-доставки)
     * 
     * - **Тэг направления(Tag)** - используется для объединения в группу ПВЗ/Областей доставки/Сортировочных центров
     *     является свойством объекта ПВЗ или области доставки.
     *     
     *     Допускается распределять тэги по ПВЗ/Областям доставки/Сортировочным центрам любым образом, при этом наиболее распространенным критерием для тэгирования является географическая близость ПВЗ/Областей доставки/Сортировочных центров друг к другу или принадлежность к одному административному субъекту.
     * 
     * - **Тарифная зона доставки(TariffZone)** - список правил и параметров необходимых для расчета стоимости различных услуг, которые будут оказаны в процессе доставки заказа, в том числе с разделением на C2C и B2C.
     *     Сумма стоимостей по всем услугам перечисленным в тарифной зоне равна расчетной стоимости, которую Авито заплатит службе доставки за доставку заказа.
     *     Важно отметить, что допускается загрузка только уникальных тарифных зон - то есть, в одном тарифе не может существовать двух тарифных зон с одинаковыми значениями поля *items*
     * 
     * - **Зона сроков доставки(TermsZone)** - список правил и параметров необходимых для расчета сроков доставки.
     *     Как минимальный, так и максимальный срок передаются в рабочих днях.
     *     Важно отметить, что допускается загрузка только уникальных зон сроков доставки - то есть, в одном тарифе не может существовать двух зон сроков доставки с одинаковыми значениями поля *minTerm* и *maxTerm*
     * 
     * - **Направление доставки(Direction)** - объект определяющий возможность доставки из directionTagFrom (группа ПВЗ / список индексов_Почты_России в случае курьерской доставки), в directionTagTo (группу ПВЗ / список индексов_Почты_России в случае курьерской доставки).
     *     При этом направление так же определяет условия, на которых доставка будет осуществляться: тарифную зону и сроки доставки
     * 
     * - **Тарифный план(Tariff)** - список всех возможных направлений доставки, действующий на определенном интервале времени (например, до подписания договора об изменении тарифов)
     * 
     * ## Диаграмма связей между используемыми объектами:
     * 
     * <img src="https://www.avito.st/s/avito/components/api-description/delivery/images/tariff_diagram_v2.svg" />
     * 
     * ### Инсталляция (первое добавление службой доставки тарифов):
     * >1. [Создать тариф](#operation/AddTariffSandboxV2)
     * >Для каждого направления в тарифе нужно указать те типы доставки, которые по нему доступны.
     * >2. Загрузить [ПВЗ](#operation/AddTerminalsSandbox)/[Области_доставки](#operation/AddAreasSandbox) и свои [сортировочные центры](#operation/AddSortingCenter), если требуется
     * --
     * 
     * *Дополнительно для подключения к кросс доставке:*  
     * >3. [Скачать чужие сортировочные центры](#operation/GetSortingCenter)  
     * >4. Установить чужим сортировочным центрам тэги из своего тарифа, который был загружен на шаге 1  
     * >5. [Загрузить чужие сортировочные центры с тэгами из своего тарифа](#operation/AddTagsToSortingCenter)  
     * 
     * #### Схема работы кросс доставочного тарифа
     * 
     * <img src="https://avito.st/static/ims/1a890394-cde9-49cf-b2e0-dd5b00dd9a97_new_xdelivery_common_2490x1380.png" />
     * 
     * ### Бесшовное обновление тарифа
     * 
     * При использовании данного подхода к обновлению тарифа отсутствует момент даунтайма - то есть отсутствия ПВЗ/Областей_доставки службы доставки на карте Авито.
     *   1. Необходимо загрузить новый тариф и сообщить номер залитого тарифа вашему менеджеру по логистике в Авито
     *     - Для загрузки тарифа используется [метод загрузки тарифа](#operation/AddTariffSandbox)
     *     - Для получения результата загрузки тарифа используется [метод получения результата выполнения задачи](#operation/GetTariffTaskSandbox). Необходимо убедиться в отсутствии ошибок загрузки тарифа
     *   2. Дождаться пока ваш менеджер подтвердит, что загруженные данные корректны
     *   3. Добавить к загруженному выше тарифу ПВЗ/Области доставки/Сортировочные центры
     *     - Для загрузки ПВЗ используется [метод загрузки ПВЗ](#operation/AddTerminalsSandbox). Важно учесть, что в URL необходимо указать id загруженного на предыдущем этапе тарифа
     *     - Для получения результата загрузки ПВЗ используется [метод получения результата выполнения задачи](#operation/GetTerminalsTaskSandbox). Необходимо убедиться в отсутствии ошибок загрузки ПВЗ
     *   4. Сообщить вашему менеджеру по логистике в Авито о том, что ПВЗ к тарифу успешно загружены
     * 
     * ### Описание ошибок
     * | http code |   error code   |       error message                                      |
     * |-----------|----------------|----------------------------------------------------------|
     * |    200    | INVALID_ENTITY | Failed to convert entities: {error description}          |
     * |    200    | INVALID_ENTITY | Failed to get entities from request: {error description} |
     * 
     * OperationId: AddTariffSandboxV2.
     * HTTP: POST /delivery-sandbox/tariffsV2.
     *
     * @param AddTariffSandboxV2Prompt $prompt DTO запроса.
     *
     * @return AddTariffSandboxV2Response DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function AddTariffSandboxV2(AddTariffSandboxV2Prompt $prompt): AddTariffSandboxV2Response
    {
        /** @var DeliverySandbox\TariffProvider $group */
        $group = $this->operationGroup('tariff');

        return $group->addSandboxV2($prompt);
    }

    /**
     * Загрузить терминалы
     * 
     * Загрузить новые терминалы
     * 
     * Данные необходимо загружать по мере обновления данных о ПВЗ (как правило это 1-2 раза в сутки)
     * 
     * ### Система апрува терминалов
     * 
     * При загрузке терминалов система автоматически сравнивает новые данные с текущими в базе.
     * Если процент критичных изменений превышает заданный порог — задача переходит в статус `pending_approval`
     * и требует ручного одобрения.
     * 
     * **Критичные изменения** (хотя бы одно из):
     * - Добавление нового терминала
     * - Удаление терминала
     * - Изменение сервисов (приём/выдача/возврат)
     * - Изменение ограничений (вес/размеры/стоимость)
     * - Изменение расписания
     * - Изменение тега (направления)
     * - Сдвиг координат более чем на 100 метров
     * 
     * Формула: `критичных / (существующих + добавленных) * 100% > порог`
     * 
     * При срабатывании апрува задача переходит в статус `pending_approval`, а в результате задачи
     * возвращаются поля с информацией об изменениях (`diff_added`, `diff_deleted`, `diff_modified`, `diff_critical`, `diff_total`).
     * 
     * > Система апрува не затрагивает ABD-терминалы.
     * 
     * ### Описание ошибок
     * | http code |   error code      |       error message                                       |
     * |-----------|-------------------|-----------------------------------------------------------|
     * |    200    | URL_PATH_INVALID  | Tariff id must be int url path                            |
     * |    200    | TERMINALS_INVALID | Failed to convert terminals: {error description}          |
     * |    200    | TERMINALS_INVALID | Failed to get terminals from request: {error decsription} |
     * 
     * OperationId: AddTerminalsSandbox.
     * HTTP: POST /delivery-sandbox/tariffs/{tariff_id}/terminals.
     *
     * @param AddTerminalsSandboxPrompt $prompt DTO запроса.
     *
     * @return AddTerminalsSandboxResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function AddTerminalsSandbox(AddTerminalsSandboxPrompt $prompt): AddTerminalsSandboxResponse
    {
        /** @var DeliverySandbox\TerminalsProvider $group */
        $group = $this->operationGroup('terminals');

        return $group->addSandbox($prompt);
    }

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
     * @return CancelAnnouncement3PLResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function CancelAnnouncement3PL(CancelAnnouncement3PLPrompt $prompt): CancelAnnouncement3PLResponse
    {
        /** @var DeliverySandbox\AnnouncementProvider $group */
        $group = $this->operationGroup('announcement');

        return $group->cancel3PL($prompt);
    }

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
     * @return CancelParcelResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function cancelParcel(CancelParcelPrompt $prompt): CancelParcelResponse
    {
        /** @var DeliverySandbox\ParcelProvider $group */
        $group = $this->operationGroup('parcel');

        return $group->cancel($prompt);
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
     * @return ChangeParcelResultResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function ChangeParcelResult(ChangeParcelResultPrompt $prompt): ChangeParcelResultResponse
    {
        /** @var DeliverySandbox\ParcelProvider $group */
        $group = $this->operationGroup('parcel');

        return $group->changeResult($prompt);
    }

    /**
     * Обновление свойств посылок
     * 
     * Описание механики изменения посылок [здесь](https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#info/izmenenie_svoystv_posylok).
     * 
     * Метод реализуется на стороне службы доставки. Предназначен для обновления различных свойств посылок по инициативе Avito.
     * 
     * OperationId: ChangeParcels.
     * HTTP: POST /sandbox/changeParcels.
     *
     * @param ChangeParcelsPrompt $prompt DTO запроса.
     *
     * @return ChangeParcelsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function ChangeParcels(ChangeParcelsPrompt $prompt): ChangeParcelsResponse
    {
        /** @var DeliverySandbox\ParcelsProvider $group */
        $group = $this->operationGroup('parcels');

        return $group->change($prompt);
    }

    /**
     * Проверка кода подтверждения
     * 
     * Метод для проверки службой доставки кода подтверждения, который пользователь показал на пункте выдачи заказа.<br />
     * 
     * ### Статус проверки кода
     * | status      |       Значение                                |
     * |-------------|-----------------------------------------------|
     * |   success   | Код верный.                                   |
     * |   fail      | Код неверный.                                 |
     * |   expired   | Код подтверждения устарел.                    |
     * |   attempts  | Превышено максимальное количество попыток.    |
     * 
     * OperationId: checkConfirmationCode.
     * HTTP: POST /delivery-sandbox/order/checkConfirmationCode.
     *
     * @param CheckConfirmationCodePrompt $prompt DTO запроса.
     *
     * @return CheckConfirmationCodeResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function checkConfirmationCode(CheckConfirmationCodePrompt $prompt): CheckConfirmationCodeResponse
    {
        /** @var DeliverySandbox\ConfirmationProvider $group */
        $group = $this->operationGroup('confirmation');

        return $group->checkCode($prompt);
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
     * @return CreateAnnouncementResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function CreateAnnouncement(CreateAnnouncementPrompt $prompt): CreateAnnouncementResponse
    {
        /** @var DeliverySandbox\AnnouncementProvider $group */
        $group = $this->operationGroup('announcement');

        return $group->create($prompt);
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
     * @return CreateAnnouncement3PLResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function CreateAnnouncement3PL(CreateAnnouncement3PLPrompt $prompt): CreateAnnouncement3PLResponse
    {
        /** @var DeliverySandbox\AnnouncementProvider $group */
        $group = $this->operationGroup('announcement');

        return $group->create3PL($prompt);
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
     * @return CreateParcelResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function createParcel(CreateParcelPrompt $prompt): CreateParcelResponse
    {
        /** @var DeliverySandbox\ParcelProvider $group */
        $group = $this->operationGroup('parcel');

        return $group->create($prompt);
    }

    /**
     * Создание тестовой посылки
     * 
     * Метод доступен только в Песочнице.
     * 
     * Метод запускает процесс создания тестовой посылки.
     * 
     * Описание механики работы и дополнительные требования см. [здесь](#info/sozdanie_testovyh_posylok).
     * 
     * ### Описание ошибок
     * | http code |   error code       |       error message          |
     * |-----------|--------------------|------------------------------|
     * |    200    | UNKNOWN_PROVIDER   | unknown provider             |
     * |    200    | VALIDATION_ERROR   | invalid request              |
     * |    200    | LIMIT_REACHED      | create parcels limit reached |
     * |    500    | INTERNAL_ERROR     | create parcel error          |
     * 
     * OperationId: CreateSandboxParcelV2.
     * HTTP: POST /delivery-sandbox/v2/createParcel.
     *
     * @param CreateSandboxParcelV2Prompt $prompt DTO запроса.
     *
     * @return CreateSandboxParcelV2Response DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function CreateSandboxParcelV2(CreateSandboxParcelV2Prompt $prompt): CreateSandboxParcelV2Response
    {
        /** @var DeliverySandbox\SandboxProvider $group */
        $group = $this->operationGroup('sandbox');

        return $group->createParcelV2($prompt);
    }

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
     * @return CustomAreaScheduleResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function customAreaSchedule(CustomAreaSchedulePrompt $prompt): CustomAreaScheduleResponse
    {
        /** @var DeliverySandbox\CustomProvider $group */
        $group = $this->operationGroup('custom');

        return $group->areaSchedule($prompt);
    }

    /**
     * Получить список сортировочных центров
     * 
     * Возвращает сортировочные центы для переданных служб доставки
     * 
     * ### Справочник служб доставки
     * |    код    |    Название  |
     * |-----------|--------------|
     * |   pochta  | Почта России |
     * |   exmail  | ExMail       |
     * |     bb    | Boxberyy     |
     * |     pp    | PickPoint    |
     * |    dpd    | DPD          |
     * 
     * ### Описание ошибок
     * | http code |   error code                  |       error message                                      |
     * |-----------|-------------------------------|----------------------------------------------------------|
     * |    200    | INVALID_QUERY_PARAMETERS      | Failed to convert entities: {error description}          |
     * |    200    | INVALID_QUERY_PARAMETERS      | Failed to get entities from request: {error description} |
     * |    500    | FAILED_TO_GET_SORTING_CENTERS | Failed to get sorting centers                            |
     * 
     * OperationId: GetSortingCenter.
     * HTTP: GET /delivery-sandbox/sorting-center.
     *
     * @param GetSortingCenterPrompt $prompt DTO запроса.
     *
     * @return GetSortingCenterResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function GetSortingCenter(GetSortingCenterPrompt $prompt): GetSortingCenterResponse
    {
        /** @var DeliverySandbox\SortingProvider $group */
        $group = $this->operationGroup('sorting');

        return $group->getCenter($prompt);
    }

    /**
     * Получение информации по задаче
     * 
     * Получить информацию о задаче
     * 
     * Примерное время выполнения задачи от 5 до 20 минут
     * 
     * ### Возможные статусы задачи
     *  Задача может быть в одном из следующих статусов:
     *   * `processing` - задача ждёт очередь на выполнение или уже выполняется
     *   * `success` - задача успешно выполнена
     *   * `failed` - задача завершилась с ошибкой или не смогла завершиться по техническим причинам
     *   * `pending_approval` - загрузка терминалов приостановлена, процент критичных изменений превысил допустимый порог и требуется ручное одобрение
     *   * `declined` - загрузка терминалов отклонена
     * 
     * ### Описание ошибок
     * | http code |   error code       |       error message          |
     * |-----------|--------------------|------------------------------|
     * |    200    | URL_PATH_INVALID   | Task id must be int url path |
     * |    200    | INVALID_ENTITY     | Empty provider               |
     * |    500    | FAILED_TO_GET_TASK | Failed to get task           |
     * 
     * OperationId: GetTask.
     * HTTP: GET /delivery-sandbox/tasks/{task_id}.
     *
     * @param GetTaskPrompt $prompt DTO запроса.
     *
     * @return GetTaskResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function GetTask(GetTaskPrompt $prompt): GetTaskResponse
    {
        /** @var DeliverySandbox\TaskProvider $group */
        $group = $this->operationGroup('task');

        return $group->get($prompt);
    }

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
     * @return ProhibitOrderAcceptanceResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function prohibitOrderAcceptance(ProhibitOrderAcceptancePrompt $prompt): ProhibitOrderAcceptanceResponse
    {
        /** @var DeliverySandbox\OrderProvider $group */
        $group = $this->operationGroup('order');

        return $group->prohibitAcceptance($prompt);
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
     * @return SetOrderPropertiesResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function setOrderProperties(SetOrderPropertiesPrompt $prompt): SetOrderPropertiesResponse
    {
        /** @var DeliverySandbox\OrderProvider $group */
        $group = $this->operationGroup('order');

        return $group->setProperties($prompt);
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
     * @return SetOrderRealAddressResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function setOrderRealAddress(SetOrderRealAddressPrompt $prompt): SetOrderRealAddressResponse
    {
        /** @var DeliverySandbox\OrderProvider $group */
        $group = $this->operationGroup('order');

        return $group->setRealAddress($prompt);
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
     * @return TrackAnnouncementResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function TrackAnnouncement(TrackAnnouncementPrompt $prompt): TrackAnnouncementResponse
    {
        /** @var DeliverySandbox\AnnouncementProvider $group */
        $group = $this->operationGroup('announcement');

        return $group->track($prompt);
    }

    /**
     * Трекинг
     * 
     * Метод для передачи информации по трекингу посылки от службы доставки в Avito.
     * 
     * Механика работы и прочие важные моменты описаны в [разделе](https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#info/treking).
     * 
     * Обязательно ознакомьтесь и реализуйте [политику повторов запросов](https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#info/politika_povtorov_v_trekinge).
     * 
     * OperationId: tracking.
     * HTTP: POST /delivery-sandbox/order/tracking.
     *
     * @param TrackingPrompt $prompt DTO запроса.
     *
     * @return TrackingResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function tracking(TrackingPrompt $prompt): TrackingResponse
    {
        /** @var DeliverySandbox\GeneralProvider $group */
        $group = $this->operationGroup('general');

        return $group->tracking($prompt);
    }

    /**
     * Обновить сроки по тарифу
     * 
     * Создание задачи на обновление сроков в тарифе. Подробнее про сроки можно почитать в разделе загрузки тарифа https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/AddTariffSandboxV2.  
     * 
     * Важно ! Список новых сроков должен полностью соответствовать по deliveryProviderZoneId и name списку сроков, переданному при создании тарифа.
     * Т.е. необходимо перечислить все те же deliveryProviderZoneId и name, но можете поменять сроки (maxTerm и/или minTerm).
     * Если в какой-то зоне сроки не меняются, то необходимо все равно передать ее в исходном виде (без изменения в maxTerm и minTerm.
     * При загрузке неполного списка обновление сроков упадет с ошибкой (об этом узнать можно будет через [метод получения результата выполнения задачи](#operation/GetTask))
     * 
     * ### Описание ошибок
     * | http code |   error code                  |       error message                                                   |
     * |-----------|-------------------------------|-----------------------------------------------------------------------|
     * |    200    | INVALID_ENTITY                | Не удалось декодировать тело запрос, проверьте структуру              |
     * |    200    | INVALID_ENTITY                | Передан пустой список                                                 |
     * |    200    | INVALID_ENTITY                | Не указан или указан невалидный tariff_id, должно быть передано число |
     * |    200    | INVALID_ENTITY                | Передан tariff_id равный 0                                            |
     * |    500    | FAILED_TO_UPDATE_TERMS        | Ошибка обработки сроков                                               |
     * 
     * Итоговый результат операции необходимо проверять через:  
     * [метод получения результата выполнения задачи](#operation/GetTask)
     * 
     * OperationId: UpdateTerms.
     * HTTP: POST /delivery-sandbox/tariffs/{tariff_id}/terms.
     *
     * @param UpdateTermsPrompt $prompt DTO запроса.
     *
     * @return UpdateTermsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function UpdateTerms(UpdateTermsPrompt $prompt): UpdateTermsResponse
    {
        /** @var DeliverySandbox\TermsProvider $group */
        $group = $this->operationGroup('terms');

        return $group->update($prompt);
    }

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
     * @return V1cancelAnnouncementResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function v1cancelAnnouncement(V1cancelAnnouncementPrompt $prompt): V1cancelAnnouncementResponse
    {
        /** @var DeliverySandbox\VProvider $group */
        $group = $this->operationGroup('v');

        return $group->CancelAnnouncement($prompt);
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
     * @return V1CancelParcelResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function v1CancelParcel(V1CancelParcelPrompt $prompt): V1CancelParcelResponse
    {
        /** @var DeliverySandbox\VProvider $group */
        $group = $this->operationGroup('v');

        return $group->CancelParcel($prompt);
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
     * @return V1changeParcelResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function v1changeParcel(V1changeParcelPrompt $prompt): V1changeParcelResponse
    {
        /** @var DeliverySandbox\VProvider $group */
        $group = $this->operationGroup('v');

        return $group->ChangeParcel($prompt);
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
     * @return V1createAnnouncementResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function v1createAnnouncement(V1createAnnouncementPrompt $prompt): V1createAnnouncementResponse
    {
        /** @var DeliverySandbox\VProvider $group */
        $group = $this->operationGroup('v');

        return $group->CreateAnnouncement($prompt);
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
     * @return V1getAnnouncementEventResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function v1getAnnouncementEvent(V1getAnnouncementEventPrompt $prompt): V1getAnnouncementEventResponse
    {
        /** @var DeliverySandbox\VProvider $group */
        $group = $this->operationGroup('v');

        return $group->GetAnnouncementEvent($prompt);
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
     * @return V1getChangeParcelInfoResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function v1getChangeParcelInfo(V1getChangeParcelInfoPrompt $prompt): V1getChangeParcelInfoResponse
    {
        /** @var DeliverySandbox\VProvider $group */
        $group = $this->operationGroup('v');

        return $group->GetChangeParcelInfo($prompt);
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
     * @return V1getParcelInfoResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function v1getParcelInfo(V1getParcelInfoPrompt $prompt): V1getParcelInfoResponse
    {
        /** @var DeliverySandbox\VProvider $group */
        $group = $this->operationGroup('v');

        return $group->GetParcelInfo($prompt);
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
     * @return V1getRegisteredParcelIDResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function v1getRegisteredParcelID(V1getRegisteredParcelIDPrompt $prompt): V1getRegisteredParcelIDResponse
    {
        /** @var DeliverySandbox\VProvider $group */
        $group = $this->operationGroup('v');

        return $group->GetRegisteredParcelID($prompt);
    }
}
