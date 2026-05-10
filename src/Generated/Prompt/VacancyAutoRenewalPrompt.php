<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt;

use Andy87\PhpClientSdk\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [PUT] /job/v2/vacancies/{vacancy_uuid}/auto_renewal.
 *
 * @documentation https://developers.avito.ru/api-catalog/job/documentation#operation/vacancyAutoRenewal
 */
class VacancyAutoRenewalPrompt extends AbstractPrompt
{
    protected const METHOD = 'PUT';

    protected const ENDPOINT = '/job/v2/vacancies/{vacancy_uuid}/auto_renewal';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const QUERY_PARAMETER_STYLES = [];

    protected const FIELD_MAP = ['vacancy_uuid' => 'vacancy_uuid', 'X_Is_Employee' => 'X-Is-Employee', 'auto_renewal' => 'auto_renewal'];

    protected const REQUIRED_FIELDS = ['vacancy_uuid', 'auto_renewal'];

    protected const NULLABLE_FIELDS = ['X_Is_Employee'];

    protected const CASTS = [];

    protected const PATH_FIELDS = ['vacancy_uuid'];

    protected const QUERY_FIELDS = [];

    protected const HEADER_FIELDS = ['X_Is_Employee'];

    protected const BODY_FIELDS = ['auto_renewal'];

    protected const BODY_ROOT_FIELD = null;

    /** @var string UUID Идентификатор вакансии для V2 ручек
(возвращается ручкой [Публикация вакансии V2](https://developers.avito.ru/api-catalog/job/documentation#operation/vacancyCreateV2) )
 */
    public string $vacancy_uuid;

    /** @var bool|null Включает привилегии компании для сотрудника, позволяет включать автопродление вакансий принадлежащих сотруднику опубликованных от имени компании */
    public ?bool $X_Is_Employee = null;

    /** @var bool Body field auto_renewal */
    public bool $auto_renewal;
}
