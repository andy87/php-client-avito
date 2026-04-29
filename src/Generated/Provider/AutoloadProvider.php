<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\CreateOrUpdateProfilePrompt;
use Andy87\ClientsAvito\Generated\Prompt\CreateOrUpdateProfileV2Prompt;
use Andy87\ClientsAvito\Generated\Prompt\GetAdIdsByAvitoIdsPrompt;
use Andy87\ClientsAvito\Generated\Prompt\GetAutoloadItemsInfoV2Prompt;
use Andy87\ClientsAvito\Generated\Prompt\GetAvitoIdsByAdIdsPrompt;
use Andy87\ClientsAvito\Generated\Prompt\GetLastCompletedReportPrompt;
use Andy87\ClientsAvito\Generated\Prompt\GetLastCompletedReportV3Prompt;
use Andy87\ClientsAvito\Generated\Prompt\GetProfilePrompt;
use Andy87\ClientsAvito\Generated\Prompt\GetProfileV2Prompt;
use Andy87\ClientsAvito\Generated\Prompt\GetReportByIdV2Prompt;
use Andy87\ClientsAvito\Generated\Prompt\GetReportByIdV3Prompt;
use Andy87\ClientsAvito\Generated\Prompt\GetReportItemsByIdPrompt;
use Andy87\ClientsAvito\Generated\Prompt\GetReportItemsFeesByIdPrompt;
use Andy87\ClientsAvito\Generated\Prompt\GetReportsV2Prompt;
use Andy87\ClientsAvito\Generated\Prompt\UploadPrompt;
use Andy87\ClientsAvito\Generated\Prompt\UserDocsNodeFieldsPrompt;
use Andy87\ClientsAvito\Generated\Prompt\UserDocsTreePrompt;
use Andy87\ClientsAvito\Generated\Response\CreateOrUpdateProfileResponse;
use Andy87\ClientsAvito\Generated\Response\CreateOrUpdateProfileV2Response;
use Andy87\ClientsAvito\Generated\Response\GetAdIdsByAvitoIdsResponse;
use Andy87\ClientsAvito\Generated\Response\GetAutoloadItemsInfoV2Response;
use Andy87\ClientsAvito\Generated\Response\GetAvitoIdsByAdIdsResponse;
use Andy87\ClientsAvito\Generated\Response\GetLastCompletedReportResponse;
use Andy87\ClientsAvito\Generated\Response\GetLastCompletedReportV3Response;
use Andy87\ClientsAvito\Generated\Response\GetProfileResponse;
use Andy87\ClientsAvito\Generated\Response\GetProfileV2Response;
use Andy87\ClientsAvito\Generated\Response\GetReportByIdV2Response;
use Andy87\ClientsAvito\Generated\Response\GetReportByIdV3Response;
use Andy87\ClientsAvito\Generated\Response\GetReportItemsByIdResponse;
use Andy87\ClientsAvito\Generated\Response\GetReportItemsFeesByIdResponse;
use Andy87\ClientsAvito\Generated\Response\GetReportsV2Response;
use Andy87\ClientsAvito\Generated\Response\UploadResponse;
use Andy87\ClientsAvito\Generated\Response\UserDocsNodeFieldsResponse;
use Andy87\ClientsAvito\Generated\Response\UserDocsTreeResponse;

/**
 * Provider раздела Avito API "Автозагрузка".
 * @property-read Autoload\AdProvider $ad
 * @property-read Autoload\AutoloadProvider $autoload
 * @property-read Autoload\AvitoProvider $avito
 * @property-read Autoload\GeneralProvider $general
 * @property-read Autoload\LastProvider $last
 * @property-read Autoload\OrValueProvider $orValue
 * @property-read Autoload\ProfileProvider $profile
 * @property-read Autoload\ReportProvider $report
 * @property-read Autoload\ReportsProvider $reports
 * @property-read Autoload\UserProvider $user
 *
 */
class AutoloadProvider extends BaseAvitoProvider
{
    protected const OPERATION_GROUPS = [
        'ad' => Autoload\AdProvider::class,
        'autoload' => Autoload\AutoloadProvider::class,
        'avito' => Autoload\AvitoProvider::class,
        'general' => Autoload\GeneralProvider::class,
        'last' => Autoload\LastProvider::class,
        'orValue' => Autoload\OrValueProvider::class,
        'profile' => Autoload\ProfileProvider::class,
        'report' => Autoload\ReportProvider::class,
        'reports' => Autoload\ReportsProvider::class,
        'user' => Autoload\UserProvider::class,
    ];

    /**
     * Создание/редактирование настроек профиля пользователя автозагрузки (deprecated)
     * 
     * Предназначен для создания и управления профилем автозагрузки. Если профиля еще не существует - через этот метод можно его создать. 
     * 
     * С 23.12.2024 вместо поля upload_url используйте поле feeds_data. В нём содержится название файла и ссылка на него. [Новая версия](https://developers.avito.ru/api-catalog/autoload/documentation#operation/createOrUpdateProfileV2)
     * 
     * OperationId: createOrUpdateProfile.
     * HTTP: POST /autoload/v1/profile.
     *
     * @param CreateOrUpdateProfilePrompt $prompt DTO запроса.
     *
     * @return CreateOrUpdateProfileResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function createOrUpdateProfile(CreateOrUpdateProfilePrompt $prompt): CreateOrUpdateProfileResponse
    {
        /** @var Autoload\OrValueProvider $group */
        $group = $this->operationGroup('orValue');

        return $group->createUpdateProfile($prompt);
    }

    /**
     * Создание/редактирование настроек профиля пользователя автозагрузки
     * 
     * Предназначен для создания и управления профилем автозагрузки. Если профиля еще не существует - через этот метод можно его создать. С 23.12.2024 вместо поля feed_url используйте поле feeds_data. В нём содержится название файла и ссылка на него.
     * 
     * OperationId: createOrUpdateProfileV2.
     * HTTP: POST /autoload/v2/profile.
     *
     * @param CreateOrUpdateProfileV2Prompt $prompt DTO запроса.
     *
     * @return CreateOrUpdateProfileV2Response DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function createOrUpdateProfileV2(CreateOrUpdateProfileV2Prompt $prompt): CreateOrUpdateProfileV2Response
    {
        /** @var Autoload\OrValueProvider $group */
        $group = $this->operationGroup('orValue');

        return $group->createUpdateProfileV2($prompt);
    }

    /**
     * ID объявлений из файла
     * 
     * Метод позволяет получить идентификаторы (ID) объявлений из файла автозагрузки по ID объявлений на Авито.
     * 
     * 📝 [Напишите нам](https://docs.google.com/forms/d/e/1FAIpQLSdfTHlP6PKtOb08fxD7BaJ0VjtkaLXoRAswhF9gnKvrEyY16g/viewform?usp=sf_link),
     * если в методе вам не хватает каких-либо данных.
     * 
     * OperationId: getAdIdsByAvitoIds.
     * HTTP: GET /autoload/v2/items/ad_ids.
     *
     * @param GetAdIdsByAvitoIdsPrompt $prompt DTO запроса.
     *
     * @return GetAdIdsByAvitoIdsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getAdIdsByAvitoIds(GetAdIdsByAvitoIdsPrompt $prompt): GetAdIdsByAvitoIdsResponse
    {
        /** @var Autoload\AdProvider $group */
        $group = $this->operationGroup('ad');

        return $group->getIdsByAvitoIds($prompt);
    }

    /**
     * Объявления по ID в автозагрузке
     * 
     * По запросу API отдаст данные по конкретным объявлениям.
     * 
     * 📝 [Напишите нам](https://docs.google.com/forms/d/e/1FAIpQLSdfTHlP6PKtOb08fxD7BaJ0VjtkaLXoRAswhF9gnKvrEyY16g/viewform?usp=sf_link),
     * если в методе вам не хватает каких-либо данных.
     * 
     * OperationId: getAutoloadItemsInfoV2.
     * HTTP: GET /autoload/v2/reports/items.
     *
     * @param GetAutoloadItemsInfoV2Prompt $prompt DTO запроса.
     *
     * @return GetAutoloadItemsInfoV2Response DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getAutoloadItemsInfoV2(GetAutoloadItemsInfoV2Prompt $prompt): GetAutoloadItemsInfoV2Response
    {
        /** @var Autoload\AutoloadProvider $group */
        $group = $this->operationGroup('autoload');

        return $group->getItemsInfoV2($prompt);
    }

    /**
     * ID объявлений на Авито
     * 
     * Метод позволяет получить идентификаторы (ID) объявлений на Авито по идентификаторам объявлений из файла автозагрузки.
     * 
     * 📝 [Напишите нам](https://docs.google.com/forms/d/e/1FAIpQLSdfTHlP6PKtOb08fxD7BaJ0VjtkaLXoRAswhF9gnKvrEyY16g/viewform?usp=sf_link),
     * если в методе вам не хватает каких-либо данных.
     * 
     * OperationId: getAvitoIdsByAdIds.
     * HTTP: GET /autoload/v2/items/avito_ids.
     *
     * @param GetAvitoIdsByAdIdsPrompt $prompt DTO запроса.
     *
     * @return GetAvitoIdsByAdIdsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getAvitoIdsByAdIds(GetAvitoIdsByAdIdsPrompt $prompt): GetAvitoIdsByAdIdsResponse
    {
        /** @var Autoload\AvitoProvider $group */
        $group = $this->operationGroup('avito');

        return $group->getIdsByAdIds($prompt);
    }

    /**
     * Статистика по последней выгрузке (deprecated)
     * 
     * Метод возвращает сводную статистику с результатами последней завершённой выгрузки.
     * Например, сколько объявлений было в файле и сколько из них было опубликовано с ошибками или без.
     * 
     * 📝 [Напишите нам](https://docs.google.com/forms/d/e/1FAIpQLSdfTHlP6PKtOb08fxD7BaJ0VjtkaLXoRAswhF9gnKvrEyY16g/viewform?usp=sf_link),
     * если в методе вам не хватает каких-либо данных.
     * 
     * С 23.12.2024 вместо поля feed_url используйте поле feeds_urls. В нём содержится название файла и ссылка на него. [Новая версия](https://developers.avito.ru/api-catalog/autoload/documentation#operation/getLastCompletedReportV3)
     * 
     * OperationId: getLastCompletedReport.
     * HTTP: GET /autoload/v2/reports/last_completed_report.
     *
     * @param GetLastCompletedReportPrompt $prompt DTO запроса.
     *
     * @return GetLastCompletedReportResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getLastCompletedReport(GetLastCompletedReportPrompt $prompt): GetLastCompletedReportResponse
    {
        /** @var Autoload\LastProvider $group */
        $group = $this->operationGroup('last');

        return $group->getCompletedReport($prompt);
    }

    /**
     * Статистика по последней выгрузке
     * 
     * Метод возвращает сводную статистику с результатами последней завершённой выгрузки.
     * Например, сколько объявлений было в файле и сколько из них было опубликовано с ошибками или без.
     * 
     * 📝 [Напишите нам](https://docs.google.com/forms/d/e/1FAIpQLSdfTHlP6PKtOb08fxD7BaJ0VjtkaLXoRAswhF9gnKvrEyY16g/viewform?usp=sf_link),
     * если в методе вам не хватает каких-либо данных.
     * 
     * С 23.12.2024 вместо поля feed_url используйте поле feeds_urls. В нём содержится название файла и ссылка на него.
     * 
     * OperationId: getLastCompletedReportV3.
     * HTTP: GET /autoload/v3/reports/last_completed_report.
     *
     * @param GetLastCompletedReportV3Prompt $prompt DTO запроса.
     *
     * @return GetLastCompletedReportV3Response DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getLastCompletedReportV3(GetLastCompletedReportV3Prompt $prompt): GetLastCompletedReportV3Response
    {
        /** @var Autoload\LastProvider $group */
        $group = $this->operationGroup('last');

        return $group->getCompletedReportV3($prompt);
    }

    /**
     * Получение профиля пользователя автозагрузки (deprecated)
     * 
     * Возвращает настройки профиля пользователя автозагрузки.
     * С 23.12.2024 вместо поля upload_url используйте поле feeds_data. В нём содержится название файла и ссылка на него. [Новая версия](https://developers.avito.ru/api-catalog/autoload/documentation#operation/getProfileV2)
     * 
     * OperationId: getProfile.
     * HTTP: GET /autoload/v1/profile.
     *
     * @param GetProfilePrompt $prompt DTO запроса.
     *
     * @return GetProfileResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getProfile(GetProfilePrompt $prompt): GetProfileResponse
    {
        /** @var Autoload\ProfileProvider $group */
        $group = $this->operationGroup('profile');

        return $group->get($prompt);
    }

    /**
     * Получение профиля пользователя автозагрузки
     * 
     * Возвращает настройки профиля пользователя автозагрузки. С 23.12.2024 вместо поля upload_url используйте поле feeds_data. В нём содержится название файла и ссылка на него.
     * 
     * OperationId: getProfileV2.
     * HTTP: GET /autoload/v2/profile.
     *
     * @param GetProfileV2Prompt $prompt DTO запроса.
     *
     * @return GetProfileV2Response DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getProfileV2(GetProfileV2Prompt $prompt): GetProfileV2Response
    {
        /** @var Autoload\ProfileProvider $group */
        $group = $this->operationGroup('profile');

        return $group->getV2($prompt);
    }

    /**
     * Статистика по конкретной выгрузке (deprecated)
     * 
     * Метод возвращает сводную статистику с результатами конкретной выгрузки — по ID отчёта.
     * Например, сколько объявлений было в файле и сколько из них было опубликовано с ошибками или без.
     * 
     * 📝 [Напишите нам](https://docs.google.com/forms/d/e/1FAIpQLSdfTHlP6PKtOb08fxD7BaJ0VjtkaLXoRAswhF9gnKvrEyY16g/viewform?usp=sf_link),
     * если в методе вам не хватает каких-либо данных.
     * 
     * С 23.12.2024 вместо поля feed_url используйте поле feeds_urls. В нём содержится название файла и ссылка на него. [Новая версия](https://developers.avito.ru/api-catalog/autoload/documentation#operation/getReportByIdV3)
     * 
     * OperationId: getReportByIdV2.
     * HTTP: GET /autoload/v2/reports/{report_id}.
     *
     * @param GetReportByIdV2Prompt $prompt DTO запроса.
     *
     * @return GetReportByIdV2Response DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getReportByIdV2(GetReportByIdV2Prompt $prompt): GetReportByIdV2Response
    {
        /** @var Autoload\ReportProvider $group */
        $group = $this->operationGroup('report');

        return $group->getByIdV2($prompt);
    }

    /**
     * Статистика по конкретной выгрузке
     * 
     * Метод возвращает сводную статистику с результатами конкретной выгрузки — по ID отчёта.
     * Например, сколько объявлений было в файле и сколько из них было опубликовано с ошибками или без.
     * 
     * 📝 [Напишите нам](https://docs.google.com/forms/d/e/1FAIpQLSdfTHlP6PKtOb08fxD7BaJ0VjtkaLXoRAswhF9gnKvrEyY16g/viewform?usp=sf_link),
     * если в методе вам не хватает каких-либо данных.
     * 
     * С 23.12.2024 вместо поля feed_url используйте поле feeds_urls. В нём содержится название файла и ссылка на него.
     * 
     * OperationId: getReportByIdV3.
     * HTTP: GET /autoload/v3/reports/{report_id}.
     *
     * @param GetReportByIdV3Prompt $prompt DTO запроса.
     *
     * @return GetReportByIdV3Response DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getReportByIdV3(GetReportByIdV3Prompt $prompt): GetReportByIdV3Response
    {
        /** @var Autoload\ReportProvider $group */
        $group = $this->operationGroup('report');

        return $group->getByIdV3($prompt);
    }

    /**
     * Все объявления из конкретной выгрузки
     * 
     * С помощью этого метода можно получить результаты обработки каждого объявления в конкретной выгрузке.
     * 
     * 📝 [Напишите нам](https://docs.google.com/forms/d/e/1FAIpQLSdfTHlP6PKtOb08fxD7BaJ0VjtkaLXoRAswhF9gnKvrEyY16g/viewform?usp=sf_link),
     * если в методе вам не хватает каких-либо данных.
     * 
     * С 23.12.2024 добавляется поле feed_name. В нём содержится название файла.
     * 
     * OperationId: getReportItemsById.
     * HTTP: GET /autoload/v2/reports/{report_id}/items.
     *
     * @param GetReportItemsByIdPrompt $prompt DTO запроса.
     *
     * @return GetReportItemsByIdResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getReportItemsById(GetReportItemsByIdPrompt $prompt): GetReportItemsByIdResponse
    {
        /** @var Autoload\ReportProvider $group */
        $group = $this->operationGroup('report');

        return $group->getItemsById($prompt);
    }

    /**
     * Списания за объявления в конкретной выгрузке
     * 
     * С помощью этого метода можно получить информацию о списаниях за размещение каждого объявления в конкретной выгрузке.
     * 
     * 📝 [Напишите нам](https://docs.google.com/forms/d/e/1FAIpQLSdfTHlP6PKtOb08fxD7BaJ0VjtkaLXoRAswhF9gnKvrEyY16g/viewform?usp=sf_link),
     * если в методе вам не хватает каких-либо данных.
     * 
     * OperationId: getReportItemsFeesById.
     * HTTP: GET /autoload/v2/reports/{report_id}/items/fees.
     *
     * @param GetReportItemsFeesByIdPrompt $prompt DTO запроса.
     *
     * @return GetReportItemsFeesByIdResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getReportItemsFeesById(GetReportItemsFeesByIdPrompt $prompt): GetReportItemsFeesByIdResponse
    {
        /** @var Autoload\ReportProvider $group */
        $group = $this->operationGroup('report');

        return $group->getItemsFeesById($prompt);
    }

    /**
     * Список отчётов автозагрузки
     * 
     * По запросу вы получите список отчётов автозагрузки.
     * Они будут отсортированы в порядке убывания: самый свежий отчёт — в начале списка.
     * 
     * 📝 [Напишите нам](https://docs.google.com/forms/d/e/1FAIpQLSdfTHlP6PKtOb08fxD7BaJ0VjtkaLXoRAswhF9gnKvrEyY16g/viewform?usp=sf_link),
     * если в методе вам не хватает каких-либо данных.
     * 
     * OperationId: getReportsV2.
     * HTTP: GET /autoload/v2/reports.
     *
     * @param GetReportsV2Prompt $prompt DTO запроса.
     *
     * @return GetReportsV2Response DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getReportsV2(GetReportsV2Prompt $prompt): GetReportsV2Response
    {
        /** @var Autoload\ReportsProvider $group */
        $group = $this->operationGroup('reports');

        return $group->getV2($prompt);
    }

    /**
     * Загрузка файла по ссылке
     * 
     * Метод запускает процесс выгрузки объявлений из файла по ссылке, которая указана
     * [в настройках автозагрузки](https://www.avito.ru/autoload/settings) в профиле Авито.
     * В течение часа таким способом можно запустить только одну выгрузку.
     * 
     * **Важно**: на загрузки с помощью этого метода не распространяются лимиты на количество публикаций, которые указаны в настройках автозагрузки в профиле Авито.
     * Все объявления из файла, которые могут быть опубликованы или активированы, будут опубликованы или активированы.
     * 
     * 📝 [Напишите нам](https://docs.google.com/forms/d/e/1FAIpQLSdfTHlP6PKtOb08fxD7BaJ0VjtkaLXoRAswhF9gnKvrEyY16g/viewform?usp=sf_link),
     * если в методе вам не хватает каких-либо данных.
     * 
     * OperationId: upload.
     * HTTP: POST /autoload/v1/upload.
     *
     * @param UploadPrompt $prompt DTO запроса.
     *
     * @return UploadResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function upload(UploadPrompt $prompt): UploadResponse
    {
        /** @var Autoload\GeneralProvider $group */
        $group = $this->operationGroup('general');

        return $group->upload($prompt);
    }

    /**
     * Получения полей категории
     * 
     * Метод позволяет получить поля конкретной категории и их параметры, зависимости полей, возможные значения и их типы, предупреждения (например, когда поле станет обязательным) и ссылки на каталоги значений.
     * 
     * 📝 [Напишите нам](https://docs.google.com/forms/d/e/1FAIpQLSdfTHlP6PKtOb08fxD7BaJ0VjtkaLXoRAswhF9gnKvrEyY16g/viewform?usp=sf_link), если в методе вам не хватает каких-либо данных.
     * 
     * OperationId: userDocsNodeFields.
     * HTTP: GET /autoload/v1/user-docs/node/{node_slug}/fields.
     *
     * @param UserDocsNodeFieldsPrompt $prompt DTO запроса.
     *
     * @return UserDocsNodeFieldsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function userDocsNodeFields(UserDocsNodeFieldsPrompt $prompt): UserDocsNodeFieldsResponse
    {
        /** @var Autoload\UserProvider $group */
        $group = $this->operationGroup('user');

        return $group->docsNodeFields($prompt);
    }

    /**
     * Получение дерева категорий
     * 
     * Метод позволяет получить дерево категорий Авито в виде массива.  
     * 📝 [Напишите нам](https://docs.google.com/forms/d/e/1FAIpQLSdfTHlP6PKtOb08fxD7BaJ0VjtkaLXoRAswhF9gnKvrEyY16g/viewform?usp=sf_link), если в методе вам не хватает каких-либо данных.
     * 
     * OperationId: userDocsTree.
     * HTTP: GET /autoload/v1/user-docs/tree.
     *
     * @param UserDocsTreePrompt $prompt DTO запроса.
     *
     * @return UserDocsTreeResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function userDocsTree(UserDocsTreePrompt $prompt): UserDocsTreeResponse
    {
        /** @var Autoload\UserProvider $group */
        $group = $this->operationGroup('user');

        return $group->docsTree($prompt);
    }
}
