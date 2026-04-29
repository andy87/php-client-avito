<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\Job\Vacancy;

use Andy87\ClientsAvito\Generated\Prompt\VacancyCreatePrompt as BaseVacancyCreatePrompt;

/**
 * Класс данных запроса Avito API [POST] /job/v1/vacancies.
 * 
 * @documentation https://developers.avito.ru/api-catalog/job/documentation#operation/vacancyCreate
 * 
 * @property string|null $address Полный адрес объекта (строка длиной от 1 до 256 символов). Обязательное, если не указаны координаты.
 * @property \Andy87\ClientsAvito\Generated\Schema\Job\AdministratorOrganizationType|null $administrator_organization_type Body field administrator_organization_type
 * @property \Andy87\ClientsAvito\Generated\Schema\Job\AgeCriteria|null $age Body field age
 * @property array<int, string>|null $age_preferences Блок "в том числе для кандидатов" (массив строк) Возможные значения элементов массива: - "olderThan45" - старше 45 лет; - "olderThan14" - от 14 лет; - "olderThan16" - от 16 лет; - "withHealthProblems" - с нарушениями здоровья; - "students" - для студентов; - "pensioners" - для пенсионеров.
 * @property \Andy87\ClientsAvito\Generated\Schema\Job\AllowCalls|null $allow_calls Body field allow_calls
 * @property bool|null $allow_messages Возможность откликнуться на вакансию через сайт. Если передается apply_processing, то значение allow_messages будет игнорироваться и равно true.
 * @property \Andy87\ClientsAvito\Generated\Schema\Job\ApplyProcessing|null $apply_processing Body field apply_processing
 * @property string $billing_type Вариант платного размещения Возможные значения: - "package" - размещение объявления осуществляется только при наличии подходящего пакета размещения - "packageOrSingle" - при наличии подходящего пакета оплата размещения объявления произойдет с него; если нет подходящего пакета, но достаточно денег на кошельке Авито, то произойдет разовое размещение - "single" - только разовое размещение, произойдет при наличии достаточной суммы на кошельке Авито; если есть подходящий пакет размещения, он будет проигнорирован
 * @property \Andy87\ClientsAvito\Generated\Schema\Job\Bonuses|null $bonuses Body field bonuses
 * @property \Andy87\ClientsAvito\Generated\Schema\Job\BusinessArea $business_area Body field business_area
 * @property \Andy87\ClientsAvito\Generated\Schema\Job\CitizenshipCriteria|null $citizenship Body field citizenship
 * @property \Andy87\ClientsAvito\Generated\Schema\Job\ConstructionWorkType|null $construction_work_type Body field construction_work_type
 * @property \Andy87\ClientsAvito\Generated\Schema\Job\Contacts|null $contacts Body field contacts
 * @property \Andy87\ClientsAvito\Generated\Schema\Job\Coordinates|null $coordinates Body field coordinates
 * @property \Andy87\ClientsAvito\Generated\Schema\Job\Cuisine|null $cuisine Body field cuisine
 * @property string|null $custom_employer_name Название компании (строка длиной до 60 символов)
 * @property array<int, string>|null $delivery_method Способ доставки
 * @property string $description Описание вакансии (строка длиной от 1 до 5000 символов) Поддерживает html-тэги `p`, `ul`, `ol`, `li`, `br`, `strong`, `em`
 * @property array<string, mixed>|null $driving_experience Стаж вождения
 * @property \Andy87\ClientsAvito\Generated\Schema\Job\DrivingLicenseCategory|null $driving_license_category Body field driving_license_category
 * @property \Andy87\ClientsAvito\Generated\Schema\Job\EateryType|null $eatery_type Body field eatery_type
 * @property \Andy87\ClientsAvito\Generated\Schema\Job\VacancyEducationLevel|null $education_level Body field education_level
 * @property int|null $employee_id employee_id - Идентификатор сотрудника на Авито. Если этот параметр указан, то вакансия будет закреплена за сотрудником и с его баланса в Avito Pro будет списано размещение. Использовать параметр можно только с billing_type равным package. Сотрудник должен быть активен.
 * @property string $employment Занятость <br> Возможные значения: - temporary - Временная - full - Полная - internship - Стажировка - partial - Частичная Если ничего не выбрать то будет автоматически проставляться в зависимости от режима работы: При flexible и partTime, тип занятости - partial. Для всех остальных full.
 * @property array<string, mixed> $experience Опыт работы
 * @property \Andy87\ClientsAvito\Generated\Schema\Job\FacilityType|null $facility_type Body field facility_type
 * @property \Andy87\ClientsAvito\Generated\Schema\Job\FoodProductionShopType|null $food_production_shop_type Body field food_production_shop_type
 * @property \Andy87\ClientsAvito\Generated\Schema\Job\Grade|null $grade Body field grade
 * @property \Andy87\ClientsAvito\Generated\Schema\Job\HtmlTags|null $html_tags Body field html_tags
 * @property string|null $image_url URL-адрес логотипа вакансии. Ссылка на файл должна быть прямой | (при переходе не открываются элементы другого сайта (логотипы, кнопки или другие детали интерфейса) и не запрашивается логин и пароль) и доступной для IP 185.89.12.0/22, 146.158.48.0/21, 185.79.237.224/28 и 87.245.204.32/28;
 * @property bool|null $is_company_car Предоставляет ли компания автомобиль
 * @property bool|null $is_side_job Подработка
 * @property \Andy87\ClientsAvito\Generated\Schema\Job\MedicalBookVacancy|null $medical_book Body field medical_book
 * @property \Andy87\ClientsAvito\Generated\Schema\Job\MedicalSpecialization|null $medical_specialization Body field medical_specialization
 * @property \Andy87\ClientsAvito\Generated\Schema\Job\MedicalSpecializationIds|null $medical_specialization_ids Body field medical_specialization_ids
 * @property string $name Название вакансии (строка длиной от 1 до 50 символов)
 * @property array<string, mixed>|null $payout_frequency Частота выплат<br> Возможные значения: - "dailyPay" - Каждый день; - "biweeklyPay" - Дважды в месяц; - "weeklyPay" - Раз в неделю; - "thriceMonthlyPay" - три раза в месяц; - "monthlyPay" - Раз в месяц. Для paid_period равным month и week недоступно для выбора dailyPay. deprecated значение hourlyPay будет заменено на dailyPay
 * @property \Andy87\ClientsAvito\Generated\Schema\Job\Profession|null $profession Body field profession
 * @property \Andy87\ClientsAvito\Generated\Schema\Job\RegistrationMethod|null $registration_method Body field registration_method
 * @property \Andy87\ClientsAvito\Generated\Schema\Job\RetailEquipmentType|null $retail_equipment_type Body field retail_equipment_type
 * @property \Andy87\ClientsAvito\Generated\Schema\Job\RetailShopType|null $retail_shop_type Body field retail_shop_type
 * @property int|null $salary Зарплата, рублей в месяц, если заполнено вместе с salary_range, то приоритет у salary_range
 * @property \Andy87\ClientsAvito\Generated\Schema\Job\SalaryDetail|null $salary_detail Body field salary_detail
 * @property array<string, mixed>|null $salary_range Блок с вилкой зарплаты, если одновременно с salary, имеет приоритет
 * @property array<string, mixed> $schedule Режим работы <br> Возможные значения: - flyInFlyOut - Вахта - fixed - Фиксированный - flexible - Гибкий - shift - Сменный deprecated значения fiveDay, sixDay, partTime, fullDay и remote будут заменены на fixed flyInFlyOut - Вахта, при выборе данного режима работы, адрес вакансии может быть только "Город", если адрес передается полноценный, то улица будет отрезана и адрес будет до "Города".
 * @property \Andy87\ClientsAvito\Generated\Schema\Job\Shifts|null $shifts Body field shifts
 * @property \Andy87\ClientsAvito\Generated\Schema\Job\ToolsAvailability|null $tools_availability Body field tools_availability
 * @property string|null $vacancy_code Внутренний идентификатор вакансии или номер заявки на подбор, максимум 150 символов
 * @property \Andy87\ClientsAvito\Generated\Schema\Job\VehicleType|null $vehicle_type Body field vehicle_type
 * @property \Andy87\ClientsAvito\Generated\Schema\Job\WorkDaysPerWeek|null $work_days_per_week Body field work_days_per_week
 * @property array<int, string>|null $work_format Блок "Формат работы" (массив строк) Возможные значения элементов массива: - "office" - В офисе или на объекте; - "remote" - Удалённо; - "gibrid" - Гибрид.
 * @property \Andy87\ClientsAvito\Generated\Schema\Job\WorkHoursPerDay|null $work_hours_per_day Body field work_hours_per_day
 * @property \Andy87\ClientsAvito\Generated\Schema\Job\WorkerClass|null $worker_class Body field worker_class
 */
class CreatePrompt extends BaseVacancyCreatePrompt
{
}
