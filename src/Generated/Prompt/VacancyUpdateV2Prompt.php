<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt;

use and_y87\PhpClientSdk\Request\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [POST] /job/v2/vacancies/update/{vacancy_uuid}.
 *
 * @documentation https://developers.avito.ru/api-catalog/job/documentation#operation/vacancyUpdateV2
 */
class VacancyUpdateV2Prompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/job/v2/vacancies/update/{vacancy_uuid}';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const QUERY_PARAMETER_STYLES = [];

    protected const FIELD_MAP = ['vacancy_uuid' => 'vacancy_uuid', 'X_Is_Employee' => 'X-Is-Employee', 'administrator_organization_type' => 'administrator_organization_type', 'age' => 'age', 'age_preferences' => 'age_preferences', 'apply_processing' => 'apply_processing', 'billing_type' => 'billing_type', 'bonuses' => 'bonuses', 'business_area' => 'business_area', 'citizenship' => 'citizenship', 'construction_work_type' => 'construction_work_type', 'contacts' => 'contacts', 'cuisine' => 'cuisine', 'delivery_method' => 'delivery_method', 'description' => 'description', 'driving_experience' => 'driving_experience', 'driving_license_category' => 'driving_license_category', 'eatery_type' => 'eatery_type', 'education_level' => 'education_level', 'employment' => 'employment', 'experience' => 'experience', 'facility_type' => 'facility_type', 'food_production_shop_type' => 'food_production_shop_type', 'grade' => 'grade', 'hierarchy' => 'hierarchy', 'image_url' => 'image_url', 'is_company_car' => 'is_company_car', 'is_side_job' => 'is_side_job', 'location' => 'location', 'medical_book' => 'medical_book', 'medical_specialization' => 'medical_specialization', 'medical_specialization_ids' => 'medical_specialization_ids', 'payout_frequency' => 'payout_frequency', 'profession' => 'profession', 'programs' => 'programs', 'registration_method' => 'registration_method', 'retail_equipment_type' => 'retail_equipment_type', 'retail_shop_type' => 'retail_shop_type', 'salary' => 'salary', 'salary_detail' => 'salary_detail', 'schedule' => 'schedule', 'shifts' => 'shifts', 'title' => 'title', 'tools_availability' => 'tools_availability', 'vacancy_code' => 'vacancy_code', 'vehicle_type' => 'vehicle_type', 'work_days_per_week' => 'work_days_per_week', 'work_format' => 'work_format', 'work_hours_per_day' => 'work_hours_per_day', 'worker_class' => 'worker_class'];

    protected const REQUIRED_FIELDS = ['vacancy_uuid', 'billing_type'];

    protected const NULLABLE_FIELDS = ['X_Is_Employee', 'business_area', 'delivery_method', 'description', 'driving_experience', 'employment', 'experience', 'is_company_car', 'location', 'schedule', 'title', 'vacancy_code'];

    protected const CASTS = ['administrator_organization_type' => \and_y87\php_client_avito\Generated\Schema\Job\AdministratorOrganizationType::class, 'age' => \and_y87\php_client_avito\Generated\Schema\Job\AgeCriteria::class, 'apply_processing' => \and_y87\php_client_avito\Generated\Schema\Job\ApplyProcessing::class, 'bonuses' => \and_y87\php_client_avito\Generated\Schema\Job\Bonuses::class, 'citizenship' => \and_y87\php_client_avito\Generated\Schema\Job\CitizenshipCriteria::class, 'construction_work_type' => \and_y87\php_client_avito\Generated\Schema\Job\ConstructionWorkType::class, 'cuisine' => \and_y87\php_client_avito\Generated\Schema\Job\Cuisine::class, 'driving_license_category' => \and_y87\php_client_avito\Generated\Schema\Job\DrivingLicenseCategory::class, 'eatery_type' => \and_y87\php_client_avito\Generated\Schema\Job\EateryType::class, 'education_level' => \and_y87\php_client_avito\Generated\Schema\Job\VacancyEducationLevel::class, 'facility_type' => \and_y87\php_client_avito\Generated\Schema\Job\FacilityType::class, 'food_production_shop_type' => \and_y87\php_client_avito\Generated\Schema\Job\FoodProductionShopType::class, 'grade' => \and_y87\php_client_avito\Generated\Schema\Job\Grade::class, 'medical_book' => \and_y87\php_client_avito\Generated\Schema\Job\MedicalBookVacancy::class, 'medical_specialization' => \and_y87\php_client_avito\Generated\Schema\Job\MedicalSpecialization::class, 'medical_specialization_ids' => \and_y87\php_client_avito\Generated\Schema\Job\MedicalSpecializationIds::class, 'profession' => \and_y87\php_client_avito\Generated\Schema\Job\Profession::class, 'registration_method' => \and_y87\php_client_avito\Generated\Schema\Job\RegistrationMethod::class, 'retail_equipment_type' => \and_y87\php_client_avito\Generated\Schema\Job\RetailEquipmentType::class, 'retail_shop_type' => \and_y87\php_client_avito\Generated\Schema\Job\RetailShopType::class, 'salary_detail' => \and_y87\php_client_avito\Generated\Schema\Job\SalaryDetail::class, 'shifts' => \and_y87\php_client_avito\Generated\Schema\Job\Shifts::class, 'tools_availability' => \and_y87\php_client_avito\Generated\Schema\Job\ToolsAvailability::class, 'vehicle_type' => \and_y87\php_client_avito\Generated\Schema\Job\VehicleType::class, 'work_days_per_week' => \and_y87\php_client_avito\Generated\Schema\Job\WorkDaysPerWeek::class, 'work_hours_per_day' => \and_y87\php_client_avito\Generated\Schema\Job\WorkHoursPerDay::class, 'worker_class' => \and_y87\php_client_avito\Generated\Schema\Job\WorkerClass::class];

    protected const PATH_FIELDS = ['vacancy_uuid'];

    protected const QUERY_FIELDS = [];

    protected const HEADER_FIELDS = ['X_Is_Employee'];

    protected const BODY_FIELDS = ['administrator_organization_type', 'age', 'age_preferences', 'apply_processing', 'billing_type', 'bonuses', 'business_area', 'citizenship', 'construction_work_type', 'contacts', 'cuisine', 'delivery_method', 'description', 'driving_experience', 'driving_license_category', 'eatery_type', 'education_level', 'employment', 'experience', 'facility_type', 'food_production_shop_type', 'grade', 'hierarchy', 'image_url', 'is_company_car', 'is_side_job', 'location', 'medical_book', 'medical_specialization', 'medical_specialization_ids', 'payout_frequency', 'profession', 'programs', 'registration_method', 'retail_equipment_type', 'retail_shop_type', 'salary', 'salary_detail', 'schedule', 'shifts', 'title', 'tools_availability', 'vacancy_code', 'vehicle_type', 'work_days_per_week', 'work_format', 'work_hours_per_day', 'worker_class'];

    protected const BODY_ROOT_FIELD = null;

    /** @var string UUID Идентификатор вакансии для V2 ручек
(возвращается ручкой [Публикация вакансии V2](https://developers.avito.ru/api-catalog/job/documentation#operation/vacancyCreateV2) )
 */
    public string $vacancy_uuid;

    /** @var bool|null Сотрудник компании может редактировать только свои вакансии. */
    public ?bool $X_Is_Employee = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\Job\AdministratorOrganizationType|null Body field administrator_organization_type */
    public ?\and_y87\php_client_avito\Generated\Schema\Job\AdministratorOrganizationType $administrator_organization_type = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\Job\AgeCriteria|null Body field age */
    public ?\and_y87\php_client_avito\Generated\Schema\Job\AgeCriteria $age = null;

    /** @var array<int, string>|null Блок "в том числе для кандидатов" (массив строк)

Возможные значения элементов массива:
  - "olderThan45" - старше 45 лет;
  - "olderThan14" - от 14 лет;
  - "olderThan16" - от 16 лет;
  - "withHealthProblems" - с нарушениями здоровья;
  - "students" - для студентов;
  - "pensioners" - для пенсионеров.
 */
    public ?array $age_preferences = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\Job\ApplyProcessing|null Body field apply_processing */
    public ?\and_y87\php_client_avito\Generated\Schema\Job\ApplyProcessing $apply_processing = null;

    /** @var string Вариант платного размещения

Возможные значения:
  - "package" - размещение объявления осуществляется только при наличии подходящего пакета размещения
  - "packageOrSingle" - при наличии подходящего пакета оплата размещения объявления произойдет с него; если нет подходящего пакета, но достаточно денег на кошельке Авито, то произойдет разовое размещение
 */
    public string $billing_type;

    /** @var \and_y87\php_client_avito\Generated\Schema\Job\Bonuses|null Body field bonuses */
    public ?\and_y87\php_client_avito\Generated\Schema\Job\Bonuses $bonuses = null;

    /** @var int|null Идентификатор сферы деятельности
<br>
Получить актуальный список доступных значений можно из справочника `business_area` через метод [getDictByID](/api-catalog/job/documentation#operation/getDictByID).
<br>
 */
    public ?int $business_area = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\Job\CitizenshipCriteria|null Body field citizenship */
    public ?\and_y87\php_client_avito\Generated\Schema\Job\CitizenshipCriteria $citizenship = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\Job\ConstructionWorkType|null Body field construction_work_type */
    public ?\and_y87\php_client_avito\Generated\Schema\Job\ConstructionWorkType $construction_work_type = null;

    /** @var array<string, mixed>|null Контактная информация */
    public ?array $contacts = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\Job\Cuisine|null Body field cuisine */
    public ?\and_y87\php_client_avito\Generated\Schema\Job\Cuisine $cuisine = null;

    /** @var array<int, string>|null Способ доставки */
    public ?array $delivery_method = null;

    /** @var string|null Описание вакансии (строка длиной от 1 до 5000 символов)

Можно использовать HTML-теги в тексте.

Поддерживаемые тэги - `p`, `ul`, `ol`, `li`, `br`, `strong`, `em`
 */
    public ?string $description = null;

    /** @var string|null Стаж вождения */
    public ?string $driving_experience = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\Job\DrivingLicenseCategory|null Body field driving_license_category */
    public ?\and_y87\php_client_avito\Generated\Schema\Job\DrivingLicenseCategory $driving_license_category = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\Job\EateryType|null Body field eatery_type */
    public ?\and_y87\php_client_avito\Generated\Schema\Job\EateryType $eatery_type = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\Job\VacancyEducationLevel|null Body field education_level */
    public ?\and_y87\php_client_avito\Generated\Schema\Job\VacancyEducationLevel $education_level = null;

    /** @var string|null Занятость <br>
Возможные значения:
  - temporary - Временная
  - full - Полная
  - internship - Стажировка
  - partial - Частичная

Если ничего не выбрать то будет автоматически проставляться в зависимости от графика работы:
При flexible и partTime, тип занятости - partial.
ßДля всех остальных full.
 */
    public ?string $employment = null;

    /** @var string|null Опыт работы */
    public ?string $experience = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\Job\FacilityType|null Body field facility_type */
    public ?\and_y87\php_client_avito\Generated\Schema\Job\FacilityType $facility_type = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\Job\FoodProductionShopType|null Body field food_production_shop_type */
    public ?\and_y87\php_client_avito\Generated\Schema\Job\FoodProductionShopType $food_production_shop_type = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\Job\Grade|null Body field grade */
    public ?\and_y87\php_client_avito\Generated\Schema\Job\Grade $grade = null;

    /** @var array<string, mixed>|null employee_id - Идентификатор сотрудника на Авито. Если этот параметр указан, то с баланса сотрудника в Avito Pro будет списано размещение.
Использовать параметр можно только с billing_type равным package.
Сотрудник должен быть в активен.
 */
    public ?array $hierarchy = null;

    /** @var string|null URL-адрес логотипа вакансии. Ссылка на файл должна быть прямой | (при переходе не открываются элементы другого сайта (логотипы, кнопки или другие детали интерфейса) и не запрашивается логин и пароль) и доступной для IP 185.89.12.0/22, 146.158.48.0/21, 185.79.237.224/28 и 87.245.204.32/28; */
    public ?string $image_url = null;

    /** @var bool|null Предоставляет ли компания автомобиль */
    public ?bool $is_company_car = null;

    /** @var bool|null Подработка */
    public ?bool $is_side_job = null;

    /** @var array<string, mixed>|null Геолокация вакансии (как минимум одно из значений) */
    public ?array $location = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\Job\MedicalBookVacancy|null Body field medical_book */
    public ?\and_y87\php_client_avito\Generated\Schema\Job\MedicalBookVacancy $medical_book = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\Job\MedicalSpecialization|null Body field medical_specialization */
    public ?\and_y87\php_client_avito\Generated\Schema\Job\MedicalSpecialization $medical_specialization = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\Job\MedicalSpecializationIds|null Body field medical_specialization_ids */
    public ?\and_y87\php_client_avito\Generated\Schema\Job\MedicalSpecializationIds $medical_specialization_ids = null;

    /** @var string|null Частота выплат <br>
Возможные значения:
  - "dailyPay" - Каждый день;
  - "biweeklyPay" - Дважды в месяц;
  - "weeklyPay" - Раз в неделю;
  - "thriceMonthlyPay" - три раза в месяц;
  - "monthlyPay" - Раз в месяц.

Для paid_period равным month и week недоступно для выбора dailyPay.

deprecated значение hourlyPay будет заменено на dailyPay
 */
    public ?string $payout_frequency = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\Job\Profession|null Body field profession */
    public ?\and_y87\php_client_avito\Generated\Schema\Job\Profession $profession = null;

    /** @var array<int, string>|null Блок участие вакансии в программах (массив строк)

Если у компании от лица которой создается вакансия нет всех необходимых разрешений на участие,
программа у вакансии не будет включена.

Возможные значения элементов массива:
  - "chastyeVyplaty" - Частые выплаты.
 */
    public ?array $programs = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\Job\RegistrationMethod|null Body field registration_method */
    public ?\and_y87\php_client_avito\Generated\Schema\Job\RegistrationMethod $registration_method = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\Job\RetailEquipmentType|null Body field retail_equipment_type */
    public ?\and_y87\php_client_avito\Generated\Schema\Job\RetailEquipmentType $retail_equipment_type = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\Job\RetailShopType|null Body field retail_shop_type */
    public ?\and_y87\php_client_avito\Generated\Schema\Job\RetailShopType $retail_shop_type = null;

    /** @var array<string, mixed>|null Блок с вилкой зарплаты */
    public ?array $salary = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\Job\SalaryDetail|null Body field salary_detail */
    public ?\and_y87\php_client_avito\Generated\Schema\Job\SalaryDetail $salary_detail = null;

    /** @var string|null Режим работы <br>
Возможные значения:
  - flyInFlyOut - Вахта
  - fixed - Фиксированный
  - flexible - Гибкий
  - shift - Сменный

flyInFlyOut - Вахта, при выборе данного режима работы, адрес вакансии может быть только "Город", если адрес передается полноценный, то улица будет отрезана и адрес будет до "Города".

deprecated значения fiveDay, sixDay, partTime, fullDay и remote будут заменены на fixed
 */
    public ?string $schedule = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\Job\Shifts|null Body field shifts */
    public ?\and_y87\php_client_avito\Generated\Schema\Job\Shifts $shifts = null;

    /** @var string|null Название вакансии (строка длиной от 1 до 50 символов) */
    public ?string $title = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\Job\ToolsAvailability|null Body field tools_availability */
    public ?\and_y87\php_client_avito\Generated\Schema\Job\ToolsAvailability $tools_availability = null;

    /** @var string|null Внутренний идентификатор вакансии или номер заявки на подбор, максимум 150 символов */
    public ?string $vacancy_code = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\Job\VehicleType|null Body field vehicle_type */
    public ?\and_y87\php_client_avito\Generated\Schema\Job\VehicleType $vehicle_type = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\Job\WorkDaysPerWeek|null Body field work_days_per_week */
    public ?\and_y87\php_client_avito\Generated\Schema\Job\WorkDaysPerWeek $work_days_per_week = null;

    /** @var array<int, string>|null Блок "Формат работы" (массив строк)

Возможные значения элементов массива:
  - "office" - В офисе или на объекте;
  - "remote" - Удалённо;
  - "gibrid" - Гибрид.
 */
    public ?array $work_format = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\Job\WorkHoursPerDay|null Body field work_hours_per_day */
    public ?\and_y87\php_client_avito\Generated\Schema\Job\WorkHoursPerDay $work_hours_per_day = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\Job\WorkerClass|null Body field worker_class */
    public ?\and_y87\php_client_avito\Generated\Schema\Job\WorkerClass $worker_class = null;
}
