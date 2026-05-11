<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt;

use and_y87\PhpClientSdk\Request\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [PUT] /job/v1/vacancies/{vacancy_id}.
 *
 * @documentation https://developers.avito.ru/api-catalog/job/documentation#operation/vacancyUpdate
 */
class VacancyUpdatePrompt extends AbstractPrompt
{
    protected const METHOD = 'PUT';

    protected const ENDPOINT = '/job/v1/vacancies/{vacancy_id}';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const QUERY_PARAMETER_STYLES = [];

    protected const FIELD_MAP = ['vacancy_id' => 'vacancy_id', 'X_Is_Employee' => 'X-Is-Employee', 'address' => 'address', 'administrator_organization_type' => 'administrator_organization_type', 'age' => 'age', 'age_preferences' => 'age_preferences', 'allow_calls' => 'allow_calls', 'allow_messages' => 'allow_messages', 'apply_processing' => 'apply_processing', 'billing_type' => 'billing_type', 'bonuses' => 'bonuses', 'citizenship' => 'citizenship', 'construction_work_type' => 'construction_work_type', 'contacts' => 'contacts', 'coordinates' => 'coordinates', 'cuisine' => 'cuisine', 'custom_employer_name' => 'custom_employer_name', 'delivery_method' => 'delivery_method', 'description' => 'description', 'driving_experience' => 'driving_experience', 'driving_license_category' => 'driving_license_category', 'eatery_type' => 'eatery_type', 'education_level' => 'education_level', 'employee_id' => 'employee_id', 'experience' => 'experience', 'facility_type' => 'facility_type', 'food_production_shop_type' => 'food_production_shop_type', 'grade' => 'grade', 'html_tags' => 'html_tags', 'image_url' => 'image_url', 'is_company_car' => 'is_company_car', 'is_side_job' => 'is_side_job', 'medical_book' => 'medical_book', 'medical_specialization' => 'medical_specialization', 'medical_specialization_ids' => 'medical_specialization_ids', 'name' => 'name', 'payout_frequency' => 'payout_frequency', 'profession' => 'profession', 'registration_method' => 'registration_method', 'retail_equipment_type' => 'retail_equipment_type', 'retail_shop_type' => 'retail_shop_type', 'salary' => 'salary', 'salary_detail' => 'salary_detail', 'salary_range' => 'salary_range', 'shifts' => 'shifts', 'tools_availability' => 'tools_availability', 'vacancy_code' => 'vacancy_code', 'vehicle_type' => 'vehicle_type', 'work_days_per_week' => 'work_days_per_week', 'work_format' => 'work_format', 'work_hours_per_day' => 'work_hours_per_day', 'worker_class' => 'worker_class'];

    protected const REQUIRED_FIELDS = ['vacancy_id', 'billing_type'];

    protected const NULLABLE_FIELDS = ['X_Is_Employee', 'age_preferences', 'delivery_method', 'driving_experience', 'is_company_car', 'is_side_job', 'payout_frequency', 'vacancy_code'];

    protected const CASTS = ['administrator_organization_type' => \and_y87\php_client_avito\Generated\Schema\Job\AdministratorOrganizationType::class, 'age' => \and_y87\php_client_avito\Generated\Schema\Job\AgeCriteria::class, 'allow_calls' => \and_y87\php_client_avito\Generated\Schema\Job\AllowCalls::class, 'apply_processing' => \and_y87\php_client_avito\Generated\Schema\Job\ApplyProcessing::class, 'bonuses' => \and_y87\php_client_avito\Generated\Schema\Job\Bonuses::class, 'citizenship' => \and_y87\php_client_avito\Generated\Schema\Job\CitizenshipCriteria::class, 'construction_work_type' => \and_y87\php_client_avito\Generated\Schema\Job\ConstructionWorkType::class, 'contacts' => \and_y87\php_client_avito\Generated\Schema\Job\Contacts::class, 'coordinates' => \and_y87\php_client_avito\Generated\Schema\Job\Coordinates::class, 'cuisine' => \and_y87\php_client_avito\Generated\Schema\Job\Cuisine::class, 'driving_license_category' => \and_y87\php_client_avito\Generated\Schema\Job\DrivingLicenseCategory::class, 'eatery_type' => \and_y87\php_client_avito\Generated\Schema\Job\EateryType::class, 'education_level' => \and_y87\php_client_avito\Generated\Schema\Job\VacancyEducationLevel::class, 'facility_type' => \and_y87\php_client_avito\Generated\Schema\Job\FacilityType::class, 'food_production_shop_type' => \and_y87\php_client_avito\Generated\Schema\Job\FoodProductionShopType::class, 'grade' => \and_y87\php_client_avito\Generated\Schema\Job\Grade::class, 'html_tags' => \and_y87\php_client_avito\Generated\Schema\Job\HtmlTags::class, 'medical_book' => \and_y87\php_client_avito\Generated\Schema\Job\MedicalBookVacancy::class, 'medical_specialization' => \and_y87\php_client_avito\Generated\Schema\Job\MedicalSpecialization::class, 'medical_specialization_ids' => \and_y87\php_client_avito\Generated\Schema\Job\MedicalSpecializationIds::class, 'profession' => \and_y87\php_client_avito\Generated\Schema\Job\Profession::class, 'registration_method' => \and_y87\php_client_avito\Generated\Schema\Job\RegistrationMethod::class, 'retail_equipment_type' => \and_y87\php_client_avito\Generated\Schema\Job\RetailEquipmentType::class, 'retail_shop_type' => \and_y87\php_client_avito\Generated\Schema\Job\RetailShopType::class, 'salary_detail' => \and_y87\php_client_avito\Generated\Schema\Job\SalaryDetail::class, 'shifts' => \and_y87\php_client_avito\Generated\Schema\Job\Shifts::class, 'tools_availability' => \and_y87\php_client_avito\Generated\Schema\Job\ToolsAvailability::class, 'vehicle_type' => \and_y87\php_client_avito\Generated\Schema\Job\VehicleType::class, 'work_days_per_week' => \and_y87\php_client_avito\Generated\Schema\Job\WorkDaysPerWeek::class, 'work_hours_per_day' => \and_y87\php_client_avito\Generated\Schema\Job\WorkHoursPerDay::class, 'worker_class' => \and_y87\php_client_avito\Generated\Schema\Job\WorkerClass::class];

    protected const PATH_FIELDS = ['vacancy_id'];

    protected const QUERY_FIELDS = [];

    protected const HEADER_FIELDS = ['X_Is_Employee'];

    protected const BODY_FIELDS = ['address', 'administrator_organization_type', 'age', 'age_preferences', 'allow_calls', 'allow_messages', 'apply_processing', 'billing_type', 'bonuses', 'citizenship', 'construction_work_type', 'contacts', 'coordinates', 'cuisine', 'custom_employer_name', 'delivery_method', 'description', 'driving_experience', 'driving_license_category', 'eatery_type', 'education_level', 'employee_id', 'experience', 'facility_type', 'food_production_shop_type', 'grade', 'html_tags', 'image_url', 'is_company_car', 'is_side_job', 'medical_book', 'medical_specialization', 'medical_specialization_ids', 'name', 'payout_frequency', 'profession', 'registration_method', 'retail_equipment_type', 'retail_shop_type', 'salary', 'salary_detail', 'salary_range', 'shifts', 'tools_availability', 'vacancy_code', 'vehicle_type', 'work_days_per_week', 'work_format', 'work_hours_per_day', 'worker_class'];

    protected const BODY_ROOT_FIELD = null;

    /** @var int Идентификатор вакансии на сайте */
    public int $vacancy_id;

    /** @var bool|null Сотрудник компании может редактировать только свои вакансии. */
    public ?bool $X_Is_Employee = null;

    /** @var string|null Полный адрес объекта (строка длиной от 0 до 256 символов) */
    public ?string $address = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\Job\AdministratorOrganizationType|null Body field administrator_organization_type */
    public ?\and_y87\php_client_avito\Generated\Schema\Job\AdministratorOrganizationType $administrator_organization_type = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\Job\AgeCriteria|null Body field age */
    public ?\and_y87\php_client_avito\Generated\Schema\Job\AgeCriteria $age = null;

    /** @var array<int, string>|null Body field age_preferences */
    public ?array $age_preferences = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\Job\AllowCalls|null Body field allow_calls */
    public ?\and_y87\php_client_avito\Generated\Schema\Job\AllowCalls $allow_calls = null;

    /** @var bool|null Возможность откликнуться на вакансию через сайт. Если передается apply_processing, то значение allow_messages будет игнорироваться и равно true. */
    public ?bool $allow_messages = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\Job\ApplyProcessing|null Body field apply_processing */
    public ?\and_y87\php_client_avito\Generated\Schema\Job\ApplyProcessing $apply_processing = null;

    /** @var string Вариант платного размещения

Возможные значения:
  - "package" - размещение объявления осуществляется только при наличии подходящего пакета размещения
  - "packageOrSingle" - при наличии подходящего пакета оплата размещения объявления произойдет с него; если нет подходящего пакета, но достаточно денег на кошельке Авито, то произойдет разовое размещение
  - "single" - только разовое размещение, произойдет при наличии достаточной суммы на кошельке Авито; если есть подходящий пакет размещения, он будет проигнорирован
 */
    public string $billing_type;

    /** @var \and_y87\php_client_avito\Generated\Schema\Job\Bonuses|null Body field bonuses */
    public ?\and_y87\php_client_avito\Generated\Schema\Job\Bonuses $bonuses = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\Job\CitizenshipCriteria|null Body field citizenship */
    public ?\and_y87\php_client_avito\Generated\Schema\Job\CitizenshipCriteria $citizenship = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\Job\ConstructionWorkType|null Body field construction_work_type */
    public ?\and_y87\php_client_avito\Generated\Schema\Job\ConstructionWorkType $construction_work_type = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\Job\Contacts|null Body field contacts */
    public ?\and_y87\php_client_avito\Generated\Schema\Job\Contacts $contacts = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\Job\Coordinates|null Body field coordinates */
    public ?\and_y87\php_client_avito\Generated\Schema\Job\Coordinates $coordinates = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\Job\Cuisine|null Body field cuisine */
    public ?\and_y87\php_client_avito\Generated\Schema\Job\Cuisine $cuisine = null;

    /** @var string|null Название компании (строка длиной до 60 символов) */
    public ?string $custom_employer_name = null;

    /** @var array<int, string>|null Способ доставки */
    public ?array $delivery_method = null;

    /** @var string|null Описание вакансии (строка длиной от 1 до 5000 символов) Поддерживает html-тэги `p`, `ul`, `ol`, `li`, `br`, `strong`, `em` */
    public ?string $description = null;

    /** @var array<string, mixed>|null Стаж вождения */
    public ?array $driving_experience = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\Job\DrivingLicenseCategory|null Body field driving_license_category */
    public ?\and_y87\php_client_avito\Generated\Schema\Job\DrivingLicenseCategory $driving_license_category = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\Job\EateryType|null Body field eatery_type */
    public ?\and_y87\php_client_avito\Generated\Schema\Job\EateryType $eatery_type = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\Job\VacancyEducationLevel|null Body field education_level */
    public ?\and_y87\php_client_avito\Generated\Schema\Job\VacancyEducationLevel $education_level = null;

    /** @var int|null employee_id - Идентификатор сотрудника на Авито.
Сотрудник может редактировать только закрепленные за ним вакансии в Avito Pro.
Сотрудник должен быть в активен.
 */
    public ?int $employee_id = null;

    /** @var array<string, mixed>|null Опыт работы */
    public ?array $experience = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\Job\FacilityType|null Body field facility_type */
    public ?\and_y87\php_client_avito\Generated\Schema\Job\FacilityType $facility_type = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\Job\FoodProductionShopType|null Body field food_production_shop_type */
    public ?\and_y87\php_client_avito\Generated\Schema\Job\FoodProductionShopType $food_production_shop_type = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\Job\Grade|null Body field grade */
    public ?\and_y87\php_client_avito\Generated\Schema\Job\Grade $grade = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\Job\HtmlTags|null Body field html_tags */
    public ?\and_y87\php_client_avito\Generated\Schema\Job\HtmlTags $html_tags = null;

    /** @var string|null URL-адрес логотипа вакансии. Ссылка на файл должна быть прямой | (при переходе не открываются элементы другого сайта (логотипы, кнопки или другие детали интерфейса) и не запрашивается логин и пароль) и доступной для IP 185.89.12.0/22, 146.158.48.0/21, 185.79.237.224/28 и 87.245.204.32/28; */
    public ?string $image_url = null;

    /** @var bool|null Предоставляет ли компания автомобиль */
    public ?bool $is_company_car = null;

    /** @var bool|null Подработка */
    public ?bool $is_side_job = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\Job\MedicalBookVacancy|null Body field medical_book */
    public ?\and_y87\php_client_avito\Generated\Schema\Job\MedicalBookVacancy $medical_book = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\Job\MedicalSpecialization|null Body field medical_specialization */
    public ?\and_y87\php_client_avito\Generated\Schema\Job\MedicalSpecialization $medical_specialization = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\Job\MedicalSpecializationIds|null Body field medical_specialization_ids */
    public ?\and_y87\php_client_avito\Generated\Schema\Job\MedicalSpecializationIds $medical_specialization_ids = null;

    /** @var string|null Название вакансии (строка длиной от 0 до 50 символов) */
    public ?string $name = null;

    /** @var array<string, mixed>|null Частота выплат
Возможные значения:
  - "dailyPay" - Каждый день;
  - "biweeklyPay" - Дважды в месяц;
  - "weeklyPay" - Раз в неделю;
  - "thriceMonthlyPay" - три раза в месяц
  - "monthlyPay" - Раз в месяц.

deprecated значение hourlyPay будет заменено на dailyPay
 */
    public ?array $payout_frequency = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\Job\Profession|null Body field profession */
    public ?\and_y87\php_client_avito\Generated\Schema\Job\Profession $profession = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\Job\RegistrationMethod|null Body field registration_method */
    public ?\and_y87\php_client_avito\Generated\Schema\Job\RegistrationMethod $registration_method = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\Job\RetailEquipmentType|null Body field retail_equipment_type */
    public ?\and_y87\php_client_avito\Generated\Schema\Job\RetailEquipmentType $retail_equipment_type = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\Job\RetailShopType|null Body field retail_shop_type */
    public ?\and_y87\php_client_avito\Generated\Schema\Job\RetailShopType $retail_shop_type = null;

    /** @var int|null Зарплата, рублей в месяц, если заполнено вместе с salary_range, то приоритет у salary_range */
    public ?int $salary = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\Job\SalaryDetail|null Body field salary_detail */
    public ?\and_y87\php_client_avito\Generated\Schema\Job\SalaryDetail $salary_detail = null;

    /** @var array<string, mixed>|null Блок с вилкой зарплаты, если заполнен одновременно с salary, то имеет приоритет */
    public ?array $salary_range = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\Job\Shifts|null Body field shifts */
    public ?\and_y87\php_client_avito\Generated\Schema\Job\Shifts $shifts = null;

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
