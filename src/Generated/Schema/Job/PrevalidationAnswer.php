<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Job;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito job/PrevalidationAnswer.
 */
class PrevalidationAnswer extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['label' => 'label', 'value' => 'value', 'variable' => 'variable'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string|null Название переменной */
    public ?string $label = null;

    /** @var string|null Значение переменной */
    public ?string $value = null;

    /** @var string|null Идентификатор переменной. Распространенные значения:<br/> `job_fio` - ФИО<br/> `job_phone` - телефон<br/> `job_birthdate` - дата рождения<br/> `job_city` - город<br/> `job_gender` - пол<br/> `job_citizenship` - гражданство<br/> `job_schedule` - желаемый режим работы<br/> `job_educational_level` - образование<br/> `job_district` - желаемый район работы<br/> `job_experience` - есть ли подходящий опыт<br/> `job_work_duration` - стаж работы на аналогичной должности<br/> `job_last_employment` - последнее место работы<br/> `job_last_position` - должность на последнем месте работы<br/> `job_salary_expectations` - желаемая зарплата<br/> `job_responsibility` - образование, специальность<br/> `job_current_education` - учится ли сейчас<br/> `job_current_employment` - работает ли сейчас<br/> `docs_available` - наличие СНИЛС, ИНН, паспорта или временного удостоверения<br/> `job_military_docs` - наличие документов воинского учета<br/> `is_drivers_licence` - наличие водительских прав<br/> `job_drivers_licence` - категория водительских прав<br/> `drivers_licence_country` - страна выдачи водительских прав<br/> `is_individual_entrepreneur` - оформлен ли как ИП<br/> `job_employment_records` - наличие трудовой книжки<br/> `is_medical_record` - наличие медицинской книжки<br/> `job_covid19` - сертификат о вакцинации<br/> `job_official_employment` - готовность работать по трудовому договору<br/> `job_tha` - РВП<br/> `job_work_permit` - разрешение на работу<br/> `job_tractor_driver_license` - наличие прав для управления спецтехникой<br/> `way_to_travel` - способ перемещения по городу<br/> `job_hostel` - нужно ли проживание<br/> `job_fly_in_basis_readiness` - готовность к вахте по графику из вакансии<br/> `job_spent_time_road` - желаемое время на дорогу<br/> `job_call_time` - время для звонка<br/> `job_driving_experience` - стаж вождения<br/> `job_phone_android` - наличие телефона на Android<br/> `job_use_own_car` - наличие авто<br/> `job_for_me` - ищет ли работу для себя<br/> `job_email` - электронная почта<br/> `job_preferred_address` - желаемый адрес работы<br/> `is_self_employed` - статус самозанятого<br/> `job_training_ready` - готовность пройти обучение<br/> `has_pc_and_workplace` - наличие рабочего места и компьютера */
    public ?string $variable = null;
}
