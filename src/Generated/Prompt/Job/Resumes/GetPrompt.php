<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\Job\Resumes;

use Andy87\ClientsAvito\Generated\Prompt\ResumesGetPrompt as BaseResumesGetPrompt;

/**
 * Класс данных запроса Avito API [GET] /job/v1/resumes/.
 *
 * @documentation https://developers.avito.ru/api-catalog/job/documentation#operation/resumesGet
 *
 * @property bool|null $X_Is_Employee Включает привилегии компании для сотрудника
 * @property int|null $per_page Количество записей на странице (положительное число от 1 до 100)
 * @property int|null $page Номер страницы (положительное число больше 0, произведение page на per_page не должно превышать 5000)
 * @property int|null $cursor Курсор поиска (если не указан, будет начат новый поиск и его курсор будет возвращен в ответе)
 * @property string|null $fields Поля ответа (можно указать несколько значений через запятую)
 * @property string|null $query Поисковая фраза
 * @property int|null $location Идентификатор региона поиска (можно указать несколько значений через запятую) <br> Метод принимает идентификаторы сущностей Region и City из [справочника](https://autoload.avito.ru/format/Locations.xml).
 * @property int|null $metro Идентификатор метро поиска (можно указать несколько значений через запятую) <br> Метод принимает идентификаторы сущности Subway из [справочника](https://autoload.avito.ru/format/Locations.xml).
 * @property int|null $district Идентификатор района поиска (можно указать несколько значений через запятую) <br> Метод принимает идентификаторы сущности District из [справочника](https://autoload.avito.ru/format/Locations.xml).
 * @property array<string, mixed>|null $radius Радиус поиска
 * @property int|null $specialization Идентификатор сферы деятельности (можно указать несколько значений через запятую) <br> Возможные значения: - 10166 - IT, интернет, телеком - 10167 - Медицина, фармацевтика - 10168 - Продажи - 10169 - Страхование - 10170 - Транспорт, логистика - 10171 - Образование, наука - 10172 - Строительство - 10173 - Туризм, рестораны - 10174 - Фитнес, салоны красоты - 10175 - Без опыта, студенты - 10180 - Автомобильный бизнес - 10181 - Бухгалтерия, финансы - 10182 - Высший менеджмент - 10183 - Госслужба, НКО - 10184 - ЖКХ, эксплуатация - 10185 - Искусство, развлечения - 10186 - Консультирование - 10187 - Маркетинг, реклама, PR - 10188 - Охрана, безопасность - 10189 - Управление персоналом - 10190 - Юриспруденция - 10191 - Административная работа - 10192 - Банки, инвестиции - 10193 - Производство, сырьё, с/х - 16844 - Домашний персонал - 2804251 - Курьерская доставка - 2804250 - Такси
 * @property string|null $schedule График работы (можно указать несколько значений через запятую) <br> Возможные значения: - partial-day - Неполный рабочий день - full-day - Полный рабочий день - fly-in-fly-out - Вахтовый метод - flexible - Гибкий график - shift - Сменный график - remote - Удаленная работа
 * @property string|null $business_trip_readiness Готовность к командировкам (можно указать несколько значений через запятую) <br> Возможные значения: - ready - Готов - never - Не готов - sometimes - Иногда
 * @property string|null $relocation_readiness Готовность к переезду (можно указать несколько значений через запятую) <br> Возможные значения: - possible - Возможен - never - Невозможен
 * @property string|null $gender Пол (можно указать несколько значений через запятую) <br> Возможные значения: - female - Женщина - male - Мужчина
 * @property int|null $age_min Минимальный возраст (включительно, положительное число от 14 до 99)
 * @property int|null $age_max Максимальный возраст (включительно, положительное число от 18 до 99)
 * @property string|null $education_level Уровень образования (можно указать несколько значений через запятую) <br> Возможные значения: - higher - Высшее - unfinished-higher - Неоконченное высшее - secondary - Среднее - special-secondary - Среднее специальное
 * @property int|null $experience_min Минимальный стаж работы (включительно, положительное число от 0 до 50)
 * @property int|null $experience_max Максимальный стаж работы (включительно, положительное число от 0 до 50)
 * @property int|null $salary_min Минимальный размер заработной платы (включительно, положительное число)
 * @property int|null $salary_max Максимальный размер заработной платы (включительно, положительное число)
 * @property string|null $updated_at Дата последнего обновления (от updated_at до текущей даты)
 * @property string|null $updated_from Дата последнего обновления (от updated_at)
 * @property string|null $updated_to Дата последнего обновления (до updated_at)
 * @property int|null $nationality Идентификатор гражданства(можно указать несколько значений через запятую)</br> см. идентификаторы гражданства в [справочнике](https://www.avito.st/s/openapi/catalog_nationality.xml)</br> Распространенные значения: - 15973 - Россия - 15974 - Украина - 15975 - Белоруссия - 15979 - Азербайджан - 15985 - Армения - 16020 - Грузия - 15976 - Казахстан - 16046 - Киргизия - 16082 - Молдавия - 16129 - Таджикистан - 16140 - Узбекистан
 * @property string|null $driver_licence Водительское удостоверение <br> Возможные значения: - yes - Удостоверение есть - no - Удостоверения нет
 * @property string|null $driver_licence_category Категория водительского удостоверения (можно указать несколько значений через запятую) <br> Возможные значения: - a - b - be - c - ce - d - de - m - tm - tb
 * @property string|null $driving_experience Стаж вождения (можно указать несколько значений через запятую) <br> Возможные значения: - less-than-three-years - Стаж вождения меньше трех лет - more-than-three-years - Стаж вождения больше трех лет
 * @property string|null $own_transport Свой транспорт (можно указать несколько значений через запятую) <br> Возможные значения: - no - Нет - car - Легковое авто - cargo-car - Грузовое авто - bike - Мотоцикл - scooter - Мопед
 * @property string|null $medical_book Медкнижка <br> Возможные значения: - yes - Медкнижка есть - no - Медкнижки нет
 */
class GetPrompt extends BaseResumesGetPrompt
{
}
