<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\Job\Resume;

use Andy87\ClientsAvito\Generated\Prompt\ResumeGetItemPrompt as BaseResumeGetItemPrompt;

/**
 * Класс данных запроса Avito API [GET] /job/v2/resumes/{resume_id}.
 *
 * @documentation https://developers.avito.ru/api-catalog/job/documentation#operation/resumeGetItem
 *
 * @property bool|null $X_Is_Employee Включает привилегии компании для сотрудника, получает доступ к резюме от имени компании
 * @property int $resume_id Идентификатор резюме
 * @property string|null $fields Поля основного тела ответа (можно указать несколько значений через запятую). По умолчанию отображаются все поля.
 * @property string|null $params Дополнительные поля, которые входят в params (можно указать несколько значений через запятую). По умолчанию отображаются все поля.
 * @property bool|null $photos Признак того, нужно ли отдавать картинки, по умолчанию false
 */
class GetItemPrompt extends BaseResumeGetItemPrompt
{
}
