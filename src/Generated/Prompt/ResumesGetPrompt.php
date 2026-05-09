<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\PhpClientSdk\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [GET] /job/v1/resumes/.
 *
 * @documentation https://developers.avito.ru/api-catalog/job/documentation#operation/resumesGet
 */
class ResumesGetPrompt extends AbstractPrompt
{
    protected const METHOD = 'GET';

    protected const ENDPOINT = '/job/v1/resumes/';

    protected const CONTENT_TYPE = null;

    protected const AUTHORIZATION_REQUIRED = true;

    protected const QUERY_PARAMETER_STYLES = ['per_page' => ['style' => 'form', 'explode' => true], 'page' => ['style' => 'form', 'explode' => true], 'cursor' => ['style' => 'form', 'explode' => true], 'fields' => ['style' => 'form', 'explode' => true], 'query' => ['style' => 'form', 'explode' => true], 'location' => ['style' => 'form', 'explode' => true], 'metro' => ['style' => 'form', 'explode' => true], 'district' => ['style' => 'form', 'explode' => true], 'radius' => ['style' => 'form', 'explode' => true], 'specialization' => ['style' => 'form', 'explode' => true], 'schedule' => ['style' => 'form', 'explode' => true], 'business_trip_readiness' => ['style' => 'form', 'explode' => true], 'relocation_readiness' => ['style' => 'form', 'explode' => true], 'gender' => ['style' => 'form', 'explode' => true], 'age_min' => ['style' => 'form', 'explode' => true], 'age_max' => ['style' => 'form', 'explode' => true], 'education_level' => ['style' => 'form', 'explode' => true], 'experience_min' => ['style' => 'form', 'explode' => true], 'experience_max' => ['style' => 'form', 'explode' => true], 'salary_min' => ['style' => 'form', 'explode' => true], 'salary_max' => ['style' => 'form', 'explode' => true], 'updated_at' => ['style' => 'form', 'explode' => true], 'updated_from' => ['style' => 'form', 'explode' => true], 'updated_to' => ['style' => 'form', 'explode' => true], 'nationality' => ['style' => 'form', 'explode' => true], 'driver_licence' => ['style' => 'form', 'explode' => true], 'driver_licence_category' => ['style' => 'form', 'explode' => true], 'driving_experience' => ['style' => 'form', 'explode' => true], 'own_transport' => ['style' => 'form', 'explode' => true], 'medical_book' => ['style' => 'form', 'explode' => true]];

    protected const FIELD_MAP = ['X_Is_Employee' => 'X-Is-Employee', 'per_page' => 'per_page', 'page' => 'page', 'cursor' => 'cursor', 'fields' => 'fields', 'query' => 'query', 'location' => 'location', 'metro' => 'metro', 'district' => 'district', 'radius' => 'radius', 'specialization' => 'specialization', 'schedule' => 'schedule', 'business_trip_readiness' => 'business_trip_readiness', 'relocation_readiness' => 'relocation_readiness', 'gender' => 'gender', 'age_min' => 'age_min', 'age_max' => 'age_max', 'education_level' => 'education_level', 'experience_min' => 'experience_min', 'experience_max' => 'experience_max', 'salary_min' => 'salary_min', 'salary_max' => 'salary_max', 'updated_at' => 'updated_at', 'updated_from' => 'updated_from', 'updated_to' => 'updated_to', 'nationality' => 'nationality', 'driver_licence' => 'driver_licence', 'driver_licence_category' => 'driver_licence_category', 'driving_experience' => 'driving_experience', 'own_transport' => 'own_transport', 'medical_book' => 'medical_book'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['X_Is_Employee'];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = ['per_page', 'page', 'cursor', 'fields', 'query', 'location', 'metro', 'district', 'radius', 'specialization', 'schedule', 'business_trip_readiness', 'relocation_readiness', 'gender', 'age_min', 'age_max', 'education_level', 'experience_min', 'experience_max', 'salary_min', 'salary_max', 'updated_at', 'updated_from', 'updated_to', 'nationality', 'driver_licence', 'driver_licence_category', 'driving_experience', 'own_transport', 'medical_book'];

    protected const HEADER_FIELDS = ['X_Is_Employee'];

    protected const BODY_FIELDS = [];

    protected const BODY_ROOT_FIELD = null;

    /** @var bool|null Включает привилегии компании для сотрудника */
    public ?bool $X_Is_Employee = null;

    /** @var int|null Количество записей на странице (положительное число от 1 до 100) */
    public ?int $per_page = null;

    /** @var int|null Номер страницы (положительное число больше 0, произведение page на per_page не должно превышать 5000) */
    public ?int $page = null;

    /** @var int|null Курсор поиска (если не указан, будет начат новый поиск и его курсор будет возвращен в ответе) */
    public ?int $cursor = null;

    /** @var string|null Поля ответа (можно указать несколько значений через запятую) */
    public ?string $fields = null;

    /** @var string|null Поисковая фраза */
    public ?string $query = null;

    /** @var int|null Идентификатор региона поиска (можно указать несколько значений через запятую)
<br>
Метод принимает идентификаторы сущностей Region и City из [справочника](https://autoload.avito.ru/format/Locations.xml).
 */
    public ?int $location = null;

    /** @var int|null Идентификатор метро поиска (можно указать несколько значений через запятую)
<br>
Метод принимает идентификаторы сущности Subway из [справочника](https://autoload.avito.ru/format/Locations.xml).
 */
    public ?int $metro = null;

    /** @var int|null Идентификатор района поиска (можно указать несколько значений через запятую)
<br>
Метод принимает идентификаторы сущности District из [справочника](https://autoload.avito.ru/format/Locations.xml).
 */
    public ?int $district = null;

    /** @var array<string, mixed>|null Радиус поиска
 */
    public ?array $radius = null;

    /** @var int|null Идентификатор сферы деятельности (можно указать несколько значений через запятую)
<br>
Возможные значения:
- 10166 - IT, интернет, телеком
- 10167 - Медицина, фармацевтика
- 10168 - Продажи
- 10169 - Страхование
- 10170 - Транспорт, логистика
- 10171 - Образование, наука
- 10172 - Строительство
- 10173 - Туризм, рестораны
- 10174 - Фитнес, салоны красоты
- 10175 - Без опыта, студенты
- 10180 - Автомобильный бизнес
- 10181 - Бухгалтерия, финансы
- 10182 - Высший менеджмент
- 10183 - Госслужба, НКО
- 10184 - ЖКХ, эксплуатация
- 10185 - Искусство, развлечения
- 10186 - Консультирование
- 10187 - Маркетинг, реклама, PR
- 10188 - Охрана, безопасность
- 10189 - Управление персоналом
- 10190 - Юриспруденция
- 10191 - Административная работа
- 10192 - Банки, инвестиции
- 10193 - Производство, сырьё, с/х
- 16844 - Домашний персонал
- 2804251 - Курьерская доставка
- 2804250 - Такси
 */
    public ?int $specialization = null;

    /** @var string|null График работы (можно указать несколько значений через запятую)
<br>
Возможные значения:
- partial-day - Неполный рабочий день
- full-day - Полный рабочий день
- fly-in-fly-out - Вахтовый метод
- flexible - Гибкий график
- shift - Сменный график
- remote - Удаленная работа
 */
    public ?string $schedule = null;

    /** @var string|null Готовность к командировкам (можно указать несколько значений через запятую)
<br>
Возможные значения:
- ready - Готов
- never - Не готов
- sometimes - Иногда
 */
    public ?string $business_trip_readiness = null;

    /** @var string|null Готовность к переезду (можно указать несколько значений через запятую)
<br>
Возможные значения:
- possible - Возможен
- never - Невозможен
 */
    public ?string $relocation_readiness = null;

    /** @var string|null Пол (можно указать несколько значений через запятую)
<br>
Возможные значения:
- female - Женщина
- male - Мужчина
 */
    public ?string $gender = null;

    /** @var int|null Минимальный возраст (включительно, положительное число от 14 до 99) */
    public ?int $age_min = null;

    /** @var int|null Максимальный возраст (включительно, положительное число от 18 до 99) */
    public ?int $age_max = null;

    /** @var string|null Уровень образования (можно указать несколько значений через запятую)
<br>
Возможные значения:
- higher - Высшее
- unfinished-higher - Неоконченное высшее
- secondary - Среднее
- special-secondary - Среднее специальное
 */
    public ?string $education_level = null;

    /** @var int|null Минимальный стаж работы (включительно, положительное число от 0 до 50) */
    public ?int $experience_min = null;

    /** @var int|null Максимальный стаж работы (включительно, положительное число от 0 до 50) */
    public ?int $experience_max = null;

    /** @var int|null Минимальный размер заработной платы (включительно, положительное число) */
    public ?int $salary_min = null;

    /** @var int|null Максимальный размер заработной платы (включительно, положительное число) */
    public ?int $salary_max = null;

    /** @var string|null Дата последнего обновления (от updated_at до текущей даты) */
    public ?string $updated_at = null;

    /** @var string|null Дата последнего обновления (от updated_at) */
    public ?string $updated_from = null;

    /** @var string|null Дата последнего обновления (до updated_at) */
    public ?string $updated_to = null;

    /** @var int|null Идентификатор гражданства(можно указать несколько значений через запятую)</br>
см. идентификаторы гражданства в [справочнике](https://www.avito.st/s/openapi/catalog_nationality.xml)</br>
Распространенные значения:
- 15973 - Россия
- 15974 - Украина
- 15975 - Белоруссия
- 15979 - Азербайджан
- 15985 - Армения
- 16020 - Грузия
- 15976 - Казахстан
- 16046 - Киргизия
- 16082 - Молдавия
- 16129 - Таджикистан
- 16140 - Узбекистан
 */
    public ?int $nationality = null;

    /** @var string|null Водительское удостоверение
<br>
Возможные значения:
- yes - Удостоверение есть
- no - Удостоверения нет
 */
    public ?string $driver_licence = null;

    /** @var string|null Категория водительского удостоверения (можно указать несколько значений через запятую)
<br>
Возможные значения:
  - a
  - b
  - be
  - c
  - ce
  - d
  - de
  - m
  - tm
  - tb
 */
    public ?string $driver_licence_category = null;

    /** @var string|null Стаж вождения (можно указать несколько значений через запятую)
<br>
Возможные значения:
  - less-than-three-years - Стаж вождения меньше трех лет
  - more-than-three-years - Стаж вождения больше трех лет
 */
    public ?string $driving_experience = null;

    /** @var string|null Свой транспорт (можно указать несколько значений через запятую)
<br>
Возможные значения:
  - no - Нет
  - car - Легковое авто
  - cargo-car - Грузовое авто
  - bike - Мотоцикл
  - scooter - Мопед
 */
    public ?string $own_transport = null;

    /** @var string|null Медкнижка
<br>
Возможные значения:
  - yes - Медкнижка есть
  - no - Медкнижки нет
 */
    public ?string $medical_book = null;
}
