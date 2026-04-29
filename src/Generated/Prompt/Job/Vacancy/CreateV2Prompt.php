<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\Job\Vacancy;

use Andy87\ClientsAvito\Generated\Prompt\VacancyCreateV2Prompt as BaseVacancyCreateV2Prompt;

/**
 * Класс данных запроса Avito API [POST] /job/v2/vacancies.
 * 
 * @documentation https://developers.avito.ru/api-catalog/job/documentation#operation/vacancyCreateV2
 * 
 * @property string $Authorization Токен для авторизации
 * @property bool|null $X_Is_Employee Вакансия будет публиковаться от имени сотрудника компании, к которой он привязан.
 * @property \Andy87\ClientsAvito\Generated\Schema\Job\AdministratorOrganizationType|null $administrator_organization_type Body field administrator_organization_type
 * @property \Andy87\ClientsAvito\Generated\Schema\Job\AgeCriteria|null $age Body field age
 * @property array<int, string>|null $age_preferences Блок "в том числе для кандидатов" (массив строк) Возможные значения элементов массива: - "olderThan45" - старше 45 лет; - "olderThan14" - от 14 лет; - "olderThan16" - от 16 лет; - "withHealthProblems" - с нарушениями здоровья; - "students" - для студентов; - "pensioners" - для пенсионеров.
 * @property \Andy87\ClientsAvito\Generated\Schema\Job\ApplyProcessing|null $apply_processing Body field apply_processing
 * @property string $billing_type Вариант платного размещения Возможные значения: - "package" - размещение объявления осуществляется только при наличии подходящего пакета размещения - "packageOrSingle" - при наличии подходящего пакета оплата размещения объявления произойдет с него; если нет подходящего пакета, но достаточно денег на кошельке Авито, то произойдет разовое размещение
 * @property \Andy87\ClientsAvito\Generated\Schema\Job\Bonuses|null $bonuses Body field bonuses
 * @property int|null $business_area Идентификатор сферы деятельности <br> Получить актуальный список доступных значений можно из справочника `business_area` через метод [getDictByID](/api-catalog/job/documentation#operation/getDictByID). <br>
 * @property \Andy87\ClientsAvito\Generated\Schema\Job\CitizenshipCriteria|null $citizenship Body field citizenship
 * @property \Andy87\ClientsAvito\Generated\Schema\Job\ConstructionWorkType|null $construction_work_type Body field construction_work_type
 * @property array<string, mixed>|null $contacts Контактная информация
 * @property \Andy87\ClientsAvito\Generated\Schema\Job\Cuisine|null $cuisine Body field cuisine
 * @property array<int, string>|null $delivery_method Способ доставки
 * @property string|null $description Описание вакансии (строка длиной от 1 до 5000 символов) Можно использовать HTML-теги в тексте. Поддерживаемые тэги - `p`, `ul`, `ol`, `li`, `br`, `strong`, `em`
 * @property string|null $driving_experience Стаж вождения
 * @property \Andy87\ClientsAvito\Generated\Schema\Job\DrivingLicenseCategory|null $driving_license_category Body field driving_license_category
 * @property \Andy87\ClientsAvito\Generated\Schema\Job\EateryType|null $eatery_type Body field eatery_type
 * @property \Andy87\ClientsAvito\Generated\Schema\Job\VacancyEducationLevel|null $education_level Body field education_level
 * @property string|null $employment Занятость <br> Возможные значения: - temporary - Временная - full - Полная - internship - Стажировка - partial - Частичная Если ничего не выбрать то будет автоматически проставляться в зависимости от графика работы: При flexible и partTime, тип занятости - partial. ßДля всех остальных full.
 * @property string|null $experience Опыт работы
 * @property \Andy87\ClientsAvito\Generated\Schema\Job\FacilityType|null $facility_type Body field facility_type
 * @property \Andy87\ClientsAvito\Generated\Schema\Job\FoodProductionShopType|null $food_production_shop_type Body field food_production_shop_type
 * @property \Andy87\ClientsAvito\Generated\Schema\Job\Grade|null $grade Body field grade
 * @property array<string, mixed>|null $hierarchy employee_id - Идентификатор сотрудника на Авито. Если этот параметр указан, то с баланса сотрудника в Avito Pro будет списано размещение. Использовать параметр можно только с billing_type равным package. Сотрудник должен быть в активен.
 * @property string|null $image_url URL-адрес логотипа вакансии. Ссылка на файл должна быть прямой | (при переходе не открываются элементы другого сайта (логотипы, кнопки или другие детали интерфейса) и не запрашивается логин и пароль) и доступной для IP 185.89.12.0/22, 146.158.48.0/21, 185.79.237.224/28 и 87.245.204.32/28;
 * @property bool|null $is_company_car Предоставляет ли компания автомобиль
 * @property bool|null $is_side_job Подработка
 * @property array<string, mixed>|null $location Геолокация вакансии (как минимум одно из значений)
 * @property \Andy87\ClientsAvito\Generated\Schema\Job\MedicalBookVacancy|null $medical_book Body field medical_book
 * @property \Andy87\ClientsAvito\Generated\Schema\Job\MedicalSpecialization|null $medical_specialization Body field medical_specialization
 * @property \Andy87\ClientsAvito\Generated\Schema\Job\MedicalSpecializationIds|null $medical_specialization_ids Body field medical_specialization_ids
 * @property string|null $payout_frequency Частота выплат <br> Возможные значения: - "dailyPay" - Каждый день; - "biweeklyPay" - Дважды в месяц; - "weeklyPay" - Раз в неделю; - "thriceMonthlyPay" - три раза в месяц; - "monthlyPay" - Раз в месяц. Для paid_period равным month и week недоступно для выбора dailyPay. deprecated значение hourlyPay будет заменено на dailyPay
 * @property \Andy87\ClientsAvito\Generated\Schema\Job\Profession|null $profession Body field profession
 * @property array<int, string>|null $programs Блок участие вакансии в программах (массив строк) Если у компании от лица которой создается вакансия нет всех необходимых разрешений на участие, программа у вакансии не будет включена. Возможные значения элементов массива: - "chastyeVyplaty" - Частые выплаты.
 * @property \Andy87\ClientsAvito\Generated\Schema\Job\RegistrationMethod|null $registration_method Body field registration_method
 * @property \Andy87\ClientsAvito\Generated\Schema\Job\RetailEquipmentType|null $retail_equipment_type Body field retail_equipment_type
 * @property \Andy87\ClientsAvito\Generated\Schema\Job\RetailShopType|null $retail_shop_type Body field retail_shop_type
 * @property array<string, mixed>|null $salary Блок с вилкой зарплаты
 * @property \Andy87\ClientsAvito\Generated\Schema\Job\SalaryDetail|null $salary_detail Body field salary_detail
 * @property string|null $schedule Режим работы <br> Возможные значения: - flyInFlyOut - Вахта - fixed - Фиксированный - flexible - Гибкий - shift - Сменный flyInFlyOut - Вахта, при выборе данного режима работы, адрес вакансии может быть только "Город", если адрес передается полноценный, то улица будет отрезана и адрес будет до "Города". deprecated значения fiveDay, sixDay, partTime, fullDay и remote будут заменены на fixed
 * @property \Andy87\ClientsAvito\Generated\Schema\Job\Shifts|null $shifts Body field shifts
 * @property string|null $title Название вакансии (строка длиной от 1 до 50 символов)
 * @property \Andy87\ClientsAvito\Generated\Schema\Job\ToolsAvailability|null $tools_availability Body field tools_availability
 * @property string|null $vacancy_code Внутренний идентификатор вакансии или номер заявки на подбор, максимум 150 символов
 * @property \Andy87\ClientsAvito\Generated\Schema\Job\VehicleType|null $vehicle_type Body field vehicle_type
 * @property \Andy87\ClientsAvito\Generated\Schema\Job\WorkDaysPerWeek|null $work_days_per_week Body field work_days_per_week
 * @property array<int, string>|null $work_format Блок "Формат работы" (массив строк) Возможные значения элементов массива: - "office" - В офисе или на объекте; - "remote" - Удалённо; - "gibrid" - Гибрид.
 * @property \Andy87\ClientsAvito\Generated\Schema\Job\WorkHoursPerDay|null $work_hours_per_day Body field work_hours_per_day
 * @property \Andy87\ClientsAvito\Generated\Schema\Job\WorkerClass|null $worker_class Body field worker_class
 */
class CreateV2Prompt extends BaseVacancyCreateV2Prompt
{
}
