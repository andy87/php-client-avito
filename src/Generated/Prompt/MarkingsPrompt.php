<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt;

use and_y87\PhpClientSdk\Request\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [POST] /order-management/1/markings.
 *
 * @documentation https://developers.avito.ru/api-catalog/order-management/documentation#operation/markings
 */
class MarkingsPrompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/order-management/1/markings';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const QUERY_PARAMETER_STYLES = [];

    protected const FIELD_MAP = ['markings' => 'markings'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['markings' => [\and_y87\php_client_avito\Generated\Schema\OrderManagement\Marking::class]];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const HEADER_FIELDS = [];

    protected const BODY_FIELDS = ['markings'];

    protected const BODY_ROOT_FIELD = null;

    /** @var array<int, \and_y87\php_client_avito\Generated\Schema\OrderManagement\Marking>|null Массив маркировок, которые требуется передать */
    public ?array $markings = null;
}
