<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response\Job\Resume;

use Andy87\ClientsAvito\Generated\Response\ResumeGetItemResponse as BaseResumeGetItemResponse;

/**
 * Ответ Avito API [GET] /job/v2/resumes/{resume_id}.
 * 
 * @documentation https://developers.avito.ru/api-catalog/job/documentation#operation/resumeGetItem
 * 
 * @property \Andy87\ClientsAvito\Generated\Schema\Job\AddressDetails|null $address_details Response field address_details
 * @property string|null $description Описание резюме
 * @property int|null $id Идентификатор резюме
 * @property bool|null $is_active Активность резюме
 * @property bool|null $is_purchased Контакты резюме куплены
 * @property array<string, mixed>|null $params Блок с параметрами резюме. Все поля опциональны и выводятся при наличии
 * @property array<int, \Andy87\ClientsAvito\Generated\Schema\Job\Photo>|null $photos Присутствует в ответе только если в запросе есть флаг photos=true
 * @property int|null $salary Зарплата. Поле может отсутствовать в ответе (выводится при наличии зарплаты)
 * @property string|null $start_time Дата публикации резюме
 * @property string|null $title Наименование резюме
 * @property string|null $update_time Дата последнего обновления резюме
 * @property string|null $url URL резюме на сайте
 */
class GetItemResponse extends BaseResumeGetItemResponse
{
}
