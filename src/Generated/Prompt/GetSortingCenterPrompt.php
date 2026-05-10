<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt;

use Andy87\PhpClientSdk\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [GET] /delivery-sandbox/sorting-center.
 *
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/GetSortingCenter
 */
class GetSortingCenterPrompt extends AbstractPrompt
{
    protected const METHOD = 'GET';

    protected const ENDPOINT = '/delivery-sandbox/sorting-center';

    protected const CONTENT_TYPE = null;

    protected const AUTHORIZATION_REQUIRED = true;

    protected const QUERY_PARAMETER_STYLES = ['deliveryProviders' => ['style' => 'form', 'explode' => true]];

    protected const FIELD_MAP = ['deliveryProviders' => 'deliveryProviders'];

    protected const REQUIRED_FIELDS = ['deliveryProviders'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = ['deliveryProviders'];

    protected const HEADER_FIELDS = [];

    protected const BODY_FIELDS = [];

    protected const BODY_ROOT_FIELD = null;

    /** @var string Список кодов служб доставки, сортировочные центры которых необходимо вернуть */
    public string $deliveryProviders;
}
