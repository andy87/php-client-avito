<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Job;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito job/VacancyCreate.
 */
class VacancyCreate extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['address' => 'address', 'administrator_organization_type' => 'administrator_organization_type', 'age' => 'age', 'age_preferences' => 'age_preferences', 'allow_calls' => 'allow_calls', 'allow_messages' => 'allow_messages', 'apply_processing' => 'apply_processing', 'billing_type' => 'billing_type', 'bonuses' => 'bonuses', 'business_area' => 'business_area', 'citizenship' => 'citizenship', 'construction_work_type' => 'construction_work_type', 'contacts' => 'contacts', 'coordinates' => 'coordinates', 'cuisine' => 'cuisine', 'custom_employer_name' => 'custom_employer_name', 'delivery_method' => 'delivery_method', 'description' => 'description', 'driving_experience' => 'driving_experience', 'driving_license_category' => 'driving_license_category', 'eatery_type' => 'eatery_type', 'education_level' => 'education_level', 'employee_id' => 'employee_id', 'employment' => 'employment', 'experience' => 'experience', 'facility_type' => 'facility_type', 'food_production_shop_type' => 'food_production_shop_type', 'grade' => 'grade', 'html_tags' => 'html_tags', 'image_url' => 'image_url', 'is_company_car' => 'is_company_car', 'is_side_job' => 'is_side_job', 'medical_book' => 'medical_book', 'medical_specialization' => 'medical_specialization', 'medical_specialization_ids' => 'medical_specialization_ids', 'name' => 'name', 'payout_frequency' => 'payout_frequency', 'profession' => 'profession', 'registration_method' => 'registration_method', 'retail_equipment_type' => 'retail_equipment_type', 'retail_shop_type' => 'retail_shop_type', 'salary' => 'salary', 'salary_detail' => 'salary_detail', 'salary_range' => 'salary_range', 'schedule' => 'schedule', 'shifts' => 'shifts', 'tools_availability' => 'tools_availability', 'vacancy_code' => 'vacancy_code', 'vehicle_type' => 'vehicle_type', 'work_days_per_week' => 'work_days_per_week', 'work_format' => 'work_format', 'work_hours_per_day' => 'work_hours_per_day', 'worker_class' => 'worker_class'];

    protected const REQUIRED_FIELDS = ['name', 'description', 'billing_type', 'business_area', 'employment', 'schedule', 'experience'];

    protected const NULLABLE_FIELDS = ['delivery_method', 'driving_experience', 'is_company_car', 'vacancy_code'];

    protected const CASTS = ['administrator_organization_type' => \Andy87\ClientsAvito\Generated\Schema\Job\AdministratorOrganizationType::class, 'age' => \Andy87\ClientsAvito\Generated\Schema\Job\AgeCriteria::class, 'allow_calls' => \Andy87\ClientsAvito\Generated\Schema\Job\AllowCalls::class, 'apply_processing' => \Andy87\ClientsAvito\Generated\Schema\Job\ApplyProcessing::class, 'bonuses' => \Andy87\ClientsAvito\Generated\Schema\Job\Bonuses::class, 'business_area' => \Andy87\ClientsAvito\Generated\Schema\Job\BusinessArea::class, 'citizenship' => \Andy87\ClientsAvito\Generated\Schema\Job\CitizenshipCriteria::class, 'construction_work_type' => \Andy87\ClientsAvito\Generated\Schema\Job\ConstructionWorkType::class, 'contacts' => \Andy87\ClientsAvito\Generated\Schema\Job\Contacts::class, 'coordinates' => \Andy87\ClientsAvito\Generated\Schema\Job\Coordinates::class, 'cuisine' => \Andy87\ClientsAvito\Generated\Schema\Job\Cuisine::class, 'driving_license_category' => \Andy87\ClientsAvito\Generated\Schema\Job\DrivingLicenseCategory::class, 'eatery_type' => \Andy87\ClientsAvito\Generated\Schema\Job\EateryType::class, 'education_level' => \Andy87\ClientsAvito\Generated\Schema\Job\VacancyEducationLevel::class, 'facility_type' => \Andy87\ClientsAvito\Generated\Schema\Job\FacilityType::class, 'food_production_shop_type' => \Andy87\ClientsAvito\Generated\Schema\Job\FoodProductionShopType::class, 'grade' => \Andy87\ClientsAvito\Generated\Schema\Job\Grade::class, 'html_tags' => \Andy87\ClientsAvito\Generated\Schema\Job\HtmlTags::class, 'medical_book' => \Andy87\ClientsAvito\Generated\Schema\Job\MedicalBookVacancy::class, 'medical_specialization' => \Andy87\ClientsAvito\Generated\Schema\Job\MedicalSpecialization::class, 'medical_specialization_ids' => \Andy87\ClientsAvito\Generated\Schema\Job\MedicalSpecializationIds::class, 'profession' => \Andy87\ClientsAvito\Generated\Schema\Job\Profession::class, 'registration_method' => \Andy87\ClientsAvito\Generated\Schema\Job\RegistrationMethod::class, 'retail_equipment_type' => \Andy87\ClientsAvito\Generated\Schema\Job\RetailEquipmentType::class, 'retail_shop_type' => \Andy87\ClientsAvito\Generated\Schema\Job\RetailShopType::class, 'salary_detail' => \Andy87\ClientsAvito\Generated\Schema\Job\SalaryDetail::class, 'shifts' => \Andy87\ClientsAvito\Generated\Schema\Job\Shifts::class, 'tools_availability' => \Andy87\ClientsAvito\Generated\Schema\Job\ToolsAvailability::class, 'vehicle_type' => \Andy87\ClientsAvito\Generated\Schema\Job\VehicleType::class, 'work_days_per_week' => \Andy87\ClientsAvito\Generated\Schema\Job\WorkDaysPerWeek::class, 'work_hours_per_day' => \Andy87\ClientsAvito\Generated\Schema\Job\WorkHoursPerDay::class, 'worker_class' => \Andy87\ClientsAvito\Generated\Schema\Job\WorkerClass::class];

    /** @var string|null Полный адрес объекта (строка длиной от 1 до 256 символов). Обязательное, если не указаны координаты. */
    public ?string $address = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Job\AdministratorOrganizationType|null Schema field administrator_organization_type */
    public ?\Andy87\ClientsAvito\Generated\Schema\Job\AdministratorOrganizationType $administrator_organization_type = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Job\AgeCriteria|null Schema field age */
    public ?\Andy87\ClientsAvito\Generated\Schema\Job\AgeCriteria $age = null;

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

    /** @var \Andy87\ClientsAvito\Generated\Schema\Job\AllowCalls|null Schema field allow_calls */
    public ?\Andy87\ClientsAvito\Generated\Schema\Job\AllowCalls $allow_calls = null;

    /** @var bool|null Возможность откликнуться на вакансию через сайт. Если передается apply_processing, то значение allow_messages будет игнорироваться и равно true. */
    public ?bool $allow_messages = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Job\ApplyProcessing|null Schema field apply_processing */
    public ?\Andy87\ClientsAvito\Generated\Schema\Job\ApplyProcessing $apply_processing = null;

    /** @var string Вариант платного размещения

Возможные значения:
  - "package" - размещение объявления осуществляется только при наличии подходящего пакета размещения
  - "packageOrSingle" - при наличии подходящего пакета оплата размещения объявления произойдет с него; если нет подходящего пакета, но достаточно денег на кошельке Авито, то произойдет разовое размещение
  - "single" - только разовое размещение, произойдет при наличии достаточной суммы на кошельке Авито; если есть подходящий пакет размещения, он будет проигнорирован
 */
    public string $billing_type;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Job\Bonuses|null Schema field bonuses */
    public ?\Andy87\ClientsAvito\Generated\Schema\Job\Bonuses $bonuses = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Job\BusinessArea Schema field business_area */
    public \Andy87\ClientsAvito\Generated\Schema\Job\BusinessArea $business_area;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Job\CitizenshipCriteria|null Schema field citizenship */
    public ?\Andy87\ClientsAvito\Generated\Schema\Job\CitizenshipCriteria $citizenship = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Job\ConstructionWorkType|null Schema field construction_work_type */
    public ?\Andy87\ClientsAvito\Generated\Schema\Job\ConstructionWorkType $construction_work_type = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Job\Contacts|null Schema field contacts */
    public ?\Andy87\ClientsAvito\Generated\Schema\Job\Contacts $contacts = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Job\Coordinates|null Schema field coordinates */
    public ?\Andy87\ClientsAvito\Generated\Schema\Job\Coordinates $coordinates = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Job\Cuisine|null Schema field cuisine */
    public ?\Andy87\ClientsAvito\Generated\Schema\Job\Cuisine $cuisine = null;

    /** @var string|null Название компании (строка длиной до 60 символов) */
    public ?string $custom_employer_name = null;

    /** @var array<int, string>|null Способ доставки */
    public ?array $delivery_method = null;

    /** @var string Описание вакансии (строка длиной от 1 до 5000 символов) Поддерживает html-тэги `p`, `ul`, `ol`, `li`, `br`, `strong`, `em` */
    public string $description;

    /** @var array<string, mixed>|null Стаж вождения */
    public ?array $driving_experience = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Job\DrivingLicenseCategory|null Schema field driving_license_category */
    public ?\Andy87\ClientsAvito\Generated\Schema\Job\DrivingLicenseCategory $driving_license_category = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Job\EateryType|null Schema field eatery_type */
    public ?\Andy87\ClientsAvito\Generated\Schema\Job\EateryType $eatery_type = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Job\VacancyEducationLevel|null Schema field education_level */
    public ?\Andy87\ClientsAvito\Generated\Schema\Job\VacancyEducationLevel $education_level = null;

    /** @var int|null employee_id - Идентификатор сотрудника на Авито. Если этот параметр указан, то вакансия будет закреплена за сотрудником и с его баланса в Avito Pro будет списано размещение.
Использовать параметр можно только с billing_type равным package.
Сотрудник должен быть активен.
 */
    public ?int $employee_id = null;

    /** @var string Занятость <br>
Возможные значения:
  - temporary - Временная
  - full - Полная
  - internship - Стажировка
  - partial - Частичная

Если ничего не выбрать то будет автоматически проставляться в зависимости от режима работы:
При flexible и partTime, тип занятости - partial.
Для всех остальных full.
 */
    public string $employment;

    /** @var array<string, mixed> Опыт работы */
    public array $experience;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Job\FacilityType|null Schema field facility_type */
    public ?\Andy87\ClientsAvito\Generated\Schema\Job\FacilityType $facility_type = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Job\FoodProductionShopType|null Schema field food_production_shop_type */
    public ?\Andy87\ClientsAvito\Generated\Schema\Job\FoodProductionShopType $food_production_shop_type = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Job\Grade|null Schema field grade */
    public ?\Andy87\ClientsAvito\Generated\Schema\Job\Grade $grade = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Job\HtmlTags|null Schema field html_tags */
    public ?\Andy87\ClientsAvito\Generated\Schema\Job\HtmlTags $html_tags = null;

    /** @var string|null URL-адрес логотипа вакансии. Ссылка на файл должна быть прямой | (при переходе не открываются элементы другого сайта (логотипы, кнопки или другие детали интерфейса) и не запрашивается логин и пароль) и доступной для IP 185.89.12.0/22, 146.158.48.0/21, 185.79.237.224/28 и 87.245.204.32/28; */
    public ?string $image_url = null;

    /** @var bool|null Предоставляет ли компания автомобиль */
    public ?bool $is_company_car = null;

    /** @var bool|null Подработка */
    public ?bool $is_side_job = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Job\MedicalBookVacancy|null Schema field medical_book */
    public ?\Andy87\ClientsAvito\Generated\Schema\Job\MedicalBookVacancy $medical_book = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Job\MedicalSpecialization|null Schema field medical_specialization */
    public ?\Andy87\ClientsAvito\Generated\Schema\Job\MedicalSpecialization $medical_specialization = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Job\MedicalSpecializationIds|null Schema field medical_specialization_ids */
    public ?\Andy87\ClientsAvito\Generated\Schema\Job\MedicalSpecializationIds $medical_specialization_ids = null;

    /** @var string Название вакансии (строка длиной от 1 до 50 символов) */
    public string $name;

    /** @var array<string, mixed>|null Частота выплат<br>
Возможные значения:
  - "dailyPay" - Каждый день;
  - "biweeklyPay" - Дважды в месяц;
  - "weeklyPay" - Раз в неделю;
  - "thriceMonthlyPay" - три раза в месяц;
  - "monthlyPay" - Раз в месяц.

Для paid_period равным month и week недоступно для выбора dailyPay.

deprecated значение hourlyPay будет заменено на dailyPay
 */
    public ?array $payout_frequency = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Job\Profession|null Schema field profession */
    public ?\Andy87\ClientsAvito\Generated\Schema\Job\Profession $profession = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Job\RegistrationMethod|null Schema field registration_method */
    public ?\Andy87\ClientsAvito\Generated\Schema\Job\RegistrationMethod $registration_method = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Job\RetailEquipmentType|null Schema field retail_equipment_type */
    public ?\Andy87\ClientsAvito\Generated\Schema\Job\RetailEquipmentType $retail_equipment_type = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Job\RetailShopType|null Schema field retail_shop_type */
    public ?\Andy87\ClientsAvito\Generated\Schema\Job\RetailShopType $retail_shop_type = null;

    /** @var int|null Зарплата, рублей в месяц, если заполнено вместе с salary_range, то приоритет у salary_range */
    public ?int $salary = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Job\SalaryDetail|null Schema field salary_detail */
    public ?\Andy87\ClientsAvito\Generated\Schema\Job\SalaryDetail $salary_detail = null;

    /** @var array<string, mixed>|null Блок с вилкой зарплаты, если одновременно с salary, имеет приоритет */
    public ?array $salary_range = null;

    /** @var array<string, mixed> Режим работы <br>
Возможные значения:
  - flyInFlyOut - Вахта
  - fixed - Фиксированный
  - flexible - Гибкий
  - shift - Сменный

deprecated значения fiveDay, sixDay, partTime, fullDay и remote будут заменены на fixed
flyInFlyOut - Вахта, при выборе данного режима работы, адрес вакансии может быть только "Город", если адрес передается полноценный, то улица будет отрезана и адрес будет до "Города".
 */
    public array $schedule;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Job\Shifts|null Schema field shifts */
    public ?\Andy87\ClientsAvito\Generated\Schema\Job\Shifts $shifts = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Job\ToolsAvailability|null Schema field tools_availability */
    public ?\Andy87\ClientsAvito\Generated\Schema\Job\ToolsAvailability $tools_availability = null;

    /** @var string|null Внутренний идентификатор вакансии или номер заявки на подбор, максимум 150 символов */
    public ?string $vacancy_code = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Job\VehicleType|null Schema field vehicle_type */
    public ?\Andy87\ClientsAvito\Generated\Schema\Job\VehicleType $vehicle_type = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Job\WorkDaysPerWeek|null Schema field work_days_per_week */
    public ?\Andy87\ClientsAvito\Generated\Schema\Job\WorkDaysPerWeek $work_days_per_week = null;

    /** @var array<int, string>|null Блок "Формат работы" (массив строк)

Возможные значения элементов массива:
  - "office" - В офисе или на объекте;
  - "remote" - Удалённо;
  - "gibrid" - Гибрид.
 */
    public ?array $work_format = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Job\WorkHoursPerDay|null Schema field work_hours_per_day */
    public ?\Andy87\ClientsAvito\Generated\Schema\Job\WorkHoursPerDay $work_hours_per_day = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Job\WorkerClass|null Schema field worker_class */
    public ?\Andy87\ClientsAvito\Generated\Schema\Job\WorkerClass $worker_class = null;
}
